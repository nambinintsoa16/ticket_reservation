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
        Schema::create('slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name_slide");
            $table->string("image_name");
            $table->string("title_slide_1");
            $table->string("title_slide_2");
            $table->string("content_slide");
            $table->string("link_slide");
            $table->string("status_slide");
            $table->timestamps();
        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
