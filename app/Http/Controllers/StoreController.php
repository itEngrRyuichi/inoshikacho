<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::with('images')->get();
        $areas = Area::all();

        for ($s=0; $s < count($stores); $s++) {
            $plan_ids = Provide::where('store_id', $stores[$s]->id)->select('plan_id')->get();
            for ($i=0; $i < count($plan_ids); $i++) {
                $prices = price::where('plan_id', $plan_ids[$i]->plan_id)->get();
                $plan_ids[$i]->prices = $prices;
            }
            $prices_array = [];
            for ($i=0; $i < count($plan_ids); $i++) {
                $amount = $plan_ids[$i]->prices[0]->price;
                array_push($prices_array, $amount);
            }
            if (empty($prices_array)) {
                $stores[$s]->max_price = 0;
                $stores[$s]->min_price = 0;
            } else {
                $max_price = max($prices_array);
                $min_price = min($prices_array);
                $stores[$s]->max_price = $max_price;
                $stores[$s]->min_price = $min_price;
            }

        }

        return view('stores.index', ['stores' => $stores, 'areas' => $areas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        $store_types = StoreType::all();
        return view('stores/create', ['areas' => $areas, 'store_types' => $store_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 店舗追加
        $store = new Store;
        $store->store_name = $request->store_name;
        $store->user_id = Auth::user()->id;
        $store->postal = $request->postal;
        $store->address = $request->address;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->description = $request->description;
        $store->access = $request->access;
        $store->store_type_id = $request->store_type_id;
        $store->area_id = $request->area_id;
        $store->save();

        // 一枚目の写真追加
        $image = $request->file('select-image');
        if( isset($image) === true ){
            $path = $image->store('images/stores', 'public');
        } else {
            $path = 'images/stores/no_store_image.png';
        }
        $image = new Image;
        $image->store_id = $store->id;
        $image->url = $path;
        $image->save();

        // 二枚目の写真追加
        $image1 = $request->file('select-image1');
        if( isset($image1) === true ){
            $path1 = $image1->store('images/stores', 'public');
            $image1 = new Image;
            $image1->store_id = $store->id;
            $image1->url = $path1;
            $image1->save();
        }

        // 三枚目の写真追加
        $image2 = $request->file('select-image2');
        if( isset($image2) === true ){
            $path2 = $image2->store('images/stores', 'public');
            $image2 = new Image;
            $image2->store_id = $store->id;
            $image2->url = $path2;
            $image2->save();
        }

        return redirect(route('stores.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);
        $rooms = Room::where('store_id', '=', $id)->orderBy('room_name','asc')->get();
        $images = Image::where('store_id', '=', $id)->get();
        $comments = Comment::where('comments.store_id', '=', $id)
                        ->join('users', 'comments.user_id', '=', 'users.id')
                        ->join('images', 'users.id', '=', 'images.user_id')
                        ->get();

        $plan_ids = Provide::where('store_id', $id)->select('plan_id')->get();
        for ($i=0; $i < count($plan_ids); $i++) {
            $prices = price::where('plan_id', $plan_ids[$i]->plan_id)->get();
            $plan_ids[$i]->prices = $prices;
        }

        $prices_array = [];
        for ($i=0; $i < count($plan_ids); $i++) {
            $amount = $plan_ids[$i]->prices[0]->price;
            array_push($prices_array, $amount);
        }
        if (empty($prices_array)) {
            $store->max_price = 0;
            $store->min_price = 0;
        } else {
            $store->max_price = max($prices_array);
            $store->min_price = min($prices_array);
        }

        $plans = Plan::where('provides.store_id', $id)
                        ->join('provides', 'plans.id', '=', 'provides.plan_id')
                        ->join('rooms', 'provides.room_id', '=', 'rooms.id')
                        ->select(
                            'plans.id',
                            'plans.plan_name',
                            'plans.plan_description',
                            'provides.room_id',
                            'rooms.room_name',
                        )
                        ->get();


        for ($i=0; $i < count($plans); $i++) {
            // 各プランの部屋数を取得
            $count_rooms = DB::table('provides')
                                ->where('provides.plan_id', '=', $plans[$i]->id)
                                ->join('rooms', 'rooms.id', '=', 'provides.room_id')
                                ->count('rooms.id');
            $plans[$i]->count_rooms = $count_rooms;
            // 各プランの部屋写真を取得
            $room_images = DB::table('images')->where('room_id', '=', $plans[$i]->room_id)->get();
            $plans[$i]->room_images = $room_images;
            // 各プランのプラン写真を取得
            $plan_images = DB::table('images')->where('plan_id', '=', $plans[$i]->id)->get();
            $plans[$i]->plan_images = $plan_images;
            // 各プランの部屋の収容人数
            $capacity = DB::table('rooms')->where('id', '=', $plans[$i]->room_id)->select('rooms.capacity')->first();
            $plans[$i]->room_capacity = $capacity;
            // 各プランの部屋のアメニティー
            $amenities = DB::table('amenities')->where('amenities.room_id', '=', $plans[$i]->room_id)->get();
            $plans[$i]->room_amenities = $amenities;
            // 各プランの値段
            $adult_price = DB::table('prices')->where('prices.plan_id', '=', $plans[$i]->id)->where('prices.person_type_id', '=', 1)->first();
            $middle_price = DB::table('prices')->where('prices.plan_id', '=', $plans[$i]->id)->where('prices.person_type_id', '=', 2)->first();
            $child_price = DB::table('prices')->where('prices.plan_id', '=', $plans[$i]->id)->where('prices.person_type_id', '=', 3)->first();
            $baby_price = DB::table('prices')->where('prices.plan_id', '=', $plans[$i]->id)->where('prices.person_type_id', '=', 4)->first();
            $plans[$i]->adult_price = $adult_price;
            $plans[$i]->middle_price = $middle_price;
            $plans[$i]->child_price = $child_price;
            $plans[$i]->baby_price = $baby_price;

        }
        /* dd($plans); */
        $results = [
            'store' => $store,
            'rooms' => $rooms,
            'images' => $images,
            'plans' => $plans,
            'comments' => $comments
            ];

        // 各プランの値段
        return view('stores.show', $results);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find($id);
        $images = Image::where('store_id', '=', $id)->get();
        $areas = Area::all();
        $store_types = StoreType::all();
        return view('stores.edit', ['store' => $store, 'images' => $images, 'areas' => $areas, 'store_types' => $store_types]);
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
        $store = Store::find($id);
        $store->store_name = $request->store_name;
        $store->postal = $request->postal;
        $store->address = $request->address;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->description = $request->description;
        $store->access = $request->access;
        $store->store_type_id = $request->store_type_id;
        $store->area_id = $request->area_id;
        $store->save();

        // 一枚目の写真編集
        $image = $request->file('select-image');
        if( isset($image) === true ){
            $path = $image->store('images/stores', 'public');
        } else {
            $path = 'images/stores/no_store_image.png';
        }
        $image = Image::where('store_id', '=', $id)
                            ->skip(0)->take(1)->first();
        $image->store_id = $store->id;
        $image->url = $path;
        $image->save();


        // 二枚目の写真編集
        $image1 = $request->file('select-image1');
        if( isset($image1) === true ){
            $path1 = $image1->store('images/stores', 'public');

            $image1 = Image::where('store_id', '=', $id)
                                ->skip(1)->take(1)->first();
            $image1->store_id = $store->id;
            $image1->url = $path1;
            $image1->save();
        }

        // 三枚目の写真編集
        $image2 = $request->file('select-image2');
        if( isset($image2) === true ){
            $path2 = $image2->store('images/stores', 'public');

            $image2 = Image::where('store_id', '=', $id)
                                ->skip(2)->take(1)->first();
            $image2->store_id = $store->id;
            $image2->url = $path2;
            $image2->save();
        }

        return redirect(route('stores.show', ['store' => $store]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = Image::where('user_id', '=', $id);
        $images->delete();

        $store = Store::find($id);
        $store->delete();
        return redirect(route('stores.index'));
    }
}
