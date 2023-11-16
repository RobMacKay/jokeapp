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
        Schema::create('jokes', function (Blueprint $table) {
            $table->id();
            $table->text('category')->nullable();
            $table->text('type')->nullable();
            $table->text('joke')->nullable();
            $table->text('setup')->nullable();
            $table->text('delivery')->nullable();
            $table->integer('joke_id')->unique();
            $table->text('lang')->dfault('en');
            $table->boolean('safe')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jokes');
    }
};
