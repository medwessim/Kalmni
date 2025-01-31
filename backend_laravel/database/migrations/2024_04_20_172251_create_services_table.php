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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom"); 
            $table->string("img_service")->nullable(); 
            $table->string("img_certificat"); 
            $table->string("description") ; 
            $table->string("addresse"); 
            $table->foreignId("user_id")->refrences("id")->on("users")->cascadeOnDelete();
            $table->foreignId("category_id")->references("id")->on("categories")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
