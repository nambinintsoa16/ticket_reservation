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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit');
            $table->string('lieu');
            $table->string('jour');
            $table->date('date');
            $table->time('heure');
            $table->integer('prix_debut');
            $table->integer('prix_fin');
            $table->integer('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->integer('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
