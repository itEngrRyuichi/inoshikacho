<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Room;
use \App\Models\Plan;
use App\Models\Price;

class StorePlanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $rooms = Room::where('store_id',$id)->where('plan_id',null)->get();
        // dd($rooms);
        return view('stores.plans.create',['store_id'=>$id,'rooms'=>$rooms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->request);
        $plan = New Plan;
        $plan->plan_name = $request->name;
        $plan->plan_description = $request->description;
        $plan->save();

        $new_plan = Plan::orderBy('created_at','desc')->take(1)->get()->toArray();
        $plan_id = $new_plan[0]['id'];
        // TODO　画像と値段と部屋を追加
        // 部屋の追加
        if(isset($request->rooms)){
            foreach($request->rooms as $room_id){
                $room = Room::find($room_id);
                $room->plan_id = $plan_id;
                $room->save();
            }
        }
        // 値段の追加
        $price = New Price;
        $price->plan_id = $plan_id;
        $price->person_type_id = 1;
        $price->price = $request->adult;
        $price->save();
        $price = New Price;
        $price->plan_id = $plan_id;
        $price->person_type_id = 2;
        $price->price = $request->middle;
        $price->save();
        $price = New Price;
        $price->plan_id = $plan_id;
        $price->person_type_id = 3;
        $price->price = $request->child;
        $price->save();
        $price = New Price;
        $price->plan_id = $plan_id;
        $price->person_type_id = 4;
        $price->price = $request->baby;
        $price->save();
        
        return redirect(route('stores.show',$request->store_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($store_id,$id)
    {
        $plan = Plan::find($id);
        $rooms = Room::where('plan_id',$plan->id)->get();
        $empty_rooms = Room::where('plan_id',null)->get();
        // $price = Price::where('plan_id',$plan->id)->get()->toArray();
        // dd($price);
        $price1 = Price::where('plan_id',$plan->id)->where('person_type_id',1)->get()->toArray();
        $price2 = Price::where('plan_id',$plan->id)->where('person_type_id',2)->get()->toArray();
        $price3 = Price::where('plan_id',$plan->id)->where('person_type_id',3)->get()->toArray();
        $price4 = Price::where('plan_id',$plan->id)->where('person_type_id',4)->get()->toArray();
        // dd($price1);
        return view('stores.plans.edit',['store_id'=>$store_id,'rooms'=>$rooms,'empty_rooms'=>$empty_rooms,'plan'=>$plan,'price1'=>$price1,'price2'=>$price2,'price3'=>$price3,'price4'=>$price4]);
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
        // id = store_id
        // dd($request);
        // 以前選択していた部屋のplan_id削除
        if(isset($request->old_rooms)){
            foreach ($request->old_rooms as $room_id) {
                $room = Room::find($room_id);
                $room->plan_id = null;
                $room->save();
            }
        }
        $plan = Plan::find($request->plan_id);
        $plan->plan_name = $request->name;
        $plan->plan_description = $request->description;
        $plan->save();

        if(isset($request->rooms)){
            foreach ($request->rooms as $room_id) {
                $room = Room::find($room_id);
                $room->plan_id = $request->plan_id;
                $room->save();
            }
        }
        return redirect(route('stores.show',$request->store_id));
    }
}