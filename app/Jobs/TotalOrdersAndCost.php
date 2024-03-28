<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\ExecutedController;
use Illuminate\Http\Request;
use App\Models\OrderLine;

class TotalOrdersAndCost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Calcular el costo total de los pedidos
        $result = OrderLine::join('products as p', 'orders_lines.product_id', '=', 'p.id')
                    ->selectRaw('COUNT(DISTINCT orders_lines.order_id) AS total_orders, SUM(orders_lines.qty * p.cost) AS total_cost')
                    ->first();
                    
        $resultado = [
            'total_orders' => $result->total_orders,
            'total_cost' => $result->total_cost
        ];

        $request = Request::create('api/executed/create', 'POST', $resultado);
        
        $response = (new ExecutedController())->store($request);

        if ($response->status() == 200) {
            print ("se envio correctamente\n");
        } else {
            print "error al enviar a la api\n";
        }
        

    }
}
