<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'profile';
        $user = User::find(1);
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
        $page = 'profile';
        $title = '会員情報を編集する';
        $pagetype = 'edit';
        $user = User::find($id);
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
        $page = 'profile';
        $user = User::find($id);
        $user->name = $request->name;
        $user->type = $request->type;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $image = $request->file('select-image');
        $user_image = Image::where('user_id', '=', $id)->first();
        $recentPath = $user_image->url;

        if( isset($image) === true ){
            Storage::delete('/images/users' . $recentPath);
            $user_image->url = $image->store('images/users', 'public');
        }
        $user_image->save();

        return redirect(route('profile', ['user' => $user, 'page' => $page]));
    }
}
