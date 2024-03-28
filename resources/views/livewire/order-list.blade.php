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
</div>
