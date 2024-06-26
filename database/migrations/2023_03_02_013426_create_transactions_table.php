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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('trx_id')->nullable();
            $table->string('domain_name')->nullable();
            $table->string('domain_type')->nullable();
            $table->string('gateway')->nullable();
            $table->float('price')->default(0);
            $table->text('description')->nullable();
            $table->string('ip_address')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
