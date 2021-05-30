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
}
