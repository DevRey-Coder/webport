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
        Schema::create('vouncher__records', function (Blueprint $table) {
            $table->id();
            $table->foreignId("voucher_id");
            $table->foreignId("product_id");
            $table->bigInteger("quantity");
            $table->bigInteger("cost");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouncher__records');
    }
};
