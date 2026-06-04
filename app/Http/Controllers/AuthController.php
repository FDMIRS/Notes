<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
                'text_username.email' => 'O nome deve ser um e-mail válido',
                'text_password.required' => 'A senha é obrigatória',
                'text_password.min' => 'A senha deve ter pelo menos :min caracteres',
                'text_password.max' => 'A senha deve ter no máximo :max caracteres',
            ]
        );

        // get all the users from the database
        $users = User::all()->toArray();

        echo '<pre>';
        print_r($users);

        // try to authenticate the user
        // $user = User::where('email', $request->text_username)->first();

        // if (!$user) {
        //     return back()->withErrors(['text_username' => 'Este e-mail não está registrado'])->withInput();
        // }

        // if (!Hash::check($request->text_password, $user->password)) {
        //     return back()->withErrors(['text_password' => 'A senha está incorreta'])->withInput();
        // }

        // login the user
    //     Auth::login($user);
    //     $request->session()->regenerate();

    //     return redirect('/dashboard');
     }
    
    public function logout()
    {
        // Auth::logout();
        // request()->session()->invalidate();
        // request()->session()->regenerateToken();
        
        // return redirect('/');
    }
    
    
    }
