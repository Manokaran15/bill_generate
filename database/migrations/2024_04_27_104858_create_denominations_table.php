<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denominations', function (Blueprint $table) {
            $table->id();
            $table->string('number_of_500')->nullable();
            $table->string('number_of_50')->nullable();
            $table->string('number_of_20')->nullable();
            $table->string('number_of_10')->nullable();
            $table->string('number_of_5')->nullable();
            $table->string('number_of_2')->nullable();
            $table->string('number_of_1')->nullable();
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
        Schema::dropIfExists('denominations');
    }
}
