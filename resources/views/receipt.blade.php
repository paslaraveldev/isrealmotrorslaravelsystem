@extends('layouts.constant')

@section('content')
<div class="category">
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h1 class="card-title">Shopping Cart</h1>
                <div class="checkout-step">
                    <span>Checkout: On set</span>
                    <span>Shopping Info</span>
                </div>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="Doe Aruho Peter" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" value="anuho@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="+256700340000" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Street Address</label>
                        <input type="text" id="address" name="address" value="Mbarara HighStreet" required>
                    </div>
                    <div class="form-group">
                        <label>Vehicle Type:</label>
                        <select name="vehicle_type" id="vehicle_type">
                            <option value="sports_car">Sports Car</option>
                            <option value="family_car">Family Car</option>
                            <option value="classic_car">Classic Car</option> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantity:</label>
                        <select name="quantity" id="quantity">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="total_cost">Total costs</label>
                        <input type="text" id="total_cost" name="total_cost" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" name="country" required>
                            <option value="Uganda" selected>Uganda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="billing_address" checked>
                            Use as billing address
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Continue to Payment ></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
