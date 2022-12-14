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
        Schema::create('activite_enfant', function (Blueprint $table) {
            $table->unsignedBigInteger('activite_id');
            $table->foreign('activite_id')->references('id')->on('activites')->onDelete('cascade');
            $table->unsignedBigInteger('enfant_id');
            $table->foreign('enfant_id')->references('id')->on('enfants')->onDelete('cascade');
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
        Schema::dropIfExists('activite_enfant');
    }
};
