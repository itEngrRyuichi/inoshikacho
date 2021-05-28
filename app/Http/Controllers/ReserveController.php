<?php

namespace App\Http\Controllers;

use App\Models\Provide;
use App\Models\Reserve;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserves = Reserve::find(Auth::user()->id);
        return view('reserves.index',['reserves'=>$reserves]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $provide = Provide::where('store_id',$request->store_id)->where('plan_id',$request->plan_id)->where('room_id',$request->room_id)->get();
        // dd($provide[0]);
        $plan = Plan::find($request->plan_id);
        return view('reserves.create',['provide'=>$provide[0],'plan'=>$plan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserve = New Reserve;
        $reserve->user_id = Auth::user()->id;
        $reserve->provide_id = $request->provide_id;
        $reserve->check_in = $request->checkin;
        $reserve->check_out = $request->checkout;
        $reserve->save();
        return redirect(route('reserves.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('reserves.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('reserves.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect(route('reserves.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect(route('reserves.index'));
    }
}
