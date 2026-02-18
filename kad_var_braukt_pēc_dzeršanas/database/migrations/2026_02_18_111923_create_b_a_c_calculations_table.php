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
        Schema::create('b_a_c_calculations', function (Blueprint $table) {
            $table->id();
            $table->float('weight');
            $table->enum('gender', ['male', 'female']);
            $table->integer('drinks_consumed');
            $table->float('alcohol_percentage');
            $table->float('time_period_hours');
            $table->float('calculated_bac')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_a_c_calculations');
    }
};
