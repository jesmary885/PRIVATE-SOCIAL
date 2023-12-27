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
        Schema::create('servicios_plans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');

            $table->string('titulo');

            $table->longText('servicio');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('servicios_plans');
    }
};
