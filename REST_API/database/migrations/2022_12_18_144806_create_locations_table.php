<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->integer('people_id');
            $table->foreign('people_id')->references('id')->on('people');
            $table->text('address');
            $table->text('city');
            $table->text('country');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
