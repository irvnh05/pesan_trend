<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->longText('alamat');
            $table->integer('provinves_id');
            $table->integer('regencies_id');
            $table->integer('zip_code');
            $table->string('phone_number');
            $table->string('roles')->default('USER'); //user,admin
            $table->string('google_id')->nullable(); // auth google
            // $table->string('provider');
            // $table->string('provider_id')->nullable(); 

            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
