<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Executed;
use App\Models\Order;

class OrderList extends Component
{
    public function render()
    {
        $orders = Order::select('orders.order_ref', 'orders.customer_name')
        ->selectRaw('SUM(ol.qty) as total_qty')
        ->leftJoin('orders_lines as ol', 'orders.id', '=', 'ol.order_id')
        ->groupBy('orders.id')
        ->get();
        
        return view('livewire.order-list', ['orders' => $orders]);
    }
}
