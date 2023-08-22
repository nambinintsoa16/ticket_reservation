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
        Schema::create('commandes_content', function (Blueprint $table) {
            $table->id();
            $table->integer('commandes_id');
            $table->integer('produits_id');
            $table->integer('quantite');
            $table->integer('prix');
            $table->timestamps();
            $table->foreign('commandes_id')->references('id')->on('commandes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->foreign('produits_id')->references('id')->on('produits')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes_content');
    }
};
