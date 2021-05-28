<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class StoreCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $store_id)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->store_id = $store_id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
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
        Comment::find($id)->delete();
        return redirect(route('stores.show', $store_id));
    }
}
