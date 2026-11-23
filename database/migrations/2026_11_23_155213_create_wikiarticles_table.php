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
        Schema::create('wikiarticles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('Destination Weddings');
            $table->text('excerpt')->nullable();
            $table->longText('content'); // Stores HTML with <a href="..." data-wiki-slug="..."> tags
            $table->string('publish')->nullable();
            $table->string('status')->nullable();
            $table->string('admstatus')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wikiarticles');
    }
};
