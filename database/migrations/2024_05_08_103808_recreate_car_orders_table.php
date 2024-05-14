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
        Schema::dropIfExists('car_orders');

        Schema::create('car_orders', function (Blueprint $table) {
            $table->id();
            $table->string('vin');
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->unsignedSmallInteger('year')->nullable();
            $table->string('image')->nullable();
            $table->unsignedInteger('mileage')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('transmission_type')->nullable();
            $table->decimal('fuel_efficiency', 8, 2)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('condition')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('car_orders');
    }
};
    