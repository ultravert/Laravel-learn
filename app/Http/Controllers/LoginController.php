<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
//        $ip = $request->ip();
//        $path = $request->path();
//        $url = $request->url();
//        $full = $request->fullUrl();

//        dd($request->is('login'));
//        dd($request->routeIs('log*'));

        return view('login.index');
    }

    public function store(Request $request)
    {
//        session(['alert' => __('Добро пожаловать!')]);
        alert(__('Добро пожаловать!'));



//        if (true) {
//            return redirect()->back()->withInput();
//        }

        return redirect()->route('user');
    }
}
