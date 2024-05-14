<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarOrder extends Model
{
      use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vin',
        'make',
        'model',
        'year',
        'image',
        'mileage',
        'engine_type',
        'transmission_type',
        'fuel_efficiency',
        'price',
        'condition',
        'location',
        'availability',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'availability' => 'boolean',
    ];
}
