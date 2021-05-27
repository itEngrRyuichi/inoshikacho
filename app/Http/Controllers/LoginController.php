<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        }else{
            // IDによる認証で確認
            $user = User::where('name',$request->name)->where('password',$request->password)->get()->toArray();
            // dd($user[0]['id']);
            if(count($user)==1){
                Auth::loginUsingId($user[0]['id']);
                return redirect(route('index'));
            }
        }
        
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('index'));
    }
}
