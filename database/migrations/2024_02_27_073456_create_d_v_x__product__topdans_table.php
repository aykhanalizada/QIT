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
        Schema::create('d_v_x__product__topdans', function (Blueprint $table) {
            $table->id();
            $table->date('Tarix');
            $table->decimal('Amount',8,2);
            $table->decimal('Price',8,2);
            $table->decimal('EDV',8,2);
            $table->decimal('total_price',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_v_x__product__topdans');
    }
};
