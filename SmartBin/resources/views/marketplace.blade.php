@extends('layouts.web')

@section('content')

<div class="container">

    <div class="d-flex align-items-center mb-4">
        <input type="text" class="form-control me-2" placeholder="🔍 Search for waste...">
        <button class="btn btn-outline-secondary">⚙️</button>
    </div>

    <p class="text-muted">{{ count($wastes) }} items found</p>

    <div class="row">

        @foreach($wastes as $w)
        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-sm overflow-hidden">

                <div style="height:200px; overflow:hidden;">
                    @if($w->image)
                        <img src="{{ asset('storage/'.$w->image) }}" 
                             class="w-100 h-100"
                             style="object-fit:cover;">
                    @else
                        <img src="https://via.placeholder.com/300" class="w-100 h-100">
                    @endif
                </div>

                <div class="p-3">

                    <h5 class="fw-bold">{{ $w->type }}</h5>

                    <p class="mb-1"><strong>Quantity:</strong> {{ $w->quantity }} kg</p>

                    <p class="text-muted small mb-2">
                        📍 {{ $w->address }}
                    </p>

                    <p class="small">
                        {{ \Illuminate\Support\Str::limit($w->description, 60) }}
                    </p>

                    <div class="d-flex justify-content-between mt-2 small text-muted">

    <span class="distance"
          data-lat="{{ $w->latitude }}"
          data-lng="{{ $w->longitude }}">
         calculating...
    </span>

    <span>
        {{ $w->created_at->diffForHumans() }}
    </span>
</div>

<div class="mt-2">
    @if($w->status == 1)
        <span class="badge bg-success">FREE</span>
    @elseif($w->status == 2)
        <span class="badge bg-warning">Requested</span>
    @elseif($w->status == 3)
        <span class="badge bg-danger">Sold</span>
    @endif
</div>

                    <a href="tel:{{ $w->mobile }}" 
                       class="btn btn-success w-100 mt-2">
                        📞 Call Seller
                    </a>

                </div>

            </div>

        </div>
        @endforeach

    </div>

</div>

@endsection




<script>
    let userLat = null;
    let userLng = null;

    navigator.geolocation.getCurrentPosition(function(position) {
        userLat = position.coords.latitude;
        userLng = position.coords.longitude;
    });
</script>


<!-- input feilds for form....
add price or negotible feild
location catch using gps map to calculate far for each waste
add title for sell waste -->