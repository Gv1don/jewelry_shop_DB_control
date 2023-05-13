<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buyers extends Migration
{
    public function up(): void
    {
        Schema::create('buyers', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
