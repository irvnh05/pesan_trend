<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeaturedImageAndFeaturedVideoToMainevents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mainevents', function (Blueprint $table) {
            $table->string('featured_image')->nullable();
            $table->string('featured_video')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mainevents', function (Blueprint $table) {
            $table->dropColumn('featured_image');
            $table->dropColumn('featured_video');
        });
    }
}
