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
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->decimal('valor', 10, 2);
            $table->dateTime('td_item');
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('pedido_id');
            $table->timestamps();

            $table->foreign('produto_id')
                    ->references('id')->on('produtos')
                    ->onDelete('cascade');

            $table->foreign('pedido_id')
                    ->references('id')->on('produtos')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_pedidos');
    }
};
