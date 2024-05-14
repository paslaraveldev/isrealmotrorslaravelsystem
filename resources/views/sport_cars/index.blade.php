<!-- resources/views/sport_cars/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Sport Cars</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card-body">
                        <a href="{{ route('sport_cars.create') }}" class="btn btn-primary mb-3">Add sports Car</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>VIN</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Year</th>
                                        <th>Image</th>
                                        <th>Mileage</th>
                                        <th>Engine Type</th>
                                        <th>Transmission Type</th>
                                        <th>Fuel Efficiency</th>
                                        <th>Price</th>
                                        <th>Condition</th>
                                        <th>Location</th>
                                        <th>Availability</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sportCars as $sportCar)
                                        <tr>
                                            <td>{{ $sportCar->vin }}</td>
                                            <td>{{ $sportCar->make }}</td>
                                            <td>{{ $sportCar->model }}</td>
                                            <td>{{ $sportCar->year }}</td>
                                            <td>{{ $sportCar->image }}</td>
                                            <td>{{ $sportCar->mileage }}</td>
                                            <td>{{ $sportCar->engine_type }}</td>
                                            <td>{{ $sportCar->transmission_type }}</td>
                                            <td>{{ $sportCar->fuel_efficiency }}</td>
                                            <td>{{ $sportCar->price }}</td>
                                            <td>{{ $sportCar->condition }}</td>
                                            <td>{{ $sportCar->location }}</td>
                                            <td>{{ $sportCar->availability == 1 ? 'Available' : 'Not Available' }}</td>
                                            <td>


                                                    <a href="{{ route('sport_cars.show', $sportCar) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('sport_cars.edit', $sportCar) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('sport_cars.destroy', $sportCar) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
