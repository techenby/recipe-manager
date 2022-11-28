<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('team_id')->constrained();
            $table->string('name');
            $table->longText('ingredients')->nullable();
            $table->longText('directions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
