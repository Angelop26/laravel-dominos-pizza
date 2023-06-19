<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::with('ingredients')->get();
        return response()->json(
            [
                'success' => true,
                'results' => $pizzas
            ]
        );
    }
}
