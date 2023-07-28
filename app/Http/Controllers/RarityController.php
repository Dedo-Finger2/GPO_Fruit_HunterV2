<?php

namespace App\Http\Controllers;

use App\Models\Rarity;
use Illuminate\Http\Request;

class RarityController extends Controller
{
    /**
     * Método responsável por retornar a tela de listagem de raridades
     * @return string|array - View de raridades com um array de raridades do banco de dados
     */
    public function index()
    {
        $rarities = Rarity::all();

        return view('rarityViews.rarities', ['rarities' => $rarities]);
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
    public function show(Rarity $rarity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rarity $rarity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rarity $rarity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rarity $rarity)
    {
        //
    }
}
