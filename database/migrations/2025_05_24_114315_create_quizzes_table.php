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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id');
            $table->text('question');
            $table->enum('type', ['multiple_choice', 'fill_blank', 'translate', 'match'])->default('multiple_choice');
            $table->json('options')->nullable();
            $table->string('correct_answer', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
