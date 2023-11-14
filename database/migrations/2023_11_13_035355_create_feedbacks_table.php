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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->integer('reaction_id');
            $table->text('message');
            $table->foreignId('topic_id')->constrained(
                table: 'topics',
                column: 'id'
            );
            $table->boolean('follow');
            $table->string('name')->nullable();
            $table->string('contact')->nullable();
            $table->timestamps();

            $table->foreign('reaction_id')->references('id')->on('reactions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
