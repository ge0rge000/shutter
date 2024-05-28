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
        Schema::create('shutter_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shutter_id')->constrained('shutters')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('photos_categories')->onDelete('cascade');
            $table->string('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shutter_photos');
    }
};
