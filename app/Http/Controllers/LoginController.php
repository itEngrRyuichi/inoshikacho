<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login/index');
    }

    public function login(Request $request)
    {
        // dd($request);
        return redirect(route('index'));
    }

    public function logout(Request $request)
    {
        return redirect(route('index'));
    }
}
