<?php

namespace App\Http\Controllers;

use App\Models\Models\SportCar;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InterventionImage;


class SportCarController extends Controller
{
public function index()
    {
        $sportCars = SportCar::all();
        return view('sport_cars.index', compact('sportCars'));
    }

    public function create()
    {
        return view('sport_cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vin' => 'required|unique:sport_cars',
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

        SportCar::create($request->all());
        return redirect()->route('sport_cars.index')->with('success', 'Sport car created successfully.');
    }

    public function show(SportCar $sportCar)
    {
        return view('sport_cars.show', compact('sportCar'));
    }

    public function edit(SportCar $sportCar)
    {
        return view('sport_cars.edit', compact('sportCar'));
    }

    public function update(Request $request, SportCar $sportCar)
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

        $sportCar->update($request->all());
        return redirect()->route('sport_cars.index')->with('success', 'Sport car updated successfully.');
    }

    public function destroy(SportCar $sportCar)
    {
        $sportCar->delete();
        return redirect()->route('sport_cars.index')->with('success', 'Sport car deleted successfully.');
    }
}
