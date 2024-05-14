<!-- resources/views/luxury_cars/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Luxury Cars</div>

                    <div class="card-body">
                        <a href="{{ route('luxury_cars.create') }}" class="btn btn-primary mb-3">Add Luxury Car</a>

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
                                @foreach($luxuryCars as $luxuryCar)
                                    <tr>
                                        <td>{{ $luxuryCar->vin }}</td>
                                        <td>{{ $luxuryCar->make }}</td>
                                        <td>{{ $luxuryCar->model }}</td>
                                        <td>{{ $luxuryCar->year }}</td>
                                        <td><img src="{{ asset('storage/' . $luxuryCar->image) }}" alt="Car Image" style="max-width: 100px;"></td>
                                        <td>{{ $luxuryCar->mileage }}</td>
                                        <td>{{ $luxuryCar->engine_type }}</td>
                                        <td>{{ $luxuryCar->transmission_type }}</td>
                                        <td>{{ $luxuryCar->fuel_efficiency }}</td>
                                        <td>{{ $luxuryCar->price }}</td>
                                        <td>{{ $luxuryCar->condition }}</td>
                                        <td>{{ $luxuryCar->location }}</td>
                                        <td>{{ $luxuryCar->availability ? 'Available' : 'Not Available' }}</td>
                                        <td>
                                            <a href="{{ route('luxury_cars.show', $luxuryCar) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('luxury_cars.edit', $luxuryCar) }}" class="btn btn-secondary">Edit</a>
                                             <form action="{{ route('luxury_cars.destroy', $luxuryCar) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this luxury car?')">Delete</button>
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
