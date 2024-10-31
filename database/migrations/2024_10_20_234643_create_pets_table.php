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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->foreignId('pet_type_id')->constrained();
            $table->foreignId('breed_id')->constrained();
            $table->date('date_of_birth');
            $table->integer('weight');
            $table->string('allergen');
            $table->string('note');
            $table->unsignedInteger('owner_id');
            $table->timestamps();
            
            $table->foreign('owner_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
