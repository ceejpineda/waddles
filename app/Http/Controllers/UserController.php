<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function show()
    {
        return view('user/{id}');
    }

    public function register()
    {
        return view('register');
    }

    public function store()
    {
        /* DOCU:
            VALIDATES ANY HTTP REQUEST, THIS COMES FROM
            LARAVEL VALIDATION RULES IN ITS DOCUMENTATION 

            LARAVEL AUTOMATIC REDIRECTS WHEN FAILED!
        */
        $data = request()->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        User::create($data);
        return redirect('/');
    }
}