<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;

class StoreReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 店舗管理ユーザ
        $reserves = Reserve::join('provides', 'provides.id', '=', 'reserves.provide_id')
                            ->join('peoples', 'reserves.id','=','peoples.reserve_id')
                            ->join('users', 'reserves.user_id','=','users.id')
                            ->with('store')
                            // ->where('store_id',Auth::id())
                            ->get();
        
        // dd($reserves);
        return view('reserves.index',['reserves'=>$reserves]);
    }
}