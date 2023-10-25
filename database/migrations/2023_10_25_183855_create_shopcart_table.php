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
        Schema::create('shopcart', function (Blueprint $table) {
            $table->id();
            $table->string('usuario_id',100);
            $table->double('importe');
            $table->date('fecha_creacion');
            $table->boolean('finalizado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopcart');
    }
};