<!-- classic_cars/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Classic Car
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('classic_cars.update', $classicCar->vin) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="vin">VIN</label>
                                <input type="text" class="form-control" id="vin" name="vin" value="{{ $classicCar->vin }}" required>
                            </div>
                            <div class="form-group">
                                <label for="make">Make</label>
                                <input type="text" class="form-control" id="make" name="make" value="{{ $classicCar->make }}" required>
                            </div>
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" class="form-control" id="model" name="model" value="{{ $classicCar->model }}" required>
                            </div>
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="number" class="form-control" id="year" name="year" value="{{ $classicCar->year }}" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" value="{{ $classicCar->image }}">
                            </div>
                            <div class="form-group">
                                <label for="mileage">Mileage</label>
                                <input type="number" class="form-control" id="mileage" name="mileage" value="{{ $classicCar->mileage }}" required>
                            </div>
                            <div class="form-group">
                                <label for="engine_type">Engine Type</label>
                                <input type="text" class="form-control" id="engine_type" name="engine_type" value="{{ $classicCar->engine_type }}" required>
                            </div>
                            <div class="form-group">
                                <label for="transmission_type">Transmission Type</label>
                                <input type="text" class="form-control" id="transmission_type" name="transmission_type" value="{{ $classicCar->transmission_type }}" required>
                            </div>
                            <div class="form-group">
                                <label for="fuel_efficiency">Fuel Efficiency</label>
                                <input type="number" step="0.01" class="form-control" id="fuel_efficiency" name="fuel_efficiency" value="{{ $classicCar->fuel_efficiency }}" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $classicCar->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="condition">Condition</label>
                                <input type="text" class="form-control" id="condition" name="condition" value="{{ $classicCar->condition }}" required>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ $classicCar->location }}" required>
                            </div>
                            <div class="form-group">
                                <label for="availability">Availability</label>
                                <select class="form-control" id="availability" name="availability" required>
                                    <option value="1" {{ $classicCar->availability ? 'selected' : '' }}>Available</option>
                                    <option value="0" {{ !$classicCar->availability ? 'selected' : '' }}>Not Available</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Classic Car</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
