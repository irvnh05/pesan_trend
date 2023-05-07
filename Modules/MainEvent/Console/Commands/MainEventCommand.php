<?php

namespace Modules\MainEvent\Console\Commands;

use Illuminate\Console\Command;

class MainEventCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MainEventCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'MainEvent Command description';

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
