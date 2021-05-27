<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $credentials = $request->only('name','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect(route('index'));
        }
        dd($credentials);
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('index'));
    }
}
