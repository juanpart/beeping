<div>
    <table class="table-auto w-full"> 
        <thead> 
            <tr> 
                <th class="px-4 py-2">Referencia del pedido</th> 
                <th class="px-4 py-2">Nombre del Cliente</th> 
                <th class="px-4 py-2">Total Productos</th> 
                
            </tr> 
        </thead> 
        <tbody> 
            @foreach ($orders as $order) 
            <tr> 
                <td class="border px-4 py-2">{{ $order->order_ref }}</td> 
                <td class="border px-4 py-2">{{ $order->customer_name }}</td> 
                <td class="border px-4 py-2">{{ $order->total_qty }}</td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table>
    <div class="bg-gray -100 p-4 rounded shadow mt-4">
        @if ($lastExecuted)
            <p>Último registro guardado en la tabla Executed:</p>
            <p>Pedidos: {{ $lastExecuted->total_orders }} - Total: {{ $lastExecuted->total_cost }} - {{ $lastExecuted->created_at->format('d/m/Y H:i:s') }}</p>
        @else
            <p>No hay registros en la tabla Executed</p>
        @endif
    </div>
</div>
