<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Método responsável por retornar a tela de listagem de frutas
     * @return string|array - View de frutas com um array de frutas do banco de dados
     */
    public function index()
    {
        $fruits = Fruit::all();

        return view('fruitViews.fruits', ['fruits' => $fruits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fruit $fruit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fruit $fruit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fruit $fruit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fruit $fruit)
    {
        //
    }
}
