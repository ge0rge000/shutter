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
        Schema::create('shutters', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("name_out");
            $table->string("tag");
            $table->text("desc");
           $table->text("desc_out");
          $table->text("features")->nullable();
           $table->text('key_features')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shutters');
    }
};
