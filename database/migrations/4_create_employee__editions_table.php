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
        Schema::create('employee__editions', function (Blueprint $table) {
            
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('edition_id');

            // Constraints
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('edition_id')->references('id')->on('editions')->onDelete('cascade');
            $table->primary(['employee_id','edition_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee__editions');
    }
};
