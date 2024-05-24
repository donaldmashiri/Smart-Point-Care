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
        Schema::create('vital_parameters', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('blood_pressure');
            $table->string('heart_rate');
            $table->string('body_temperature');
            $table->string('oxygen_level');
            $table->string('weight');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vital_parameters');
    }
};
