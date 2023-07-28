<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Método responsável por mostrar a tela inicial do projeto
     * @return string - View de home
     */
    public function index()
    {
        return view('home');
    }
}
