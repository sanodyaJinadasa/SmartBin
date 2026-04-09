@extends('layouts.web')

@section('content')

<h2>👋 Welcome to SmartBin Dashboard</h2>

<div class="row mt-4">

    <!-- TOTAL -->
    <div class="col-md-3">
        <div class="card p-3 shadow text-center">
            <h6>Total Bins</h6>
            <h2>{{ $totalBins }}</h2>
        </div>
    </div>

    <!-- EMPTY -->
    <div class="col-md-3">
        <div class="card p-3 shadow text-center border-success">
            <h6>Empty Bins 🟢</h6>
            <h2 class="text-success">{{ $emptyBins }}</h2>
        </div>
    </div>

    <!-- HALF -->
    <div class="col-md-3">
        <div class="card p-3 shadow text-center border-warning">
            <h6>Half Bins 🟡</h6>
            <h2 class="text-warning">{{ $halfBins }}</h2>
        </div>
    </div>

    <!-- FULL -->
    <div class="col-md-3">
        <div class="card p-3 shadow text-center border-danger">
            <h6>Full Bins 🔴</h6>
            <h2 class="text-danger">{{ $fullBins }}</h2>
        </div>
    </div>

</div>

@endsection