@extends('layouts.web')

@section('content')

<h2 class="mb-4">♻️ Waste Marketplace</h2>

<div class="row">

@forelse($wastes as $w)

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">

            @if($w->image)
                <img src="{{ asset('storage/'.$w->image) }}" class="card-img-top" style="height:200px; object-fit:cover;">
            @endif

            <div class="card-body">
                <h5>{{ $w->type }}</h5>

                <p><strong>Quantity:</strong> {{ $w->quantity }} kg</p>

                <p><strong>Location:</strong><br>{{ $w->address }}</p>

                <p><strong>Description:</strong><br>{{ $w->description }}</p>

                <hr>

                {{-- 📞 CALL BUTTON --}}
                <a href="tel:{{ $w->mobile }}" class="btn btn-success w-100">
                    📞 Call Seller
                </a>

            </div>
        </div>
    </div>

@empty

    <div class="col-12 text-center">
        <p>No waste available right now</p>
    </div>

@endforelse

</div>

@endsection