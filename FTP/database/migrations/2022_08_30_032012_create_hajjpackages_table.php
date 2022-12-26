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
        Schema::create('hajjpackages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('packageName');
            $table->string('groupLeader');
            $table->integer('numberOfPilgrims');
            $table->integer('groupNumber');
            $table->integer('stayingDays');
            $table->integer('packagePrice');
            
            // $table->string('makkaHotel');
            // $table->string('madinaHotel');
            // $table->string('bedsPrice');
            // $table->string('minaTentDetails');
            // $table->string('arafatTentDetails');
            // $table->string('transportDetails');
            // $table->string('packageDetails');
            
            //Thai to Saudi  travel
            $table->string('Th_airline');
            $table->date('Th_departmentDate');
            $table->date('S_arrivalDate');
            
            //Saudi to Thai travel
            $table->string('S_airline');
            $table->date('S_departmentDate');
            $table->date('Th_arrivalDate');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hajjpackages');
    }
};
