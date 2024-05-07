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
        Schema::create('d_g_x__products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('XIF_Name');
            $table->date('Date');
            $table->decimal('Miqdar',8,2);
            $table->decimal('Statistik_deyer',8,2);
            $table->decimal('Invoys_deyeri',8,2);
            $table->decimal('Emeliyyat_haqqi',8,2);
            $table->decimal('Idxal_rusumi',8,2);
            $table->decimal('EDV',8,2);
            $table->decimal('Diger_odenisler',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_g_x__products');
    }
};
