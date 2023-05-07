<?php

namespace Modules\MainEvent\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\MainEvent;

class MainEventDatabaseSeeder extends Seeder
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
         * MainEvents Seed
         * ------------------
         */

        // DB::table('mainevents')->truncate();
        // echo "Truncate: mainevents \n";

        MainEvent::factory()->count(20)->create();
        $rows = MainEvent::all();
        echo " Insert: mainevents \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
