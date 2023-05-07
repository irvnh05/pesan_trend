<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programdetails', function (Blueprint $table) {
            $table->id('id'); // mengubah kolom 'id' menjadi primary key
            
            $table->integer('program_id')->unsigned(); // menambahkan kolom 'program_id'
            $table->integer('package_id')->unsigned(); // menambahkan kolom 'package_id'
            
            $table->text('description')->nullable(); // mengubah 'deskripsi' menjadi 'description'
            
            // $table->tinyInteg er('status')->default(1);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
        
            $table->timestamps();
            $table->softDeletes();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programdetails');
    }
};
