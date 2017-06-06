<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
		$this->validate(request(), [
           'comment' => 'required|min:8'
        ]);
        //
         Comment::create([
            'comment' => request('comment'),
            'name' => request('comment_name'),
            'post_id' => request('post_id'),
        ]);
		$id = request('post_id');
      //  return redirect('/post/.$id');
	//	return redirect()->route('/posts', ['id' => $id]);
		session()->flash('message', 'Comment successfully posted!');
		return redirect()->action(
			'PostController@show', ['id' => $id]
		);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		$deleted = Comment::find($id);
		$deleted->delete();
		$id = request('post_id');
		session()->flash('message', 'Comment Deleted!');
		return redirect()->action(
		'PostController@show', ['id' => $id]
		);
    }
}
