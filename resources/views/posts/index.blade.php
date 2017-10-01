@extends('layouts.master')

@section('content')
  <div class="container articlescontainer">
    <!--INCLUDE SIDEBAR HERE -->
  <div class="row topspace">
    <div class="col-sm-9">
        <div class="contaier-fluid">
            <h2 class="text-center" style="color: grey;">Articles</h2>
            <div id="other_pos"> 
			  @foreach($posts as $post)
				<div href="/post/{{$post->id}}" class="other_post col-sm-6 col-md-4 pan_pad">
					<div class="pane article_title hidden-lg hidden-md">  
              <h4><a href="/post/{{$post->id}}">{{ str_limit($post->title, 65) }}</a></h4>
              <h6 class="text-right small">{{$post->created_at->diffForHumans()}}</h6>
          </div>
          <div class="pane article_title hidden-xs hidden-sm">  
							<h4><a href="/post/{{$post->id}}">{{ str_limit($post->title, 52) }}</a></h4>
							<h6 class="text-right small">{{$post->created_at->diffForHumans()}}</h6>
          </div>
					<div class="panel-headin">
            <a href="/post/{{$post->id}}">
							<img src="{{ asset('uploads/'.$post->image) }}" width="100%" class="article_image">
              </a> 
							<p class="sp  article_description" style="margin-top:0px;">{{ str_limit(strip_tags($post->body), 145) }} <a href="post/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p>    
              
					</div>
          <hr class="hidden-m hidden-l">
				</div>
               @endforeach 

            </div>
              <div class="col-sm-12"> 
               {{ $posts->links() }} <!--paginate links-->
               @include('../partials/about')
            </div>
            <!--ABOUT BEGINS HERE -->
            <!--ABOUT ENDS HERE -->
        </div>
    </div>
     @include('../partials/newright-sidebar')

</div>
</div>
@endsection