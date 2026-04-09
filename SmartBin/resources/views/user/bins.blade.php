@extends('layouts.app')

@section('content')

<h2>🗑️ Your Bins</h2>

<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Status</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Plastic</td>
            <td><span class="badge bg-success">Empty</span></td>
            <td>Kurunegala</td>
        </tr>
    </tbody>
</table>

@endsection