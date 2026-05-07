@extends('layouts.web')

@section('content')


{{-- ERROR --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('waste.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label><i class="bi bi-recycle"></i> Waste Type</label>
            <select name="type" class="form-control">
                <option value="">Select Category</option>
                <option>Plastic</option>
                <option>Iron</option>
                <option>Glass</option>
                <option>Paper</option>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Quantity (kg)</label>
                <input type="number" step="0.01" name="quantity" class="form-control" placeholder="0.00">
            </div>
            <div class="col-md-6 mb-3">
                <label>Mobile Number</label>
                <input type="text" name="mobile" class="form-control" placeholder="0771234567">
            </div>
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control" placeholder="Full pickup address">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3" placeholder="e.g. 10 large water bottles..."></textarea>
        </div>

        <div class="mb-3">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Clear photos help us price your waste better.</small>
        </div>

        <button class="btn btn-success">Submit Listing</button>
    </form>
</div>

@endsection