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
        Schema::create('demo_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('teacher_preference');
            $table->text('feedback')->nullable();
            $table->string('class_age_group');
            $table->string('date_preference');
            $table->time('time_preference');
            $table->string('email');
            $table->string('parent_name');
            $table->string('children_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo_bookings');
    }
};
