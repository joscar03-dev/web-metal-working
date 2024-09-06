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
        Schema::create('detalles_orden', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_orden')->constrained('ordenes_trabajo')->onDelete('cascade');
            $table->foreignId('id_servicio')->nullable()->constrained('servicios')->onDelete('set null');
            $table->foreignId('id_producto')->nullable()->constrained('productos')->onDelete('set null');
            $table->integer('cantidad');
            $table->decimal('precio', 10, 2); // Precio específico para el servicio o producto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_orden');
    }
};
