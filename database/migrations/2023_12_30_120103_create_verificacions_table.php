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
        Schema::create('verificacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('creador_id');
            $table->foreign('creador_id')->references('id')->on('creadors');

            $table->string('tipo_documentos');

            $table->string('documento_frente', 2048)->nullable();
            $table->string('documento_reverso', 2048)->nullable();
            $table->string('selfie', 2048)->nullable();
            $table->string('video')->nullable();

            $table->string('caducidad_doc');//documentop  caduca o no

            $table->date('fecha_caducidad_doc')->nullable();

            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verificacions');
    }
};
