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
        Schema::create('hotel_relations', function (Blueprint $table) {
            $table->increments('hajjpackage_id')->unsigned()->index()->nullable();
            $table->increments('umrahpackage_id')->unsigned()->index()->nullable();
            $table->increments('hotel_id')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('hotel_relations');
    }
};
