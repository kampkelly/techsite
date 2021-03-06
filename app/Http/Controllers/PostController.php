<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Carbon\Carbon;
use App\User;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
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
        $this->middleware('auth', ['only' => ['admin', 'adminpanel', 'postspanel', 'create', 'edit']]);
    }
	
    public function admin()
    {
        //
      $posts = Post::all();
      $categories = Category::all();
        return view('admins.index', compact('posts', 'categories'));
    }   
	
	 public function adminpanel()
    {
        //
      $posts = Post::all();
      $categories = Category::all();
        return view('admins.panel', compact('posts', 'categories'));
    }  
	
	public function postspanel()
    {
        //
      $posts = Post::orderBy('id', 'desc')->simplePaginate(20);
      $categories = Category::all();
        return view('posts.panel', compact('posts', 'categories'));
    }   

    public function publishedpanel()
    {
        //
      $posts = Post::where('status', 'Published')->orderBy('id', 'desc')->simplePaginate(20); 
      $categories = Category::all();
        return view('posts.published', compact('posts', 'categories'));
    }   

    public function draftpanel()
    {
        //
        $posts = Post::where('status', 'draft')->orderBy('id', 'desc')->simplePaginate(1); 
      $categories = Category::all();
        return view('posts.draft', compact('posts', 'categories'));
    }   
	
	public function homepage()
    {
        //
   //   $posters = Post::all();
   #   $topposts = Post::orderBy('id', 'DESC')->get();
      $topposts = Post::where('status', 'Sticky')->orderBy('id', 'desc')->take(2)->get();  //eloquent method
   #   $posts = Post::all()->paginate(15);
    #   $posts = Post::orderBy('id', 'DESC')->simplePaginate(1);
        $posts = DB::table('posts')->where('status', 'Published')->orderBy('id', 'desc')->simplePaginate(12);  //DB method
      $categories = Category::all();
        
        return view('homepage', compact('posts', 'categories', 'topposts'));
    } 

    public function home()
    {
        //
   //   $posters = Post::all();
   #   $topposts = Post::orderBy('id', 'DESC')->get();
      $topposts = Post::where('status', 'Sticky')->orderBy('id', 'desc')->take(2)->get();  //eloquent method
   #   $posts = Post::all()->paginate(15);
	#	$posts = Post::orderBy('id', 'DESC')->simplePaginate(1);
        $posts = DB::table('posts')->where('status', 'Published')->orderBy('id', 'desc')->simplePaginate(3);  //DB method
      $categories = Category::all();
		
        return view('home', compact('posts', 'categories', 'topposts'));
    }  
  
    public function index()
    {
        //
        $categories = Category::all();
          #  $posts = DB::table('posts')->where('status', 'Published')->orderBy('id', 'desc')->get();
            $posts = Post::where('status', 'Published')->orWhere('status', 'Sticky')->orderBy('id', 'desc')->simplePaginate(12);  //eloquent method
        /*  $posts = Post::latest()
                ->filter(request(['month', 'year']))   //this is for archives
                ->get(); */

        //FOR ARCHIVES
            //ARCHIVE IS LOCATED IN postcontroller, post model and appservice provider
        //FOR ARCHIVES
        return view('posts.index', compact('posts', 'categories'));
    }

    public function search()
    {
      	$categories = Category::all();
     #   $posts = Post::where('status', 'Published')->orderBy('id', 'desc')->simplePaginate(1);  //eloquent method
        $q = Input::get ( 'q' );
        $post = Post::Where(function ($query) {
                $q = Input::get ( 'q' );
                $query->where('tags', 'LIKE', '%'.$q.'%')
                      ->where('status', '=', 'Published');
            })
            ->orWhere(function ($query) {
                $q = Input::get ( 'q' );
                $query->where('title', 'LIKE', '%'.$q.'%')
                      ->where('status', '=', 'Published');
            })->orderBy('id', 'desc')->simplePaginate(1);
      //  if(count($user) > 0 OR count($post) > 0)
        if(count($post) > 0)
           # return view('posts.seae', compact('posts', 'categories', 'topposts'));
         //   return view('posts.search')->withDetails($post)->withQuery( $q )->withUsr( $user );
            return view('posts.search')->withDetails($post)->withQuery( $q );
        else return view ('posts.search')->withMessage('No Details found. Try to search again !')->withQuery($q);
      #  return view('posts.search', compact('posts', 'categories'));
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
		return view('posts.create', compact('categories', 'posts'));
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
        $user = new post;
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
        //slug starts
        $slug_title = preg_replace('/[^A-Za-z0-9\- ]/', '', request('post_title'));
        $slug_title = strtolower($slug_title);
        $slug_date = date("Y-m-d");
        $slug_combine = $slug_title.' '.$slug_date;
        $slug_format = strtr($slug_combine, ' ', '-');
        $slug = $slug_format;  //slug ends
        //
         Post::create([
            'title' => request('post_title'),
            'body' => request('post_description'),
            'body_text' => request('post_description'),
            'image' => $newfilename,
            'category' => 'ca',
            'category_id' => request('post_category'),
            'author_name' => 'g',
            'status' => request('status'),
            'slug' => $slug,
            'tags' => 'g'
        ]);
      //  return redirect('/');
        session()->flash('message', 'Article Created!'); 
        return redirect('/post/'.$slug);
        
     //   $user->save();
     //   return 'data saved in database';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $post = Post::where('slug', $slug)->first();
		$comments = $post->comments()->orderBy('id', 'desc')->get();
        $countcomments = count($comments);
      //	$categories = Category::all();
        return view('posts.show', compact('post', 'comments', 'countcomments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
		$posts = Post::all();
      	$categories = Category::all();
		$post = Post::find($id);
		$cats = Category::pluck('name', 'id');   //for looping in formbuilder select
		if ($post == null) return redirect('/admin/posts/panel'); #redirect if 'id' doesnt exist
		return view('posts.edit', compact('post', 'posts', 'categories', 'cats')); 
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
       /* $this->validate(request(), [
           'post_title' => 'required|min:8',
            'post_image'       => 'required|mimes:png,jpg,jpeg'
        ]);  */
		if(Input::hasFile('post_image')){
            $file=Input::file('post_image');
            $dd = $file->getClientOriginalName();
            $file_basename = substr($dd, 0, strripos($dd, '.')); // get file name
            $file_ext = substr($dd, strripos($dd, '.')); // get file extension
            $t = date("i-s");
            $newfilename = md5($file_basename) . $t . $file_ext;
            $file->move('uploads', $newfilename);
        }
		
		$post = Post::find($id);
        //slug starts
        $slug_title = preg_replace('/[^A-Za-z0-9\- ]/', '', request('post_title'));
        $slug_title = strtolower($slug_title);
        $slug_date = $post->created_at;
        $slug_date = date_format($slug_date,"Y-m-d");
        $slug_combine = $slug_title.' '.$slug_date;
        $slug_format = strtr($slug_combine, ' ', '-');
        $slug = $slug_format;  //slug ends

			if (Input::has('post_title')) $post->title = Input::get('post_title');
            if (Input::has('post_title')) $post->slug = $slug;
			if (Input::hasFile('post_image')) $post->image = $newfilename;
			if (Input::has('post_description')) $post->body = Input::get('post_description');
			if (Input::has('post_category')) $post->category_id = Input::get('post_category');
			if (Input::has('tags')) $post->tags = Input::get('tags');
			if (Input::has('status')) $post->status = Input::get('status');
			$post->save();
		//SESSION FLASH
		session()->flash('message', 'Article Updated!'); //THEN INCLUDE IN THE REDIRECTED FUNCTION, HERE ITS "SHOW"
		//SESSION FLASH also include in the view with if
		return redirect('/post/'.$slug);
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
		$deleted = Post::find($id);
		$deleted->delete();
	//	return redirect('admin/posts/panel');
        return redirect()->back();
		
    }
}
