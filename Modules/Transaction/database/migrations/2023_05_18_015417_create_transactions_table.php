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
        // Schema::create('transactions', function (Blueprint $table) {
        //     $table->id();

        //     $table->string('name');
        //     $table->string('slug')->nullable();
        //     $table->text('description')->nullable();
        //     $table->tinyInteger('status')->default(1);

        //     $table->integer('created_by')->unsigned()->nullable();
        //     $table->integer('updated_by')->unsigned()->nullable();
        //     $table->integer('deleted_by')->unsigned()->nullable();

        //     $table->timestamps();
        //     $table->softDeletes();
        // });
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id'); // ID transaksi (integer, primary key)
            
            $table->unsignedInteger('mainevent_id'); // ID event (integer, foreign key to Event)
            $table->unsignedInteger('package_id'); // ID paket (integer, foreign key to Paket)\

            $table->date('tanggal_transaksi')->nullable();  // Tanggal transaksi (date)
            $table->integer('kuantitas')->nullable();  // Kuantitas (integer)
    
            $table->string('slug')->nullable();
        
            $table->date('tanggal_pemesanan')->nullable();  // Tanggal pemesanan (date)
            $table->float('total_harga')->nullable();  // Total harga (float)
        
            $table->string('metode_pembayaran')->nullable();  // Metode pembayaran (string)
            $table->string('status_pembayaran')->nullable();  // Status pembayaran (string)
            $table->string('bukti_pembayaran')->nullable(); // Bukti pembayaran (string, nullable)
            $table->string('catatan')->nullable(); // Catatan (string, nullable)
        
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
        Schema::dropIfExists('transactions');
    }
};
