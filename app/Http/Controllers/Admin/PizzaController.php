<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.index', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        return view('pizzas.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $pizza = Pizza::create($data);
        
        if ($request->has('ingredients')) {
            $pizza->ingredients()->attach($data['ingredients']);
        }
        
        return redirect()->route('pizzas.index')->with('message', "$pizza->title è stata creata con successo" );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredients = Ingredient::all();
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.edit', compact('pizza', 'ingredients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $pizza = Pizza::findOrFail($id);

        if ($request->has('ingredients')) {
            $pizza->ingredients()->sync($data['ingredients']);
        } else {
            $pizza->ingredients()->detach();
        }
        $pizza->update($data);
        return redirect()->route('pizzas.show', compact('pizza'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->ingredients()->detach();
        $pizza->delete();
        return redirect()->route('pizzas.index');
    }
}
