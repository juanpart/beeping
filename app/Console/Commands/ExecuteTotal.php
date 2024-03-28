<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TotalOrdersAndCost;

class ExecuteTotal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'execute:total';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate total cost of all orders and store in executed table';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        TotalOrdersAndCost::dispatch();
        $this->info('Total orders and cost caculated and stored successfully');
    }
}
