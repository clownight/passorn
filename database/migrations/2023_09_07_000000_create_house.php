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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('bed_room')->nullable();
            $table->string('bath_room')->nullable();
            $table->string('living_room')->nullable();
            $table->string('kitchen_room')->nullable();
            $table->string('car_park')->nullable();
            $table->string('pool_villa')->nullable();
            $table->string('area')->nullable();
            $table->string('blueprint')->nullable();
            $table->string('pool_size')->nullable();
            $table->string('pool_detail')->nullable();
            $table->text('images')->nullable();
            $table->text('cover')->nullable();

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
