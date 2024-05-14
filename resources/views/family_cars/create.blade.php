<!-- resources/views/family_cars/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Family Car</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('family_cars.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="vin">VIN</label>
                                <input type="text" name="vin" id="vin" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="make">Make</label>
                                <input type="text" name="make" id="make" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" name="model" id="model" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="number" name="year" id="year" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="mileage">Mileage</label>
                                <input type="number" name="mileage" id="mileage" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="engine_type">Engine Type</label>
                                <input type="text" name="engine_type" id="engine_type" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="transmission_type">Transmission Type</label>
                                <input type="text" name="transmission_type" id="transmission_type" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="fuel_efficiency">Fuel Efficiency</label>
                                <input type="number" name="fuel_efficiency" id="fuel_efficiency" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="condition">Condition</label>
                                <input type="text" name="condition" id="condition" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" name="location" id="location" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="availability">Availability</label>
                                <select name="availability" id="availability" class="form-control" required>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Family Car</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
