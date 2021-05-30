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


class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // サイト管理ユーザ
        $reserves = Reserve::join('provides', 'provides.id', '=', 'reserves.provide_id')
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
        return view('reserves.index', ['reserves'=>$reserves]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $provide = Provide::where('store_id', $request->store_id)->where('plan_id', $request->plan_id)->where('room_id', $request->room_id)->first();
        $store = Store::find($request->store_id);
        $plan = Plan::find($request->plan_id);
        $room = Room::find($request->room_id);
        $amenities = Amenity::where('room_id', $request->room_id)->get();
        $person_types = PersonType::all();
        $check_in = date("Y-m-d", strtotime("+1 day"));
        $check_out = date("Y-m-d", strtotime("+2 day"));
        $adult_number = 2;
        $middle_number = 0;
        $child_number = 0;
        $baby_number = 0;
        $adult_price = Price::where('plan_id', $request->plan_id)->where('person_type_id', 1)->first();
        $middle_price = Price::where('plan_id', $request->plan_id)->where('person_type_id', 2)->first();
        $child_price = Price::where('plan_id', $request->plan_id)->where('person_type_id', 3)->first();
        $baby_price = Price::where('plan_id', $request->plan_id)->where('person_type_id', 4)->first();
        $results = [
            'provide' => $provide,
            'store' => $store,
            'plan' => $plan,
            'room' => $room,
            'amenities' => $amenities,
            'person_types' => $person_types,
            'adult_number' => $adult_number,
            'middle_number' => $middle_number,
            'child_number' => $child_number,
            'baby_number' => $baby_number,
            'adult_price' => $adult_price,
            'middle_price' => $middle_price,
            'child_price' => $child_price,
            'baby_price' => $baby_price,
            'check_in' => $check_in,
            'check_out' => $check_out
        ];
        return view('reserves.create', $results);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserve = New Reserve;
        $reserve->user_id = Auth::user()->id;
        $reserve->provide_id = $request->provide_id;
        $reserve->check_in = $request->checkin;
        $reserve->check_out = $request->checkout;
        $reserve->save();

        $adult = New People;
        $adult->reserve_id = $reserve->id;
        $adult->person_type_id = 1;
        $adult->number = $request->adult_number;
        $adult->save();

        $middle = New People;
        $middle->reserve_id = $reserve->id;
        $middle->person_type_id = 2;
        $middle->number = $request->middle_number;
        $middle->save();

        $child = New People;
        $child->reserve_id = $reserve->id;
        $child->person_type_id = 3;
        $child->number = $request->child_number;
        $child->save();

        $baby = New People;
        $baby->reserve_id = $reserve->id;
        $baby->person_type_id = 4;
        $baby->number = $request->baby_number;
        $baby->save();

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
        $reserve = Reserve::find($id);
        $user = User::find($reserve->user_id);
        $provide = Provide::find($reserve->provide_id);
        $store = Store::find($provide->store_id);
        $plan = Plan::find($provide->plan_id);
        $room = Room::find($provide->room_id);
        $amenities = Amenity::where('room_id', $provide->room_id)->get();
        $person_types = PersonType::all();
        $check_in = $reserve->check_in;
        $check_out = $reserve->check_out;
        $adult_number = People::where('reserve_id', $reserve->id)->where('person_type_id', 1)->first()->number;
        $middle_number = People::where('reserve_id', $reserve->id)->where('person_type_id', 2)->first()->number;
        $child_number = People::where('reserve_id', $reserve->id)->where('person_type_id', 3)->first()->number;
        $baby_number = People::where('reserve_id', $reserve->id)->where('person_type_id', 4)->first()->number;
        $adult_price = Price::where('plan_id', $provide->plan_id)->where('person_type_id', 1)->first()->price;
        $middle_price = Price::where('plan_id', $provide->plan_id)->where('person_type_id', 2)->first()->price;
        $child_price = Price::where('plan_id', $provide->plan_id)->where('person_type_id', 3)->first()->price;
        $baby_price = Price::where('plan_id', $provide->plan_id)->where('person_type_id', 4)->first()->price;
        $diff = abs(strtotime($check_out) - strtotime($check_in));
        $duration = floor($diff / (60 * 60 * 24));
        $adult_total = $adult_number * $adult_price * $duration;
        $middle_total = $middle_number * $middle_price * $duration;;
        $child_total = $child_number * $child_price * $duration;;
        $baby_total = $baby_number * $baby_price * $duration;;
        $total = $adult_total + $middle_total + $child_total + $baby_total;
        $results = [
            'reserve' => $reserve,
            'user' => $user,
            'provide' => $provide,
            'store' => $store,
            'plan' => $plan,
            'room' => $room,
            'amenities' => $amenities,
            'person_types' => $person_types,
            'adult_number' => $adult_number,
            'middle_number' => $middle_number,
            'child_number' => $child_number,
            'baby_number' => $baby_number,
            'adult_price' => $adult_price,
            'middle_price' => $middle_price,
            'child_price' => $child_price,
            'baby_price' => $baby_price,
            'adult_total' => $adult_total,
            'middle_total' => $middle_total,
            'child_total' => $child_total,
            'baby_total' => $baby_total,
            'total' => $total,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'duration' => $duration,
        ];
        return view('reserves.show', $results);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserve = Reserve::find($id);
        $user = User::find($reserve->user_id);
        $provide = Provide::find($reserve->provide_id);
        $store = Store::find($provide->store_id);
        $plan = Plan::find($provide->plan_id);
        $room = Room::find($provide->room_id);
        $amenities = Amenity::where('room_id', $provide->room_id)->get();
        $person_types = PersonType::all();
        $check_in = $reserve->check_in;
        $check_out = $reserve->check_out;
        $adult_number = People::where('reserve_id', $reserve->id)->where('person_type_id', 1)->first()->number;
        $middle_number = People::where('reserve_id', $reserve->id)->where('person_type_id', 2)->first()->number;
        $child_number = People::where('reserve_id', $reserve->id)->where('person_type_id', 3)->first()->number;
        $baby_number = People::where('reserve_id', $reserve->id)->where('person_type_id', 4)->first()->number;
        $adult_price = Price::where('plan_id', $provide->plan_id)->where('person_type_id', 1)->first()->price;
        $middle_price = Price::where('plan_id', $provide->plan_id)->where('person_type_id', 2)->first()->price;
        $child_price = Price::where('plan_id', $provide->plan_id)->where('person_type_id', 3)->first()->price;
        $baby_price = Price::where('plan_id', $provide->plan_id)->where('person_type_id', 4)->first()->price;
        $check_in = $reserve->check_in;
        $check_out = $reserve->check_out;
        $results = [
            'user' => $user,
            'reserve' => $reserve,
            'provide' => $provide,
            'store' => $store,
            'plan' => $plan,
            'room' => $room,
            'amenities' => $amenities,
            'person_types' => $person_types,
            'adult_number' => $adult_number,
            'middle_number' => $middle_number,
            'child_number' => $child_number,
            'baby_number' => $baby_number,
            'adult_price' => $adult_price,
            'middle_price' => $middle_price,
            'child_price' => $child_price,
            'baby_price' => $baby_price,
            'check_in' => $check_in,
            'check_out' => $check_out,
        ];
        return view('reserves.edit', $results);
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
        $reserve = Reserve::find($id);
        $reserve->check_in = $request->checkin;
        $reserve->check_out = $request->checkout;
        $reserve->save();

        $adult = People::where('reserve_id', $reserve->id)->where('person_type_id', 1)->first();
        $adult->number = $request->adult_number;
        $adult->save();

        $middle = People::where('reserve_id', $reserve->id)->where('person_type_id', 2)->first();
        $middle->number = $request->middle_number;
        $middle->save();

        $child = People::where('reserve_id', $reserve->id)->where('person_type_id', 3)->first();
        $child->number = $request->child_number;
        $child->save();

        $baby = People::where('reserve_id', $reserve->id)->where('person_type_id', 4)->first();
        $baby->number = $request->baby_number;
        $baby->save();

        $store_id = Provide::find($reserve->provide_id)->first()->store_id;

        if (Auth::user()->type === 1) {
            return redirect(route('reserves.index'));
        }
        if (Auth::user()->type === 2) {
            return redirect(route('stores.reserves.index', ['store_id' => $store_id]));
        }
        if (Auth::user()->type === 3) {
            return redirect(route('users.reserves.index', ['user_id' => Auth::id()]));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserve = Reserve::find($id);
        $store_id = Provide::find($reserve->provide_id)->first()->store_id;

        Reserve::find($id)->delete();

        if (Auth::user()->type === 1) {
            return redirect(route('reserves.index'));
        }
        if (Auth::user()->type === 2) {
            return redirect(route('stores.reserves.index', ['store_id', $store_id]));
        }
        if (Auth::user()->type === 3) {
            return redirect(route('users.reserves.index', ['user_id', Auth::user()->id]));
        }
    }
}
