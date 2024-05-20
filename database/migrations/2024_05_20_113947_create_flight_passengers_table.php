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
        Schema::create('flight_passengers', function (Blueprint $table) {
            // $table->id();
                // $table->timestamps();
                $table->unsignedBigInteger('flight_id');
                $table->unsignedBigInteger('passenger_id');
                
                $table->primary(['flight_id', 'passenger_id']);
                $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
                $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
            
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
        Schema::dropIfExists('flight_passengers');
    }
};