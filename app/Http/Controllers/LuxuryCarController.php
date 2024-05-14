<?php

namespace App\Http\Controllers;

use App\Models\Models\LuxuryCar;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InterventionImage;


class LuxuryCarController extends Controller
{
    public function index()
    {
        $luxuryCars = LuxuryCar::all();
        return view('luxury_cars.index', compact('luxuryCars'));
    }

    public function create()
    {
        return view('luxury_cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vin' => 'required|unique:luxury_cars',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'image' => 'nullable|string',
            'mileage' => 'required|integer',
            'engine_type' => 'required',
            'transmission_type' => 'required',
            'fuel_efficiency' => 'required|numeric',
            'price' => 'required|numeric',
            'condition' => 'required',
            'location' => 'required',
            'availability' => 'required|boolean',
        ]);

        LuxuryCar::create($request->all());
        return redirect()->route('luxury_cars.index')->with('success', 'Luxury car created successfully.');
    }

    public function show(LuxuryCar $luxuryCar)
    {
        return view('luxury_cars.show', compact('luxuryCar'));
    }

    public function edit(LuxuryCar $luxuryCar)
    {
        return view('luxury_cars.edit', compact('luxuryCar'));
    }

    public function update(Request $request, LuxuryCar $luxuryCar)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'image' => 'nullable|string',
            'mileage' => 'required|integer',
            'engine_type' => 'required',
            'transmission_type' => 'required',
            'fuel_efficiency' => 'required|numeric',
            'price' => 'required|numeric',
            'condition' => 'required',
            'location' => 'required',
            'availability' => 'required|boolean',
        ]);

        $luxuryCar->update($request->all());
        return redirect()->route('luxury_cars.index')->with('success', 'Luxury car updated successfully.');
    }

    public function destroy(LuxuryCar $luxuryCar)
    {
        $luxuryCar->delete();
        return redirect()->route('luxury_cars.index')->with('success', 'Luxury car deleted successfully.');
    }
}
