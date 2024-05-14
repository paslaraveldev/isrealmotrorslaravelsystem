<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luxury_cars', function (Blueprint $table) {
           $table->string('vin')->primary(); // Making 'vin' column the primary key
            $table->string('make');
            $table->string('model');
            $table->unsignedSmallInteger('year');
            $table->string('image')->nullable();
            $table->unsignedInteger('mileage');
            $table->string('engine_type');
            $table->string('transmission_type');
            $table->decimal('fuel_efficiency', 8, 2);
            $table->decimal('price', 10, 2);
            $table->string('condition');
            $table->string('location');
            $table->boolean('availability')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luxury_cars');
    }
};
