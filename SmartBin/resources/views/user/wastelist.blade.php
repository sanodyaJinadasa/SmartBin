<!-- @extends('layouts.web')

@section('content')

<h3>♻️ Your Waste Listings</h3>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('waste.create') }}" class="btn btn-success mb-3">+ Add Waste</a>

<table class="table table-bordered table-hover">
    <thead class="table-success">
        <tr>
            <th>Type</th>
            <th>Quantity</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Image</th>
        </tr>
    </thead>

    <tbody>
        @forelse($wastes as $w)
        <tr>
            <td>{{ $w->type }}</td>
            <td>{{ $w->quantity }} kg</td>
            <td>{{ $w->mobile }}</td>
            <td>{{ $w->address }}</td>

            <td>
                @if($w->image)
                    <img src="{{ asset('storage/'.$w->image) }}" width="80">
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">No data found</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection -->




@extends('layouts.web')

@section('content')

<style>
    body {
        background: #f4f7fb;
    }

    .page-title {
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 20px;
    }

    .add-btn {
        background: linear-gradient(135deg, #22c55e, #16a34a);
        border: none;
        border-radius: 10px;
        padding: 8px 16px;
        font-weight: 500;
        transition: 0.3s;
    }

    .add-btn:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }

    .table-card {
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        padding: 20px;
    }

    .custom-table {
        border-radius: 12px;
        overflow: hidden;
    }

    .custom-table thead {
        background: linear-gradient(135deg, #22c55e, #4ade80);
        color: white;
        font-weight: 600;
    }

    .custom-table tbody tr {
        transition: 0.2s;
    }

    .custom-table tbody tr:hover {
        background-color: #f0fdf4;
        transform: scale(1.01);
    }

    .waste-img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 10px;
        border: 2px solid #e5e7eb;
    }

    .alert-success {
        border-radius: 10px;
    }

    .no-data {
        color: #6b7280;
        font-style: italic;
    }
</style>
<div class="container mt-4">

    <h3 class="page-title">♻️ Your Waste Listings</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('waste.create') }}" class="btn add-btn text-white mb-3">
        + Add Waste
    </a>

    <div class="table-card">
        <table class="table custom-table table-hover">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Image</th>
                </tr>
            </thead>

            <tbody>
                @forelse($wastes as $w)
                <tr>
                    <td><strong>{{ $w->type }}</strong></td>
                    <td>{{ $w->quantity }} kg</td>
                    <td>{{ $w->mobile }}</td>
                    <td>{{ $w->address }}</td>

                    <td>
                        @if($w->image)
                            <img src="{{ asset('storage/'.$w->image) }}" class="waste-img">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                </tr>
                @empty