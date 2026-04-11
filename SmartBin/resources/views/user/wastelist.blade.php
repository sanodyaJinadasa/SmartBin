@extends('layouts.web')

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

@endsection