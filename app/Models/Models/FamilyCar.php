<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyCar extends Model
{
   
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'vin';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

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
}
