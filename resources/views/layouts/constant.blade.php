<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->


    <style>
        body {
            font-family: montserrat, regular;
            margin: 0;
            padding: 0;
            background-color: yellow;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        header h1 {
            display: inline;
            margin-left: 20px;
        }

        header img {
            vertical-align: middle;
            margin-right: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 10px;
            padding: 10px;
            background-color: lightgreen;

        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            display: block;
            padding: 12px 16px;
            text-decoration: none;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        main {
            padding: 20px;
        }

     .card-section {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns */
    grid-auto-rows: auto; /* Automatically adjust row height */
    grid-gap: 20px; /* Spacing between cards */
}

.card {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card h2 {
    color: #00a651;
    margin-bottom: 10px;
}

.card p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 10px;
}

.card a {
    display: block;
}

.card img {
    width: 100%; /* Make images fill their container */
    border-radius: 10px; /* Rounded corners */
}


        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer h3 {
            margin-top: 0;
        }

        .footer-section {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .footer-card {
            flex: 1;
            margin: 0 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }

        .footer-card h3 {
            margin-top: 0;
        }

        .footer-card ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-card ul li {
            margin-bottom: 5px;
        }

        .footer-card ul li a {
            color: #333;
            text-decoration: none;
        }

        .footer-card ul li a:hover {
            color: #ffd700;
        }

        .footer-card p {
            margin: 5px 0;
        }

        footer p {
            color: #ccc;
            font-size: 0.8em;
        }
         font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: lightgreen;
        color: #fff;
        padding: 10px 20px; /* Adjust padding for better spacing */
        border-bottom: 2px solid #333; /* Add border */
    }

    nav {
        border: 2px solid #333; /* Add border to nav */
        border-bottom: none; /* Remove bottom border */
        margin-left: 20px; /* Push content to the left */
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav ul li a {
        color: #333; /* Change link color */
        text-decoration: none;
    }

    nav ul li a:hover {
        color: #ffd700;
    }

    footer {
        background-color: lightgreen;
        color: #333; /* Change text color */
        padding: 20px;
        text-align: center;
        border-top: 2px solid #333; /* Add border */
    }

    footer a {
        color: #333; /* Change link color */
        text-decoration: none;
    }

    footer a:hover {
        color: #ffd700;
    }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
      <script>
        function generateReceipt(event) {
            event.preventDefault(); // Prevent form submission

            // Get the card element
            var card = event.target.closest('.card');

            // Collect data from the card
            var make = card.querySelector('h5.card-title').textContent;
            var vin = card.querySelector('p.card-text.vin').textContent;
            var year = card.querySelector('p.card-text.year').textContent;
            var mileage = card.querySelector('p.card-text.mileage').textContent;
            var price = card.querySelector('p.card-text.price').textContent;
            var availability = card.querySelector('p.card-text.availability').textContent;

            // Generate receipt content
            var receiptContent = "Make: " + make + "\n" +
                                "VIN: " + vin + "\n" +
                                "Year: " + year + "\n" +
                                "Mileage: " + mileage + "\n" +
                                "Price: " + price + "\n" +
                                "Availability: " + availability;

            // Display the receipt (you can customize how you want to display it, for example, using a modal)
            alert("Receipt:\n\n" + receiptContent);
        }
    </script>
</head>
<body class="antialiased">
    <header background-color: lightgreen;> 
     <div  class="logo">
        
        <img src="{{ asset('assets/img/logo.jpg') }}" class="card-img-top"  style="width: 50px; height: 50px; object-fit: cover;">
                        <div class="card-body">
        <h1>ISREAL MOTORS</h1>
    </div></header>
<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li class="dropdown">
            <a href="#">Categories</a>
            <div class="dropdown-content">
                <a href="/sportcars">Sport Cars</a>
                <a href="/classiccars">Classic Cars</a>
                <a href="/luxurycars">Luxury Cars</a>
                <a href="/familycars">Family Cars</a>
            </div>
        </li>
        <li><a href="#">Contact Us</a></li>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        @endguest
    </ul>
</nav>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    @yield('content')


    <footer>
        <div class="footer-section">
            <div class="footer-card">
                <h3>Follow Us</h3>
                <p>Follow us on social media:</p>
                <a href="#">Facebook</a><br>
                <a href="#">Instagram</a><br>
                <a href="#">Twitter</a>
            </div>
            <div class="footer-card">
                <h3>Quick Links</h3>
                <ul>
                     <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-card">
                <h3>Get In Touch</h3>
                <p>WhatsApp: +1234567890</p>
                <p>Mobile: +1234567890</p>
            </div>
        </div>
        <div>
            <p>&copy; 2024 Israel Motors. All rights reserved.</p>
        </div>
    </footer>
</div>
</div>
</body>

</html>
