<?php

namespace Modules\ProgramDetail\Console\Commands;

use Illuminate\Console\Command;

class ProgramDetailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ProgramDetailCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ProgramDetail Command description';

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
