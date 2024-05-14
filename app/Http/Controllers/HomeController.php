<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Models\FamilyCar;
use App\Models\Models\LuxuryCar;
use App\Models\Models\SportCar;

use App\Models\Models\ClassicCar;
use Intervention\Image\Facades\Image as InterventionImage;



class HomeController extends Controller
{
      public function getSportCars()
    {
        $sportCars = SportCar::all();

     return view('sportcars',compact('sportCars'));
    }
      public function getFamilyCars()
    {
        $familyCars = FamilyCar::all();
     return view('familycars',compact('familyCars'));
    }

    public function getLuxuryCars()
    {
        $luxuryCars = LuxuryCar::all();
     return view('luxurycars',compact('luxuryCars'));
    }

    public function getClassicCars()
    {
        $classicCars = ClassicCar::all();
     return view('classiccars',compact('classicCars'));
    }


     public function index()
    {
        return view('about');
    }

     public function receipt()
    {
        return view('receipt');
    }
}
