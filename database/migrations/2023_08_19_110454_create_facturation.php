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
            $table->integer('id_commande');
            $table->integer('id_client');
            $table->integer('id_transaction');
            $table->foreign('id_commande')->references('id')->on('commandes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->foreign('id_client')->references('id')->on('clients')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->foreign('id_transaction')->references('id')->on('transactions')
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
