<?php

namespace Modules\CategoryEvent\Console\Commands;

use Illuminate\Console\Command;

class CategoryEventCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:CategoryEventCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CategoryEvent Command description';

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
