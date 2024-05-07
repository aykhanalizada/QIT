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
        Schema::create('d_v_x__product__perakendes', function (Blueprint $table) {
            $table->id();
            $table->string('Satici');
            $table->date('Tarix');
            $table->decimal('Price_one_product',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_v_x__product__perakendes');
    }
};
