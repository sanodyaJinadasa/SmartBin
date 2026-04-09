@extends('layouts.web')

@section('content')

<h2>🚛 Driver Dashboard</h2>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card p-3 shadow text-center">
            <h6>Assigned Bins</h6>
            <h2>{{ $assignedBins }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow text-center border-danger">
            <h6>Full Bins 🔴</h6>
            <h2 class="text-danger">{{ $fullBins }}</h2>
        </div>
    </div>

</div>

@endsection