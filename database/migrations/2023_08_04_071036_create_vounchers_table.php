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
        Schema::create('vounchers', function (Blueprint $table) {
            $table->id();
            $table->char("customer");
            $table->char("phone")->nullable();
            $table->char("voucher");
            $table->bigInteger("total");
            $table->bigInteger("tax");
            $table->bigInteger("net_total");
            $table->foreignId("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vounchers');
    }
};
