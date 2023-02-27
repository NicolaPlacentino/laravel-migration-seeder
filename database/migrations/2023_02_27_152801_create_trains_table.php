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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('departure_station', 50);
            $table->string('arriving_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arriving_time');
            $table->string('train_code', 10);
            $table->tinyInteger('wagon_number')->unsigned()->nullable();
            $table->boolean('is_on_time')->default(1);
            $table->boolean('is_cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
