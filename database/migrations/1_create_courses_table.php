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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->unsignedInteger('cost');
            $table->unsignedInteger('number_hours');
            $table->date('date_birth');
            $table->string('nationality');
            $table->double('salary');
            $table->enum('sex', ['Masculino', 'Femenino']);
            $table->boolean('is_qualified')->default(false);
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
