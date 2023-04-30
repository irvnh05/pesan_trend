<?php

namespace Modules\CategoryProgram\Console\Commands;

use Illuminate\Console\Command;

class CategoryProgramCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:CategoryProgramCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CategoryProgram Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
