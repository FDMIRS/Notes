<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        echo 'Bem-vindo à página principal!';    
    //return view('index');
    }

    public function newNote()
    {
        echo 'Criar nova nota';
    }
}
