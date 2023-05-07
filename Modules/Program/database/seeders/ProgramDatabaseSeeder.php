<?php

namespace Modules\Program\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Program;

class ProgramDatabaseSeeder extends Seeder
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
         * Programs Seed
         * ------------------
         */

        // DB::table('programs')->truncate();
        // echo "Truncate: programs \n";

        Program::factory()->count(20)->create();
        $rows = Program::all();
        echo " Insert: programs \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
