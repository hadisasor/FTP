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
        Schema::create('details', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('hajjpackage_id')->nullable();
            $table->unsignedInteger('umrahpackage_id')->nullable();
            $table->string('information')->nullable();
            $table->string('img', 355)->nullable();
            $table->timestamps();
            $table->foreign('hajjpackage_id')->references('id')->on('hajjpackages')->onDelete('cascade');
            $table->foreign('umrahpackage_id')->references('id')->on('umrahpackages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_details');
    }
};
