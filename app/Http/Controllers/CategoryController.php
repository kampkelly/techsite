<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
    {
       // $this->middleware('auth', ['except' => ['index', 'show']]);
     //   $this->middleware('auth', ['only' => ['index', 'show']]);
        $this->middleware('auth', ['only' => ['index', 'create', 'edit']]);
    }
	
    public function index()
    {
        //
		$posts = Post::all();
      	$categories = Category::all();
        return view('categories.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$posts = Post::all();
      $categories = Category::all();
		return view('categories.create', compact('posts', 'categories'));
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
         Category::create([
            'name' => request('category_name'),
        ]);
        session()->flash('message', 'Category Created Successfully!'); 
        return redirect('/categories');
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
		//$post = Post::find($id);
      	$category = Category::find($id);
        return view('categories.show', compact('category'));
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
		$posts = Post::all();
		$category = Category::find($id);
        return view('categories.edit', compact('category', 'posts'));
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
		$category = Category::find($id);
			if (Input::has('category')) $category->name = Input::get('category');
			$category->save();
		//SESSION FLASH
		session()->flash('message', 'Category Name Changed!'); //THEN INCLUDE IN THE REDIRECTED FUNCTION, HERE ITS "SHOW"
		//SESSION FLASH also include in the view with if
		return redirect('/categories');
		#return redirect()->back();
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
		$deleted = Category::find($id);
		$deleted->delete();
		return redirect('/categories');
    }
}
