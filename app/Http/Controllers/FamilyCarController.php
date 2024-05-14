<?php

namespace App\Http\Controllers;

use App\Models\Models\FamilyCar;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InterventionImage;


class FamilyCarController extends Controller
{
    public function index()
    {
        $familyCars = FamilyCar::all();
        return view('family_cars.index', compact('familyCars'));
    }

    public function create()
    {
        return view('family_cars.create');
    }

   public function store(Request $request)
    {
        $request->validate([
            'vin' => 'required|unique:family_cars',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'mileage' => 'required|integer',
            'engine_type' => 'required',
            'transmission_type' => 'required',
            'fuel_efficiency' => 'required|numeric',
            'price' => 'required|numeric',
            'condition' => 'required',
            'location' => 'required',
            'availability' => 'required|boolean',
        ]);

        // Handle image upload and resize
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('assets/img/' . $imageName);
            InterventionImage::make($image->getRealPath())->resize(300, 200)->save($imagePath);
            $request->merge(['image' => $imageName]);
        }

        FamilyCar::create($request->all());
        return redirect()->route('family_cars.index')->with('success', 'Family car created successfully.');
    }
    public function show(FamilyCar $familyCar)
    {
        return view('family_cars.show', compact('familyCar'));
    }

    public function edit(FamilyCar $familyCar)
    {
        return view('family_cars.edit', compact('familyCar'));
    }

    public function update(Request $request, FamilyCar $familyCar)
{
    $request->validate([
        'make' => 'required',
        'model' => 'required',
        'year' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming max file size is 2MB
        'mileage' => 'required|integer',
        'engine_type' => 'required',
        'transmission_type' => 'required',
        'fuel_efficiency' => 'required|numeric',
        'price' => 'required|numeric',
        'condition' => 'required',
        'location' => 'required',
        'availability' => 'required|boolean',
    ]);

    // Update the fields except for the image
    $familyCar->update($request->except('image'));

    // Check if a new image is uploaded
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($familyCar->image) {
            Storage::delete($familyCar->image);
        }

        // Store and resize the new image
        $imagePath = $request->file('image')->store('public/assets/img');
        InterventionImage::make(storage_path('app/' . $imagePath))
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save();

        // Update the image path in the model
        $familyCar->image = $imagePath;
        $familyCar->save();
    }

    return redirect()->route('family_cars.index')->with('success', 'Family car updated successfully.');
}

    public function destroy(FamilyCar $familyCar)
    {
        $familyCar->delete();
        return redirect()->route('family_cars.index')->with('success', 'Family car deleted successfully.');
    }
}
