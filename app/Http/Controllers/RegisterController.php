<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
//        $data = $request->all();
//        $data = $request->only(['name', 'email']);
//        $data = $request->except(['name', 'email']);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
//        $agreement = !! $request->input('agreement');
        $agreement = $request->boolean('agreement');
//        $avatar = $request->file('avatar');

//        dd($request->has('name'));
//        dd($request->filled('name'));
//        dd($request->missing('name'));

        dd($name, $email, $password, $agreement);

        return 'запрос на регистрацию';
    }
}
