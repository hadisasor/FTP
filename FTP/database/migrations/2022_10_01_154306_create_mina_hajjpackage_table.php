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
        Schema::create('mina_hajjpackage', function (Blueprint $table) {
            $table->integer('hajjpackage_id')->unsigned()->index();
            $table->integer('mina_id')->unsigned()->index();

            $table->foreign('hajjpackage_id')
            ->references('id')
            ->on('hajjpackages')
            ->onDelete('cascade');


            $table->foreign('mina_id')
            ->references('id')
            ->on('minas')
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
        Schema::dropIfExists('mina_hajjpackage');
    }
};
