<?php

namespace App\Http\Controllers;

use App\Models\Models\ClassicCar;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InterventionImage;



class ClassicCarController extends Controller
{
     public function index()
    {
        $classicCars = ClassicCar::all();
        return view('classic_cars.index', compact('classicCars'));
    }

    public function create()
    {
        return view('classic_cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vin' => 'required|unique:classic_cars',
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

        ClassicCar::create($request->all());
        return redirect()->route('classic_cars.index')->with('success', 'Classic car created successfully.');
    }

    public function show(ClassicCar $classicCar)
    {
        return view('classic_cars.show', compact('classicCar'));
    }

    public function edit(ClassicCar $classicCar)
    {
        return view('classic_cars.edit', compact('classicCar'));
    }

    public function update(Request $request, ClassicCar $classicCar)
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

        $classicCar->update($request->all());
        return redirect()->route('classic_cars.index')->with('success', 'Classic car updated successfully.');
    }

    public function destroy(ClassicCar $classicCar)
    {
        $classicCar->delete();
        return redirect()->route('classic_cars.index')->with('success', 'Classic car deleted successfully.');
    }
}
