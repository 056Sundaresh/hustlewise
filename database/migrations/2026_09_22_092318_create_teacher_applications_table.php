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
        Schema::create('teacher_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->integer('age');
            $table->string('qualification');
            $table->string('degree');
            $table->text('experience');
            $table->json('certifications')->nullable();
            $table->longText('resume_base64');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_applications');
    }
};
