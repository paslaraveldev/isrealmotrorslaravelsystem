<!-- classic_cars/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Classic Cars
                        <a href="{{ route('classic_cars.create') }}" class="btn btn-primary float-right">Add Classic Car</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table">
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classicCars as $classicCar)
                                    <tr>
                                        <td>{{ $classicCar->vin }}</td>
                                        <td>{{ $classicCar->make }}</td>
                                        <td>{{ $classicCar->model }}</td>
                                        <td>{{ $classicCar->year }}</td>
                                        <td>{{ $classicCar->image }}</td>
                                        <td>{{ $classicCar->mileage }}</td>
                                        <td>{{ $classicCar->engine_type }}</td>
                                        <td>{{ $classicCar->transmission_type }}</td>
                                        <td>{{ $classicCar->fuel_efficiency }}</td>
                                        <td>{{ $classicCar->price }}</td>
                                        <td>{{ $classicCar->condition }}</td>
                                        <td>{{ $classicCar->location }}</td>
                                        <td>{{ $classicCar->availability ? 'Available' : 'Not Available' }}</td>
                                        <td>
                                            <a href="{{ route('classic_cars.show', $classicCar) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('classic_cars.edit', $classicCar) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('classic_cars.destroy', $classicCar) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this classic car?')">Delete</button>
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
@endsection
