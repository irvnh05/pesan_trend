<?php

namespace Modules\ProgramCategory\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ProgramCategory;

class ProgramCategoryDatabaseSeeder extends Seeder
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
         * ProgramCategories Seed
         * ------------------
         */

        // DB::table('programcategories')->truncate();
        // echo "Truncate: programcategories \n";

        ProgramCategory::factory()->count(20)->create();
        $rows = ProgramCategory::all();
        echo " Insert: programcategories \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
