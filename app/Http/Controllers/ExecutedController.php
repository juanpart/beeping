<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Executed;

class ExecutedController extends Controller
{
    public function store( Request $request) {
        
        $request->validate([
            'total_orders' => 'required|numeric',
            'total_cost' => 'required|numeric'
        ]);

        Executed::create([
            'total_orders' => $request->total_orders,
            'total_cost' => $request->total_cost
        ]);

        return response()->json(['message' => 'Se ha guardado los registros con exito.'], 200);
    }
}

