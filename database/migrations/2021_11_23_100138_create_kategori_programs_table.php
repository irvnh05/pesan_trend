<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_programs', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->string('keterangan');
            $table->string('assets');
            $table->string('slug');
            // $table->string('foto'); opsi untuk icon kategori

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_programs');
    }
}
