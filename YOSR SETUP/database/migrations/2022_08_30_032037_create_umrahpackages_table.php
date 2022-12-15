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
        Schema::create('umrahpackages', function (Blueprint $table) {
            $table->id();
            $table->string('packageName');
            $table->string('groupLeader');
            $table->integer('numberOfPilgrims');
            $table->integer('groupNumber');
            $table->integer('stayingDays');
            $table->integer('packagePrice');
            
            $table->string('makkaHotel');
            $table->string('madinaHotel');
            $table->string('bedsPrice');
            $table->string('transportDetails');
            $table->string('packageDetails');
            
            //Thai to Saudi  travel
            $table->date('Th_departmentDate');
            $table->date('S_arrivalDate');
            $table->string('Th_airline');
            //Saudi to Thai travel
            $table->date('S_departmentDate');
            $table->date('Th_arrivalDate');
            $table->string('S_airline');
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
        Schema::dropIfExists('umrahpackages');
    }
};
