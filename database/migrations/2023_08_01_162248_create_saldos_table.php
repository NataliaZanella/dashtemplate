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
        Schema::create('saldos', function (Blueprint $table) {
            $table->id();
            $table->decimal('SaldoTotal', 9, 2);
            $table->decimal('SaldoDisponivel', 9, 2);
            $table->decimal('SaldoUtilizado', 9, 2);
            $table->decimal('SaldoTramitação', 9, 2);
            $table->decimal('SaldoReserva', 9, 2);  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saldos');
    }
};
