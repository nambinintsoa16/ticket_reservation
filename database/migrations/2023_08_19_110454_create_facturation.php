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
        Schema::create('facturation', function (Blueprint $table) {
            $table->id();
            $table->integer('commandes_id');
            $table->integer('clients_id');
            $table->integer('transactions_id');
            $table->foreign('commandes_id')->references('id')->on('commandes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->foreign('clients_id')->references('id')->on('clients')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->foreign('transactions_id')->references('id')->on('transactions')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturation');
    }
};
