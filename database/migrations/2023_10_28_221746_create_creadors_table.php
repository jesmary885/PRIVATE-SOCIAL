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
        Schema::create('creadors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('documento_id');
            $table->string('valor');
            $table->string('retiro_pendiente');
            $table->string('visualizacion_todos');
            

            $table->string('banner', 2048)->nullable();
            $table->string('selfiel', 2048)->nullable();

            $table->string('estado_verificacion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creadors');
    }
};
