<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\Room;
use App\Models\Image;
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
        return view('stores.rooms.create', ['store_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 部屋を保存
        $room = new Room;
        $room->room_name = $request->name;
        $room->capacity = $request->capacity;
        $room->store_id = $request->store_id;
        $room->save();

        // アメニティを保存
        if(isset($request->amenities)){
            $amenities = $request->amenities;
            foreach($amenities as $item){
                $amenity = New Amenity;
                $amenity->room_id = $room->id;
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
                        $amenity->amenity_name = 'ボディーソープ';
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
        }

        // 写真を保存
        $image1 = $request->file('select-image1');
        if( isset($image1) === true ){
            $path1 = $image1->store('images/rooms', 'public');
        } else {
            $path1 = 'images/rooms/no_store_image.png';
        }
        $image1 = new Image;
        $image1->room_id = $room->id;
        $image1->url = $path1;
        $image1->save();

        $image2 = $request->file('select-image2');
        if( isset($image2) === true ){
            $path2 = $image2->store('images/rooms', 'public');
        } else {
            $path2 = 'images/rooms/no_store_image.png';
        }
        $image2 = new Image;
        $image2->room_id = $room->id;
        $image2->url = $path2;
        $image2->save();

        $image3 = $request->file('select-image3');
        if( isset($image3) === true ){
            $path3 = $image3->store('images/rooms', 'public');
        } else {
            $path3 = 'images/rooms/no_store_image.png';
        }
        $image3 = new Image;
        $image3->room_id = $room->id;
        $image3->url = $path3;
        $image3->save();

        return redirect(route('stores.show', $request->store_id));
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
        $images = Image::where('room_id', '=', $id)->get();
        $amenities = Amenity::where('room_id', '=', $id)->get();
        return view('stores.rooms.edit', ['store_id' => $store_id, 'room'=> $room, 'images' => $images, 'amenities' => $amenities]);
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
        // 部屋を保存
        $room = Room::find($id);
        $room->room_name = $request->name;
        $room->capacity = $request->capacity;
        $room->store_id = $store_id;
        $room->save();


        $delete_amenities = Amenity::where('room_id', $room->id);
        $delete_amenities->delete();

        // アメニティを保存
        if(isset($request->amenities)){
            $amenities = $request->amenities;
            foreach($amenities as $item){
                $amenity = New Amenity;
                $amenity->room_id = $room->id;
                $amenity->store_id = $store_id;
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
                        $amenity->amenity_name = 'ボディーソープ';
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
        }

        // 写真を保存
        $image1 = $request->file('select-image1');
        if( isset($image1) === true ){
            $path1 = $image1->store('images/rooms', 'public');
            $image1 = Image::where('room_id', '=', $id)
                                ->skip(0)->take(1)->first();
            $image1->room_id = $room->id;
            $image1->url = $path1;
            $image1->save();
        }

        $image2 = $request->file('select-image2');
        if( isset($image2) === true ){
            $path2 = $image2->store('images/rooms', 'public');
            $image2 = Image::where('room_id', '=', $id)
                                ->skip(1)->take(1)->first();
            $image2->room_id = $room->id;
            $image2->url = $path2;
            $image2->save();
        }

        $image3 = $request->file('select-image3');
        if( isset($image3) === true ){
            $path3 = $image3->store('images/rooms', 'public');
            $image3 = Image::where('room_id', '=', $id)
                                ->skip(2)->take(1)->first();
            $image3->room_id = $room->id;
            $image3->url = $path3;
            $image3->save();
        }

        return redirect(route('stores.show', $store_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($store_id, $id)
    {
        $images = Image::where('room_id', '=', $id);
        $images->delete();

        $amenities = Amenity::where('room_id', '=', $id);
        $amenities->delete();

        $room = Room::find($id);
        $room->delete();


        return redirect(route('stores.show', $store_id));
    }
}
