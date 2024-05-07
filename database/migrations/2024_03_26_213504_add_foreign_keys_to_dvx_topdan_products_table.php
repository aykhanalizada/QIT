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
        Schema::table('d_v_x__product__topdans', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained();
            $table->foreignId('measure_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dvx_topdan_products', function (Blueprint $table) {
            //
        });
    }
};
