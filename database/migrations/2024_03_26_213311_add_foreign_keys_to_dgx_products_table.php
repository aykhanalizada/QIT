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
        Schema::table('d_g_x__products', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('measure_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dgx_products', function (Blueprint $table) {
            //
        });
    }
};
