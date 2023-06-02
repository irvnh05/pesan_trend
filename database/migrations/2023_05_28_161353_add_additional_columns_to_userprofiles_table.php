<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('userprofiles', function (Blueprint $table) {
            $table->string('provinsi')->nullable();
            $table->string('kota_kab')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kode_pos')->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('userprofiles', function (Blueprint $table) {
            $table->dropColumn('provinsi');
            $table->dropColumn('kota_kab');
            $table->dropColumn('kecamatan');
            $table->dropColumn('kelurahan');
            $table->dropColumn('kode_pos');
        });
    }
    
};
