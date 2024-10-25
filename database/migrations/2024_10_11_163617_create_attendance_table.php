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
        Schema::create('attendance_ref', function (Blueprint $table) {
            $table->string('hexa_reference')->primary();
            $table->string('module_code');
            $table->date('module_date');
            $table->string('period');
            $table->timestamps();
        });

        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->string('hex_ref');
            $table->string('full_name')->nullable();
            $table->string('student_id')->nullable();
            $table->timestamps();

            $table->foreign('hex_ref')->references('hexa_reference')->on('attendance_ref')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
        Schema::dropIfExists('attendance_ref');
    }
};
