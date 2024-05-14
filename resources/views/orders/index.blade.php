@extends('layouts.constant')

@section('content')
    <div class="container">
        <h1>All Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">VIN</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Image</th>
                    <th scope="col">Mileage</th>
                    <th scope="col">Price</th>
                    <th scope="col">Availability</th>
                    <!-- Add more table headings for additional fields if needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->vin }}</td>
                    <td>{{ $order->make }}</td>
                    <td>{{ $order->model }}</td>
                    <td>{{ $order->year }}</td>
                    <td><img src="{{ $order->image }}" alt="Car Image" style="max-width: 100px;"></td>
                    <td>{{ $order->mileage }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->availability ? 'Available' : 'Not Available' }}</td>
                    <!-- Add more table cells for additional fields if needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
