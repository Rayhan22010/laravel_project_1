<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admission_requis', function (Blueprint $table) {
            $table->id();
            $table->string('requiHeading');
            $table->string('requiPicture');
            $table->string('requiText');
            $table->string('transHeading');
            $table->string('transText');
            $table->string('transPicture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_requis');
    }
};
