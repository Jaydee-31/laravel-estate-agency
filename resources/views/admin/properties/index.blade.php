@extends('admin.properties.layout')
@section('content')

    <div class="section index">
    
        <h1>Property Management</h1>
        <hr>
        <div class="top-row">
            <div class="button pull-left">
                <a class="btn btn-info" href="{{ route('home') }}"> Home</a>
            </div>
            <div class="button pull-left">
                <a class="btn btn-success" href="{{ route('properties.create') }}"> Add Property</a>
            </div>
    
        </div>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if($properties->isEmpty())
            <p>No properties found.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>House Number</th>
                            <th>Street</th>
                            <th>Image</th>
                            <th>Rent</th>
                            <th>Area</th>
                            <th>Beds</th>
                            <th>Baths</th>
                            <th>Garages</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties as $property)
                            <tr>
                                <td>{{ $property->id }}</td>
                                <td>{{ $property->house_no }}</td>
                                <td>{{ $property->street }}</td>
                                <td>{{ $property->image }}</td>
                                <td>{{ $property->rent }}</td>
                                <td>{{ $property->area }}</td>
                                <td>{{ $property->beds }}</td>
                                <td>{{ $property->baths }}</td>
                                <td>{{ $property->garages }}</td>
                                <td>
                                    <form action="{{ route('properties.destroy', $property->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('properties.edit', $property->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $properties->links() }}
        @endif
    </div>

@endsection