<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Area;
use App\Models\StoreType;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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
        $images = Image::where('store_id', '=', $id)->get();
        return view('stores.show', ['store' => $store, 'images' => $images]);
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
                            ->skip(0)->take(0)->first();
        $image->store_id = $store->id;
        $image->url = $path;
        $image->save();


        // 二枚目の写真編集
        $image1 = $request->file('select-image1');
        if( isset($image1) === true ){
            $path1 = $image1->store('images/stores', 'public');
            
            $image1 = Image::where('store_id', '=', $id)
                                ->skip(0)->take(1)->first();
            $image1->store_id = $store->id;
            $image1->url = $path1;
            $image1->save();
        }
        
        // 三枚目の写真編集
        $image2 = $request->file('select-image2');
        if( isset($image2) === true ){
            $path2 = $image2->store('images/stores', 'public');
            
            $image2 = Image::where('store_id', '=', $id)
                                ->skip(0)->take(2)->first();
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
        return redirect(route('home'));
    }
}
