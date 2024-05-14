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
        Schema::table('car_orders', function (Blueprint $table) {
        $table->string('make')->nullable()->change();
        $table->string('model')->nullable()->change();
        $table->unsignedSmallInteger('year')->nullable()->change();
        $table->string('image')->nullable()->change();
        $table->unsignedInteger('mileage')->nullable()->change();
        $table->string('engine_type')->nullable()->change();
        $table->string('transmission_type')->nullable()->change();
        $table->decimal('fuel_efficiency', 8, 2)->nullable()->change();
        $table->decimal('price', 10, 2)->nullable()->change();
        $table->string('condition')->nullable()->change();
        $table->string('location')->nullable()->change();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
