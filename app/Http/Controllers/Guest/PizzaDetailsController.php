<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaDetailsController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pages.pizza-details', compact('pizzas'));
    }
}
