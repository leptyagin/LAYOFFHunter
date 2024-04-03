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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('image')->nullable();
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->text('description');
            $table->integer('min_pay')->nullable();
            $table->integer('max_pay')->nullable();

            $table->foreignId('user_id')->constrained()->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancy');
    }
};
