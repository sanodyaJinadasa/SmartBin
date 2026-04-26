@extends('layouts.web')

@section('content')

<!-- <div class="text-center mt-5">
    <h1 class="fw-bold">🌱 Welcome to SmartBin</h1>
    <p class="mt-3 text-muted">
        Smart Waste Management System for Cleaner Cities 
    </p>

    <div>
    @auth
        <a href="{{ route('dashboard') }}" class="btn btn-light btn-sm">Dashboard</a>
        <a href="{{ route('bins') }}" class="btn btn-light btn-sm">Bins</a>
        <a href="{{ route('bins.create') }}" class="btn btn-warning btn-sm">Add Bin</a>
        <a href="{{ route('marketplace') }}" class="btn btn-dark ms-2">
                ♻️ Buy Waste 
            </a>

        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="btn btn-light btn-sm">Login</a>
        <a href="{{ route('register') }}" class="btn btn-warning btn-sm">Register</a>
    @endauth
</div>
</div> -->

<hr class="my-5">

<!-- FEATURES SECTION -->
<div class="row text-center">

    <div class="col-md-4">
        <div class="card shadow p-3">
            <h5>🗑️ Smart Bin Tracking</h5>
            <p>Monitor bin status in real-time.</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-3">
            <h5>🚚 Efficient Collection</h5>
            <p>Optimized routes for waste collection.</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow p-3">
            <h5>📊 Data & Analytics</h5>
            <p>Track waste trends and performance.</p>
        </div>
    </div>

</div>

@endsection

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif