<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id' , 'asc')->get();
        return view('users/index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = '会員登録';
        $pagetype = 'create';
        $user = new User;
        $image = new Image;
        return view('users/create', ['user' => $user, 'image' => $image, 'title' => $title, 'pagetype' => $pagetype]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->type = 3;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $image = new Image;
        $image->user_id = $user->id;
        $image->url = $request->url;

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = 'show';
        $user=User::find($id);
        return view('users/show', ['user' => $user, 'page' => $page]);
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = 'show';
        $title = '会員情報を編集する';
        $pagetype = 'edit';
        $user=User::find($id);
        return view('users/create', ['user' => $user , 'title' => $title, 'pagetype' => $pagetype, 'page' => $page]);
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
        $page = 'show';
        $user = User::find($id);
        $user->name = $request->name;
        $user->type = $request->type;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect(route('users.show', ['user' => $user, 'page' => $page]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect(route('users.index'));
    }
}
