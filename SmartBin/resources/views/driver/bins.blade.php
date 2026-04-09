@extends('layouts.web')

@section('content')

<h2>🚛 Assigned Bins</h2>

<table class="table table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bins as $bin)
        <tr>
            <td>{{ $bin->id }}</td>
            <td>{{ $bin->type }}</td>

            <td>
                @if($bin->status == 3)
                    <span class="badge bg-danger">Full</span>
                @elseif($bin->status == 2)
                    <span class="badge bg-warning">Half</span>
                @else
                    <span class="badge bg-success">Empty</span>
                @endif
            </td>

            <td>
                <form action="{{ route('driver.bin.update', $bin->id) }}" method="POST">
                    @csrf

                    <select name="status" class="form-select mb-2">
                        <option value="1">Empty</option>
                        <option value="2">Half</option>
                        <option value="3">Full</option>
                    </select>

                    <button class="btn btn-primary btn-sm">Update</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection