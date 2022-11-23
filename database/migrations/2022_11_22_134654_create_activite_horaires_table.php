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
        Schema::create('activite_horaires', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('horaire_id');
            $table->foreign('horaire_id')->references('id')->on('horaires');
            $table->unsignedBigInteger('activite_id');
            $table->foreign('activite_id')->references('id')->on('activites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activite_horaires');
    }
};
