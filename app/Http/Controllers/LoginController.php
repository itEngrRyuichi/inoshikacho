<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->url);
        return view('login/index',['url'=>$request->url]);
    }

    public function login(Request $request)
    {

        
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
                return redirect($request->url);
            }
        }
        
        return back();
    }

    public function logout(Request $request)
    {
        
        Auth::logout();
        
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('index'));
    }
}
