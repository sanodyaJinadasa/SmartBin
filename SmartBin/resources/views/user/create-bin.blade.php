@extends('layouts.web')

@section('content')

<div class="card shadow p-4">
    <h3 class="mb-4">➕ Add New Bin</h3>

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- ERROR MESSAGE --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bins.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Bin Type</label>
            <select name="type" class="form-select">
                <option value="">Select Type</option>
                <option value="Plastic">Plastic</option>
                <option value="Paper">Paper</option>
                <option value="Food">Food</option>
                <option value="Glass">Glass</option>
                <option value="Metal">Metal</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Latitude</label>
            <input type="text" name="latitude" class="form-control" placeholder="Enter latitude">
        </div>

        <div class="mb-3">
            <label class="form-label">Longitude</label>
            <input type="text" name="longitude" class="form-control" placeholder="Enter longitude">
        </div>
        <button type="button" onclick="getLocation()" class="btn btn-primary mt-2">
            📍 Get Current Location
        </button>


        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Auto detected address">
        </div>

          <button type="button" onclick="getAddress()" class="btn btn-info">
        🧭 Get Address
    </button>

        <button class="btn btn-success">Save Bin</button>
    </form>
</div>
<script>
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            document.querySelector('[name="latitude"]').value = position.coords.latitude;
            document.querySelector('[name="longitude"]').value = position.coords.longitude;
        }, function(error) {
            alert("Location access denied!");
        });
    } else {
        alert("Geolocation is not supported.");
    }
}

function getAddress() {
    let lat = document.querySelector('[name="latitude"]').value;
    let lng = document.querySelector('[name="longitude"]').value;

    if (!lat || !lng) {
        alert("Please get location first!");
        return;
    }

    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`)
        .then(response => response.json())
        .then(data => {
            document.querySelector('[name="address"]').value = data.display_name;
        })
        .catch(error => {
            console.log(error);
            alert("Failed to fetch address");
        });
}
</script>
@endsection