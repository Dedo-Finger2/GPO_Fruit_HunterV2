<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Método responsável por carregar a tela de login
     * @return string - View de login
     */
    public function index()
    {
        return view('login');
    }
}
