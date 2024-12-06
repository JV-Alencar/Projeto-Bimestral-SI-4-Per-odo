<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome do item
            $table->integer('quantity'); // Quantidade
            $table->text('description')->nullable(); // Descrição opcional
            $table->timestamps();
        });
    }
    
};
