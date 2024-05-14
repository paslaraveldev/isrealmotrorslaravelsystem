<!-- resources/views/family_cars/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Family Cars</div>

                    <div class="card-body">
                        <a href="{{ route('family_cars.create') }}" class="btn btn-primary mb-3">Add Family Car</a>

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
                                @foreach($familyCars as $familyCar)
                                    <tr>
                                        <td>{{ $familyCar->vin }}</td>
                                        <td>{{ $familyCar->make }}</td>
                                        <td>{{ $familyCar->model }}</td>
                                        <td>{{ $familyCar->year }}</td>
                                      <td><img src="{{asset('assets/assets/img/')}}/{{$familyCar->Image}}"></td>
                                        <td>{{ $familyCar->mileage }}</td>
                                        <td>{{ $familyCar->engine_type }}</td>
                                        <td>{{ $familyCar->transmission_type }}</td>
                                        <td>{{ $familyCar->fuel_efficiency }}</td>
                                        <td>{{ $familyCar->price }}</td>
                                        <td>{{ $familyCar->condition }}</td>
                                        <td>{{ $familyCar->location }}</td>
                                        <td>{{ $familyCar->availability ? 'Available' : 'Not Available' }}</td>
                                        <td>
                                            <a href="{{ route('family_cars.show', $familyCar->vin) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('family_cars.edit', $familyCar->vin) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('family_cars.destroy', $familyCar->vin) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this family car?')">Delete</button>
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
