<?php

namespace Modules\CategoryEvent\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\CategoryEvent;

class CategoryEventDatabaseSeeder extends Seeder
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
         * CategoryEvents Seed
         * ------------------
         */

        // DB::table('categoryevents')->truncate();
        // echo "Truncate: categoryevents \n";

        CategoryEvent::factory()->count(20)->create();
        $rows = CategoryEvent::all();
        echo " Insert: categoryevents \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
