@extends('admin.properties.layout')
@section('content')

    <div class="section edit">
        
        <h1>Update Property</h1>
        <hr>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
        <form method="POST" action="{{ route('properties.update', $property->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>house_no</strong>
                        <input type="text" name="house_no" class="form-control" placeholder="house_no" value="{{ $property->house_no }}" autofocus>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>street</strong>
                        <input type="text" name="street" class="form-control" placeholder="street" value="{{ $property->street }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>image</strong>
                        <input type="text" name="image" class="form-control" placeholder="Image location" value="{{ $property->image }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>rent</strong>
                        <input type="text" name="rent" class="form-control" placeholder="rent" value="{{ $property->rent }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>area</strong>
                        <input type="text" name="area" class="form-control" placeholder="area" value="{{ $property->area }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>beds</strong>
                        <input type="text" name="beds" class="form-control" placeholder="beds" value="{{ $property->beds }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>baths</strong>
                        <input type="text" name="baths" class="form-control" placeholder="baths" value="{{ $property->baths }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>garages</strong>
                        <input type="text" name="garages" class="form-control" placeholder="garages" value="{{ $property->garages }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('properties.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
