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
        Schema::create('batmen', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('backName');
            $table->string('email');
            $table->string('number');
            $table->string('address');
            $table->string('city');
            $table->string('size');
            $table->string('jersey');
            $table->string('sleeve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batmen');
    }
};
