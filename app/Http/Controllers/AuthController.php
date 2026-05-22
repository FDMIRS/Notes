<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // form validation

        $request->validate(
            // rules
            [
                'text_username'=> 'required|email',
                'text_password' => 'required|min:6|max:16'
            ],
            // error messages
            [
                'text_username.required' => 'O nome é obrigatório',
                'text_username.email' => 'O nome deve ser um e-mail',
                'text_password.required' => 'A senha é obrigatória',
                'text_password.min' => 'A senha deve ter pelo menos :min caracteres',
                'text_password.max' => 'A senha deve ter no máximo :max caracteres',

            ]
        );
       // get all users from the database

      // $users = User::all()->toArray();

       //echo '<pre>';
      // print_r($users);
       
        // as an object instance of the models class

        $userModel = new User();
        $users = $userModel->all()->toArray();

        echo '<pre>';
       print_r($users);
       

    }
    
    public function logout()
    {
        echo 'logout';
    }
    
    
    }
