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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->nullable()->default(12);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->string('nama', 100)->nullable()->default('nama');
            $table->string('slug', 100)->nullable()->default('slug')->unique();
            $table->longText('rgks')->nullable();
            $table->longText('ktrg')->nullable();
            $table->string('acak', 100)->nullable()->default('acak');
            $table->boolean('pub')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};