<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Amenity;
use App\Models\Area;
use App\Models\StoreType;
use App\Models\Room;
use App\Models\Comment;
use App\Models\Image;
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
        $stores = Store::orderBy('id','desc')->get();
        return view('stores/index',['stores'=>$stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $store = new Store;
        return view('stores/create',['store'=>$store]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Store;
        $store->store_name = $request->store_name;
        $store->postal = $request->postal;
        $store->phone = $request->phone;
        $store->area_id = $request->area_id;
        $store->store_type_id = $request->store_type_id;
        $store->address = $request->address;
        $store->access = $request->access;
        $store->description = $request->description;
        $store->save();
        return redirect(route('stores.index', $store->id));
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
        return view('stores.show', ['store'=>$store]);
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
        return view('stores.edit', ['store'=>$store]);
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
        $store->phone = $request->phone;
        $store->area_id = $request->area_id;
        $store->store_type_id = $request->store_type_id;
        $store->address = $request->address;
        $store->access = $request->access;
        $store->description = $request->description;
        $store->save();
        return redirect(route('stores.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect(route('stores.index'));
    }
}
