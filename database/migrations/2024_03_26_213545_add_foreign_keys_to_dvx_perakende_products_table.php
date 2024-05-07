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
        Schema::table('d_v_x__product__perakendes', function (Blueprint $table) {
            $table->foreignId('product_id');
            $table->foreignId('measure_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dvx_perakende_products', function (Blueprint $table) {
            //
        });
    }
};
