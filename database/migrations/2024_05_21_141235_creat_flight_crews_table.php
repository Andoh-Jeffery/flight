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
    
     Schema::create('flight_crews', function (Blueprint $table) {
        $table->unsignedBigInteger('flight_id');
        $table->unsignedBigInteger('crew_id');
        
        $table->primary(['flight_id', 'crew_id']);
        $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
        $table->foreign('crew_id')->references('id')->on('crews')->onDelete('cascade');
    
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
        //
    }
};