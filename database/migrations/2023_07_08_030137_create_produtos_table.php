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
            $table->string('nome', 100);
            $table->decimal('valor', 10, 2);
            $table->strinmg('foto', 100);
            $table->string('descricao', 255)->nullable();
            $table->timestamps();
            $table->integer('categoria_id')->unsigned();
            $table->integer('estoque_id')->unsigned();

            $table->foreign('categoria_id')
                    ->references('id')->on('categorias')
                    ->onDelete('cascade');
            
            $table->foreign('estoque_id')
                    ->references('id')->on('estoques')
                    ->onDelete('cascade');
            
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
