<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{  
/**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all orders from the database
        $orders = Order::all();

        // Pass the orders to the view
        return view('orders.index', compact('orders'));
    }

    /**
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'vin' => 'required|string',
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'image' => 'required|string',
            'mileage' => 'required|integer',
            'price' => 'required|numeric',
            'availability' => 'required|boolean',
            // Add more validation rules as needed
        ]);

        // Create a new order instance
        $order = new Order();
        $order->fill($request->all());
        $order->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Order has been placed successfully!');
    }

}
