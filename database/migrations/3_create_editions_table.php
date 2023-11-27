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
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('employee_id');
            $table->string('place');
            $table->enum('session_period', ['Tiempo Completo','Mañana','Tarde']);
            $table->date('date');

            // Constraints
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->unique(['code_id','course_id']);
            $table->unique(['date','course_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editions');
    }
};
