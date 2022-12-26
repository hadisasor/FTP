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
        Schema::create('arafat_hajjpackage', function (Blueprint $table) {
            $table->integer('hajjpackage_id')->unsigned()->index();
            $table->integer('arafat_id')->unsigned()->index();

            $table->foreign('hajjpackage_id')
            ->references('id')
            ->on('hajjpackages')
            ->onDelete('cascade');

            $table->foreign('arafat_id')
            ->references('id')
            ->on('arafats')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arafat_hajjpackage');
    }
};
