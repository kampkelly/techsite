<?php
use App\User;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/about', function () {
    return view::make('partials/about');
}); */

Route::get('/', 'PostController@homepage');
Route::get('/posts', 'PostController@index');
Route::get('/posts/new', 'PostController@create');
Route::get('/post/{show}', 'PostController@show');
Route::get('/post/edit/{edit}', 'PostController@edit');
Route::put('/post/{edit}', 'PostController@update');
Route::delete('/post/{edit}', 'PostController@destroy');
Route::post('/postse', 'PostController@store');
Route::post('/comments', 'CommentController@store');
Route::post('/postedit', 'PostController@update');
//post preview begins
$post = DB::selectOne("SELECT * FROM post_previews WHERE id = 1");
Route::get('/posts_preview', function () {
    return view('posts_preview.show', compact('post'));
});
Route::post('/preview', 'Post_previewController@store');
//post preview
Route::get('/category/{show}', 'CategoryController@show');
Route::post('/cat', function(){
   $bsqd = Input::get('cat');    
  # return Redirect::action('FrontController@buscarPrd', array('nom'=>$bsqd));
   return redirect('/category/'.$bsqd);

});
Route::get('/categories/new', 'CategoryController@create');
Route::get('/categories', 'CategoryController@index');
Route::post('/categories', 'CategoryController@store');
Route::get('/category/edit/{edit}', 'CategoryController@edit');
Route::put('/category/{edit}', 'CategoryController@update');
Route::delete('/category/{edit}', 'CategoryController@destroy');

Route::delete('/comment/{edit}', 'CommentController@destroy');

Route::get('/posts/tags/{tag}', 'TagController@index');
//Admin
Route::get('/admin', 'PostController@admin');
Route::get('/admin/panel', 'PostController@admpanel');
Route::get('/admin/posts/panel', 'PostController@postspanel');
Route::get('/admin/posts/published', 'PostController@publishedpanel');
Route::get('/admin/posts/drafts', 'PostController@draftpanel');

Route::get('/home', 'HomeController@index')->name('home');
Route::any('/search', 'PostController@search');

/*
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('/posts/search')->withDetails($user)->withQuery ( $q );
    else return view ('/posts/search')->withMessage('No Details found. Try to search again !');
});
*/

//AUTHENTICATION ROUTES
#Auth::routes();

$this->get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
