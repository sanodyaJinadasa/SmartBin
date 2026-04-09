@extends('layouts.web')

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
    @forelse($bins as $bin)
        <tr>
            <td>{{ $bin->id }}</td>
            <td>{{ $bin->type }}</td>

            <td>
                @if($bin->status == 1)
                    <span class="badge bg-success">Empty</span>
                @elseif($bin->status == 2)
                    <span class="badge bg-warning text-dark">Half</span>
                @elseif($bin->status == 3)
                    <span class="badge bg-danger">Full</span>
                @else
                    <span class="badge bg-secondary">Unknown</span>
                @endif
            </td>

            <td>
                {{ $bin->address }} <br>
                <small class="text-muted">
                    ({{ $bin->latitude }}, {{ $bin->longitude }})
                </small>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No bins found</td>
        </tr>
    @endforelse
</tbody>
</table>

@endsection