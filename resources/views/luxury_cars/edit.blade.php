<!-- resources/views/luxury_cars/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Luxury Car</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('luxury_cars.update', $luxuryCar->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="vin">VIN</label>
                                <input type="text" name="vin" id="vin" class="form-control" value="{{ $luxuryCar->vin }}" required>
                            </div>

                            <div class="form-group">
                                <label for="make">Make</label>
                                <input type="text" name="make" id="make" class="form-control" value="{{ $luxuryCar->make }}" required>
                            </div>

                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" name="model" id="model" class="form-control" value="{{ $luxuryCar->model }}" required>
                            </div>

                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="number" name="year" id="year" class="form-control" value="{{ $luxuryCar->year }}" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="mileage">Mileage</label>
                                <input type="number" name="mileage" id="mileage" class="form-control" value="{{ $luxuryCar->mileage }}" required>
                            </div>

                            <div class="form-group">
                                <label for="engine_type">Engine Type</label>
                                <input type="text" name="engine_type" id="engine_type" class="form-control" value="{{ $luxuryCar->engine_type }}" required>
                            </div>

                            <div class="form-group">
                                <label for="transmission_type">Transmission Type</label>
                                <input type="text" name="transmission_type" id="transmission_type" class="form-control" value="{{ $luxuryCar->transmission_type }}" required>
                            </div>

                            <div class="form-group">
                                <label for="fuel_efficiency">Fuel Efficiency</label>
                                <input type="number" name="fuel_efficiency" id="fuel_efficiency" class="form-control" value="{{ $luxuryCar->fuel_efficiency }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control" value="{{ $luxuryCar->price }}" required>
                            </div>

                            <div class="form-group">
                                <label for="condition">Condition</label>
                                <input type="text" name="condition" id="condition" class="form-control" value="{{ $luxuryCar->condition }}" required>
                            </div>

                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" name="location" id="location" class="form-control" value="{{ $luxuryCar->location }}" required>
                            </div>

                            <div class="form-group">
                                <label for="availability">Availability</label>
                                <select name="availability" id="availability" class="form-control" required>
                                    <option value="1" {{ $luxuryCar->availability == 1 ? 'selected' : '' }}>Available</option>
                                    <option value="0" {{ $luxuryCar->availability == 0 ? 'selected' : '' }}>Not Available</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
