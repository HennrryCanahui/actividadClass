<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('camiones', function (Blueprint $table) {
        $table->id();
        $table->string('placa', 8);
        $table->string('codigo_interno', 8);
        $table->foreignId('id_transporte')->constrained('transportes')->onDelete('cascade');
        $table->string('color', 35);
        $table->date('modelo');
        $table->string('capacidad_toneladas', 45);
        $table->foreignId('id_marca')->constrained('marcas')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
