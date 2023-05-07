<?php

namespace Modules\ProgramCategory\Console\Commands;

use Illuminate\Console\Command;

class ProgramCategoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ProgramCategoryCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ProgramCategory Command description';

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
