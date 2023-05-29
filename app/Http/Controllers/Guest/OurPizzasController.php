<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class OurPizzasController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pages.our-pizzas', compact('pizzas'));
    }
}
