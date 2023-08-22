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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('commandes_id');
            $table->foreign('commandes_id')->references('id')->on('commandes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->integer('montant');
            $table->integer('methode');
            $table->string('id_transation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
