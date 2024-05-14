@extends('layouts.constant')

@section('content')
    <h1 class="text-center my-4">Family Cars</h1>
 <div class="card-section">
         @foreach($familyCars as $car)
            <div class="col">
                <div class="card">
                    <h5 class="card-header">{{ $car->make }} {{ $car->model }}</h5>
                    <div class="card-body">
                           <img src="{{ asset('assets/img/IMG.jpg') }}" class="card-img-top" alt="{{ $car->make }} {{ $car->model }}" style="width: 200px; height: 200px; object-fit: cover;">
                        <p class="card-text">VIN: {{ $car->vin }}</p>
                        <p class="card-text">Year: {{ $car->year }}</p>
                        <p class="card-text">Mileage: {{ $car->mileage }}</p>
                        <p class="card-text">Price: ${{ $car->price }}</p>
                        <p class="card-text">Availability: {{ $car->availability ? 'Available' : 'Not Available' }}</p>
                        <form action="{{ route('carorders.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="vin" value="{{ $car->vin }}">
                            <input type="hidden" name="make" value="{{ $car->make }}">
                            <input type="hidden" name="model" value="{{ $car->model }}">
                            <input type="hidden" name="year" value="{{ $car->year }}">
                            <input type="hidden" name="image" value="{{ $car->image }}">
                            <input type="hidden" name="mileage" value="{{ $car->mileage }}">
                            <input type="hidden" name="price" value="{{ $car->price }}">
                            <input type="hidden" name="availability" value="{{ $car->availability }}">
                            <!-- Add more hidden fields as needed -->
                        <a href="/receipt" class="btn btn-primary">Buy Now</a>


                            <small class="text-muted">Last updated: {{ $car->updated_at->diffForHumans() }}</small>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
