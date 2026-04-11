@extends('layouts.web')

@section('content')

<div class="card shadow p-4">
    <h3>♻️ Sell Your Waste</h3>

    {{-- ERROR --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('waste.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Waste Type</label>
            <select name="type" class="form-control">
                <option value="">Select</option>
                <option>Plastic</option>
                <option>Iron</option>
                <option>Glass</option>
                <option>Paper</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Quantity (kg)</label>
            <input type="number" step="0.01" name="quantity" class="form-control">
        </div>

        <div class="mb-3">
            <label>Mobile Number</label>
            <input type="text" name="mobile" class="form-control" placeholder="0771234567">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success">Submit</button>
    </form>
</div>

@endsection