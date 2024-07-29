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
        Schema::table('keluhans', function (Blueprint $table) {
            $table->longText('nama_keluhan');
            $table->bigInteger('ongkos');
            $table->string('no_pol', 10);
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('pegawai_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('keluhans', function (Blueprint $table) {
            $table->dropColumn('nama_keluhan');
            $table->dropColumn('ongkos');
            $table->dropColumn('no_pol');
            $table->dropColumn('customer_id');
            $table->dropColumn('pegawai_id');
        });
    }
};
