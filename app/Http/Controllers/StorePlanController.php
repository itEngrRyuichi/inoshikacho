<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Room;
use \App\Models\Plan;
use \App\Models\Provide;
use App\Models\PersonType;
use App\Models\Image;
use App\Models\Price;

class StorePlanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($store_id)
    {
        $rooms = Room::where('store_id', $store_id)->orderBy('room_name','asc')->get();
        $person_types = PersonType::all();
        return view('stores.plans.create', ['store_id' => $store_id, 'rooms' => $rooms, 'person_types' => $person_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan = New Plan;
        $plan->plan_name = $request->plan_name;
        $plan->plan_description = $request->description;
        $plan->save();
        // 値段の追加
        $price1 = New Price;
        $price1->plan_id = $plan->id;
        $price1->person_type_id = 1;
        $price1->price = $request->type1;
        $price1->save();

        $price2 = New Price;
        $price2->plan_id = $plan->id;
        $price2->person_type_id = 2;
        $price2->price = $request->type2;
        $price2->save();

        $price3 = New Price;
        $price3->plan_id = $plan->id;
        $price3->person_type_id = 3;
        $price3->price = $request->type3;
        $price3->save();

        $price4 = New Price;
        $price4->plan_id = $plan->id;
        $price4->person_type_id = 4;
        $price4->price = $request->type4;
        $price4->save();

        // プラン提供テーブルに部屋を追加
        if(isset($request->rooms)){
            foreach($request->rooms as $room_id){
                $room = Room::find($room_id);
                $store_id = $room->store_id;
                $provide = new Provide;
                $provide->plan_id = $plan->id;
                $provide->store_id = $store_id;
                $provide->room_id = $room_id;
                $provide->save();
            }
        }

        // 写真を保存
        $image1 = $request->file('select-image1');
        if( isset($image1) === true ){
            $path1 = $image1->store('images/plans', 'public');
        } else {
            $path1 = 'images/plans/no_store_image.png';
        }
        $image1 = new Image;
        $image1->plan_id = $plan->id;
        $image1->url = $path1;
        $image1->save();

        $image2 = $request->file('select-image2');
        if( isset($image2) === true ){
            $path2 = $image2->store('images/plans', 'public');
        } else {
            $path2 = 'images/plans/no_store_image.png';
        }
        $image2 = new Image;
        $image2->plan_id = $plan->id;
        $image2->url = $path2;
        $image2->save();

        $image3 = $request->file('select-image3');
        if( isset($image3) === true ){
            $path3 = $image3->store('images/plans', 'public');
        } else {
            $path3 = 'images/plans/no_store_image.png';
        }
        $image3 = new Image;
        $image3->plan_id = $plan->id;
        $image3->url = $path3;
        $image3->save();

        return redirect(route('stores.show',$request->store_id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($store_id, $id)
    {
        $plan = Plan::find($id);
        $all_rooms = Room::where('store_id', $store_id)->get();
        $selected_rooms = Provide::where('plan_id', $plan->id)->get();
        $person_types = PersonType::all();
        $prices = Price::where('plan_id', $plan->id)->get();
        $images = Image::where('plan_id', $plan->id)->get();

        $results = [
            'plan' => $plan,
            'store_id' => $store_id,
            'all_rooms' => $all_rooms,
            'selected_rooms' => $selected_rooms,
            'person_types' => $person_types,
            'prices' => $prices,
            'images' => $images
        ];

        return view('stores.plans.edit', $results);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $store_id, $id)
    {

        $plan = Plan::find($id);
        $plan->plan_name = $request->plan_name;
        $plan->plan_description = $request->description;
        $plan->save();

        // 値段の追加
        $price1 = Price::where('plan_id', $id)->where('person_type_id', 1)->first();
        $price1->price = $request->type1;
        $price1->save();

        $price2 = Price::where('plan_id', $id)->where('person_type_id', 2)->first();
        $price2->price = $request->type2;
        $price2->save();

        $price3 = Price::where('plan_id', $id)->where('person_type_id', 3)->first();
        $price3->price = $request->type3;
        $price3->save();

        $price4 = Price::where('plan_id', $id)->where('person_type_id', 4)->first();
        $price4->price = $request->type4;
        $price4->save();

        // プラン提供テーブルに部屋を追加
        Provide::where('plan_id', $id)->delete();
        if(isset($request->rooms)){
            foreach($request->rooms as $room_id){
                $room = Room::find($room_id);
                $store_id = $room->store_id;
                $provide = new Provide;
                $provide->plan_id = $plan->id;
                $provide->store_id = $store_id;
                $provide->room_id = $room_id;
                $provide->save();
            }
        }

        // 写真を保存
        $image1 = $request->file('select-image1');
        if( isset($image1) === true ){
            $path1 = $image1->store('images/plans', 'public');
            $image1 = Image::where('plan_id', '=', $id)
                                ->skip(0)->take(1)->first();
            $image1->plan_id = $plan->id;
            $image1->url = $path1;
            $image1->save();
        }

        $image2 = $request->file('select-image2');
        if( isset($image2) === true ){
            $path2 = $image2->store('images/plans', 'public');
            $image2 = Image::where('plan_id', '=', $id)
                                ->skip(1)->take(1)->first();
            $image2->plan_id = $plan->id;
            $image2->url = $path2;
            $image2->save();
        }

        $image3 = $request->file('select-image3');
        if( isset($image3) === true ){
            $path3 = $image3->store('images/plans', 'public');
            $image3 = Image::where('plan_id', '=', $id)
                                ->skip(2)->take(1)->first();
            $image3->plan_id = $plan->id;
            $image3->url = $path3;
            $image3->save();
        }
        return redirect(route('stores.show', $request->store_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($store_id, $id)
    {
        Image::where('plan_id', '=', $id)->delete();
        Price::where('plan_id', '=', $id)->delete();
        Provide::where('plan_id', '=', $id)->delete();
        Plan::find($id)->delete();


        return redirect(route('stores.show', $store_id));
    }
}
