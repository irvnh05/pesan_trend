<?php

namespace Modules\ProgramDetail\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ProgramDetail;

class ProgramDetailDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * ProgramDetails Seed
         * ------------------
         */

        // DB::table('programdetails')->truncate();
        // echo "Truncate: programdetails \n";

        ProgramDetail::factory()->count(20)->create();
        $rows = ProgramDetail::all();
        echo " Insert: programdetails \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
