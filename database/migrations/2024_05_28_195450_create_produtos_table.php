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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categorias')->cascadeOnDelete();
            $table->foreignId('marca_id')->constrained('marcas')->cascadeOnDelete();
            $table->string('nome');
            $table->string('rotulo')->unique();
            $table->json('imagens')->nullable();
            $table->longText('descricao')->nullable();
            $table->decimal('preco', 10, 2);
            $table->boolean('status')->default(true);
            $table->boolean('destaque')->default(false);
            $table->boolean('estoque')->default(true);
            $table->boolean('venda')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
