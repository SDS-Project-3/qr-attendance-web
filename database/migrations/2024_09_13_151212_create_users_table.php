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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('student_name');
            $table->string('student_email');
            $table->string('password');
            $table->timestamp('registered')->nullable();
            $table->timestamps();
        });

        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name');
            $table->string('staff_email');
            $table->string('password');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
        Schema::dropIfExists('students');
    }
};
