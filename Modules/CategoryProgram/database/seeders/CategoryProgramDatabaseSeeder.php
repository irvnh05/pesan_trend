<?php

namespace Modules\CategoryProgram\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\CategoryProgram;

class CategoryProgramDatabaseSeeder extends Seeder
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
         * CategoryPrograms Seed
         * ------------------
         */

        // DB::table('categoryprograms')->truncate();
        // echo "Truncate: categoryprograms \n";

        CategoryProgram::factory()->count(20)->create();
        $rows = CategoryProgram::all();
        echo " Insert: categoryprograms \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
