@extends('layouts.app')

@section('content')


<style>
    body {
        background: linear-gradient(135deg, #dbeafe, #f0f9ff);
    }

    .dashboard-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        overflow: hidden;
    }

    .dashboard-header {
        background: linear-gradient(135deg, #3b82f6, #06b6d4);
        color: white;
        font-weight: 600;
        font-size: 1.2rem;
        padding: 15px;
    }

    .dashboard-body {
        padding: 30px;
        text-align: center;
    }

    .status-alert {
        border-radius: 10px;
        font-size: 0.95rem;
    }

    .welcome-text {
        font-size: 1.3rem;
        font-weight: 500;
        color: #1f2937;
    }

    .sub-text {
        color: #6b7280;
        margin-top: 10px;
    }

    .emoji {
        font-size: 2rem;
        margin-bottom: 10px;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card dashboard-card">
                
                <div class="dashboard-header text-center">
                    🚀 Dashboard
                </div>

                <div class="dashboard-body">
                    
                    <div class="emoji">👋</div>

                    @if (session('status'))
                        <div class="alert alert-success status-alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="welcome-text">
                        You are logged in!
                    </div>

                     <div class="sub-text">
                        Welcome back! Everything is running smoothly.
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
