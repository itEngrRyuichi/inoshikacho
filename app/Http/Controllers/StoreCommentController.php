<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreCommentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stores.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $comment = new \App\Comment;
        $comment->comment = $request->comment;
        $comment->store_id = 0;
        $comment->user_id = 9;
        $comment->save();
        return redirect(route('stores.show'));
    }
}