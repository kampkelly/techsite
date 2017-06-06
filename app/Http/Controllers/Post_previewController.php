<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post_preview;
use Illuminate\Support\Facades\Input;

class Post_previewController extends Controller
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
           'post_title' => 'required|min:8',
            'post_image'       => 'required|mimes:png,jpg,jpeg'
        ]);
        //
        $user = new post_preview;
        $user->title= Input::get('name');
        if(Input::hasFile('post_image')){
            $file=Input::file('post_image');
            $dd = $file->getClientOriginalName();
            $file_basename = substr($dd, 0, strripos($dd, '.')); // get file name
            $file_ext = substr($dd, strripos($dd, '.')); // get file extension
            $t = date("i-s");
            $newfilename = md5($file_basename) . $t . $file_ext;
            $file->move('uploads', $newfilename);
        }
        //
         Post_preview::create([
            'title' => request('post_title'),
            'body' => request('post_description'),
            'body_text' => request('post_description'),
            'image' => $newfilename,
            'category' => 'ca',
            'category_id' => request('post_category'),
            'author_name' => 'g',
            'status' => request('status'),
            'tags' => 'g'
        ]);
     //   return redirect('/');
		$posts = Post_preview::all();
	//	$post = DB::selectOne("SELECT * FROM posts_preview WHERE id = 1");
		//return view('posts_preview.show', compact('posts', 'post'));
		return redirect('/posts_preview');
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
		$post = Post_preview::find($id);
      //	$categories = Category::all();
        return view('posts_preview.show', compact('post'));
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
    }
}
