<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //FOR GLOBAL VIEW EVERYWHERE
		view()->composer('../partials/right-sidebar', function ($view) {
            $archives = \App\Post::archives();
			$categories = \App\Category::all();
			$tags = \App\Tag::has('posts')->pluck('name');
			$view->with(compact('archives', 'tags', 'categories'));
			
		//	$view->with('archives', \App\Post::archives(););
		//	$view->with('tags', \App\Tag::all());
		//	$view->with('tags', \App\Tag::has('posts')->pluck('name'));
		//	$archives = Post::archives();
		});

        view()->composer('../partials/admin_right-sidebar', function ($view) {
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');
            $view->with(compact('archives', 'tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
