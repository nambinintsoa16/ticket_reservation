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
        Schema::create('promotion', function (Blueprint $table) {
            $table->id();
            $table->string("code_de_redustion");
            $table->integer('id_produit');
            $table->string("reduction");
            $table->date("debut");
            $table->date("fin");
            $table->string("statut");
            $table->timestamps();    
            $table->foreign('id_produit')->references('id')->on('produits')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion');
    }
};
