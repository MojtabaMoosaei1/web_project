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
        Schema::create('truefalsequestions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quize_id');
            $table->foreign('quize_id')->references('id')->on('quizzes');
            $table->char('type' , 255);
            $table->text('title_questions');
            $table->string('correct');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truefalsequestion');
    }
};
