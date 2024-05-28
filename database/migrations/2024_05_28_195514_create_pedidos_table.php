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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->cascadeOnDelete();
            $table->decimal('valor_total', 10, 2)->nullable();
            $table->string('metodo_pagamento')->nullable();
            $table->string('status_pagamento')->nullable();
            $table->enum('status', ['pendente', 'processando', 'enviado', 'entregue', 'cancelado'])->default('pendente');
            $table->decimal('valor_envio', 10, 2)->nullable();
            $table->text('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
