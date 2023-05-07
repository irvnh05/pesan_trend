<?php

namespace Modules\Program\Console\Commands;

use Illuminate\Console\Command;

class ProgramCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ProgramCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Program Command description';

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
