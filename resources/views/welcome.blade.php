@extends('layouts.constant')

@section('content')

           <main>
        <section class="card-section">
    <div class="card">
                <img src="{{ asset('assets/img/car image.jpg') }}" class="card-img-top"  style="width: 200px; height: 200px; object-fit: cover;">
                <a href="sportcars">Sport Cars</a>
            </div>
            <div class="card">
                 <img src="{{ asset('assets/img/car image.jpg') }}" class="card-img-top"  style="width: 200px; height: 200px; object-fit: cover;">
                <a href="classiccars">Classic Cars</a>
            </div>
            <div class="card">
 <img src="{{ asset('assets/img/car image2.jpg') }}" class="card-img-top"  style="width: 200px; height: 200px; object-fit: cover;">
                 <a href="luxurycars">Luxury Cars</a>
            </div>
            <div class="card">
                <img src="{{ asset('assets/img/IMG.jpg') }}" class="card-img-top"  style="width: 200px; height: 200px; object-fit: cover;">
                <a href="/familycars">Family Cars</a>
            </div>
        </section>

        <section class="about-us">
            <h2>About Us</h2>
            <p>We are dedicated to providing our clients with quality cars.</p>
        </section>

        <section class="trust-us">
            <h2>Why Trust Us</h2>
            <p>We have been in the automotive industry for years, ensuring customer satisfaction with every purchase.</p>
        </section>
    </main>
    @endsection

   