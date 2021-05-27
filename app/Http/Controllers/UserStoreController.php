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
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $stores = Store::where('user_id', $user_id)->with('images')->get();
        $areas = Area::all();
        return view('stores.index', ['stores' => $stores, 'areas' => $areas]);
    }
}
