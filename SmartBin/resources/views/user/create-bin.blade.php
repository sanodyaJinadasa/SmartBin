@extends('layouts.web')

@section('content')

<h2>➕ Add New Bin</h2>

<form action="{{ route('bins.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Bin Type</label>
        <select name="type" class="form-control">
            <option>Plastic</option>
            <option>Paper</option>
            <option>Food</option>
            <option>Glass</option>
            <option>Metal</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Latitude</label>
        <input type="text" name="latitude" class="form-control">
    </div>

    <div class="mb-3">
        <label>Longitude</label>
        <input type="text" name="longitude" class="form-control">
    </div>

    <button class="btn btn-success">Save Bin</button>

</form>

@endsection