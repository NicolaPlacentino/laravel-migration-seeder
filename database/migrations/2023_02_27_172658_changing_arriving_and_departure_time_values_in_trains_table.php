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
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('departure_time');
            $table->dropColumn('arriving_time');
            $table->time('departure_hour')->after('arriving_day');
            $table->time('arriving_hour')->after('departure_hour');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('departure_hour');
            $table->dropColumn('arriving_hour');
            $table->dateTime('departure_time');
            $table->dateTime('arriving_time');
        });
    }
};
