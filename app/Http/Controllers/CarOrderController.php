<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Models\CarOrder;


class CarOrderController extends Controller
{
     /**
     * Store a newly created car order in storage.
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mileage' => 'required|integer',
            'engine_type' => 'nullable|string',
            'transmission_type' => 'nullable|string',
            'fuel_efficiency' => 'nullable|numeric',
            'price' => 'required|numeric',
            'condition' => 'nullable|string',
            'location' => 'nullable|string',
            'availability' => 'required|boolean',
            // Add more validation rules as needed
        ]);

        // Create a new classic car instance
        $classicCar = new CarOrder();
        $classicCar->vin = $request->vin;
        $classicCar->make = $request->make;
        $classicCar->model = $request->model;
        $classicCar->year = $request->year;
        $classicCar->mileage = $request->mileage;
        $classicCar->engine_type = $request->input('engine_type');
        $classicCar->transmission_type = $request->input('transmission_type');
        $classicCar->fuel_efficiency = $request->input('fuel_efficiency');
        $classicCar->price = $request->price;
        $classicCar->condition = $request->input('condition');
        $classicCar->location = $request->input('location');
        $classicCar->availability = $request->availability;

         if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');
            $resizedImage = InterventionImage::make($uploadedImage)
                ->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

            $fileName = time() . $uploadedImage->getClientOriginalName();
            $resizedImage->save(public_path('assets/images/' . $fileName));
            $admin->image = $fileName;
        }

        // Save the classic car
        $classicCar->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Car order has been placed successfully!');
    }

    /**
     * Display the specified car order.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find the classic car by ID
        $classicCar = ClassicCar::findOrFail($id);

        // Return the view with the classic car data
        return view('classiccars.show', compact('classicCar'));
    }
     }
