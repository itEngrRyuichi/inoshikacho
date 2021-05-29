<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Reserve;
use App\Models\Amenity;
use App\Models\Store;
use App\Models\Area;
use App\Models\StoreType;
use App\Models\Image;
use App\Models\Room;
use App\Models\Comment;
use App\Models\Provide;
use App\Models\Price;
use App\Models\PersonType;
use \App\Models\Plan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // サイト管理ユーザ
        $reserves = Reserve::join('provides', 'provides.id', '=', 'reserves.provide_id')
                            ->join('peoples', 'reserves.id','=','peoples.reserve_id')
                            ->join('users', 'reserves.user_id','=','users.id')
                            ->with('store')
                            // ->where('user_id',Auth::id())
                            ->get();

        // dd($reserves);
        return view('reserves.index',['reserves'=>$reserves]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $provide = Provide::where('store_id', $request->store_id)->where('plan_id', $request->plan_id)->where('room_id', $request->room_id)->first();
        $store = Store::find($request->store_id);
        $plan = Plan::find($request->plan_id);
        $room = Room::find($request->room_id);
        $amenities = Amenity::where('room_id', $request->room_id)->get();
        $person_types = PersonType::all();
        $results = [
            'provide' => $provide,
            'store' => $store,
            'plan' => $plan,
            'room' => $room,
            'amenities' => $amenities,
            'person_types' => $person_types
        ];
        return view('reserves.create', $results);
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
