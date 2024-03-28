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
    protected $description = 'Calcular total de ordenes y costos para luego almacenarlos en la tabla executed';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        TotalOrdersAndCost::dispatch();
        $this->info('El total de ordenes y costos fue almacenado correctamente.');
    }
}
