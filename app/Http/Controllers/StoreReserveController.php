<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Reserve;
use App\Models\Amenity;
use App\Models\Store;
use App\Models\User;
use App\Models\Image;
use App\Models\Room;
use App\Models\Comment;
use App\Models\People;
use App\Models\Provide;
use App\Models\Price;
use App\Models\PersonType;
use \App\Models\Plan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($store_id)
    {
        // 店舗管理ユーザ
        $reserves = Reserve::where('stores.id', $store_id)
                            ->join('provides', 'provides.id', '=', 'reserves.provide_id')
                            ->join('users', 'reserves.user_id','=','users.id')
                            ->join('images', 'users.id', '=', 'images.user_id')
                            ->join('stores', 'provides.store_id', '=', 'stores.id')
                            ->select(
                                'provides.id as provide_id',
                                'reserves.id as reserve_id',
                                'users.id as user_id',
                                'users.name as reserver',
                                'stores.id as store_id',
                                'stores.store_name',
                                'reserves.check_in',
                                'reserves.check_out',
                                'images.url'
                                )
                            ->get();
        for ($i=0; $i < count($reserves); $i++) {
            $reserve_id = $reserves[$i]->reserve_id;
            $adult_no = People::where('reserve_id', $reserve_id)->where('person_type_id', 1)->first();
            $middle_no = People::where('reserve_id', $reserve_id)->where('person_type_id', 2)->first();
            $child_no = People::where('reserve_id', $reserve_id)->where('person_type_id', 3)->first();
            $baby_no = People::where('reserve_id', $reserve_id)->where('person_type_id', 4)->first();
            $reserves[$i]->adult_no = $adult_no;
            $reserves[$i]->middle_no = $middle_no;
            $reserves[$i]->child_no = $child_no;
            $reserves[$i]->baby_no = $baby_no;

        }
        return view('reserves.index',['reserves'=>$reserves]);
    }
}
