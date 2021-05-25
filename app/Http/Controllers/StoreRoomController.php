<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\Room;
use Illuminate\Http\Request;


class StoreRoomController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('stores.rooms.create',['store_id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        
        $room = New Room;
        $room->room_name = $request->name;
        $room->capacity = $request->capacity;
        $room->store_id = $request->store_id;
        $room->save();
        // 最新のidがroom_id
        $new_room = Room::orderBy('created_at','desc')->take(1)->get()->toArray();
        $room_id = $new_room[0]['id'];
        // アメニティを保存
        if(isset($request->amenities)){
            $amenities = $request->amenities;
            foreach($amenities as $item){
                $amenity = New Amenity;
                $amenity->room_id = $room_id;
                $amenity->store_id = $request->store_id; 
                // dd($room_id);
                switch($item){
                    case "1":
                        $amenity->amenity_name = 'シングルベッド';
                        $amenity->icon = "fas fa-bed";
                        break;
                    case "2":
                        $amenity->amenity_name = 'ダブルベッド';
                        $amenity->icon = "fas fa-bed";
                        break;
                    case "3":
                        $amenity->amenity_name = 'ツインベッド';
                        $amenity->icon = "fas fa-bed";
                        break;
                    case "4":
                        $amenity->amenity_name = 'セミダブルベッド';
                        $amenity->icon = "fas fa-bed";
                        break;
                    case "5":
                        $amenity->amenity_name = '布団';
                        $amenity->icon = "fas fa-bed";
                        break;
                    case "6":
                        $amenity->amenity_name = '無料wifi';
                        $amenity->icon = "fas fa-bed";
                        break;
                    case "7":
                        $amenity->amenity_name = 'ナイトウェア、パジャマ';
                        $amenity->icon = "fas fa-bed";
                        break;
                    case "8":
                        $amenity->amenity_name = 'バスタオル、フェイスタオル';
                        $amenity->icon = "images/icons/towel.png";
                        break;
                    case "9":
                        $amenity->amenity_name = 'シャンプー';
                        $amenity->icon = "fas fa-pump-soap";
                        break;
                    case "10":
                        $amenity->amenity_name = 'コンディショナー';
                        $amenity->icon = "fas fa-pump-soap";
                        break;
                    case "11":
                        $amenity->amenity_name = 'ボディソープ';
                        $amenity->icon = "fas fa-pump-soap";
                        break;
                    case "12":
                        $amenity->amenity_name = '歯ブラシ';
                        $amenity->icon = "images/icons/toothbrush.png";
                        break;
                    case "13":
                        $amenity->amenity_name = 'くし';
                        $amenity->icon = "images/icons/comb.png";
                        break;
                }
                $amenity->save();
            }
            // dd($amenity);
            // TODO　画像を保存
            $path = '';
            if(isset($request->image1)){
                // dd($request->image1);
            }else{

            }
            if(isset($request->image2)){
                // dd($request->image1);
            }else{

            }
            if(isset($request->image3)){
                // dd($request->image1);
            }else{

            }
        }
    
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
        $room = Room::find($id);
        return view('stores.rooms.edit',['store_id'=>$store_id,'room_id'=>$id]);
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
        return redirect(route('stores'));
    }
}
