@extends('layouts.master')

@section('content')
  <div class="row">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="col-sm-9">
        <div class="contaier-fluid">
            <h2 class="text-center">Blog Posts</h2>
            <div id="other_pos"> 
			  @foreach($posts as $post)
				<div href="/post/{{$post->id}}" class="other_post col-sm-6 col-md-4 pan_pad">
					<div class="pane" style="height:360px !important; padding: 15px;">  
							<h4><a href="/post/{{$post->id}}">{{ str_limit($post->title) }}</a></h4>
							<h6 class="text-right small">{{$post->created_at}} </h6>
					<div class="panel-headin">
            <a href="/post/{{$post->id}}">
							<img src="{{ asset('uploads/'.$post->image) }}" width="100%">
							<p class="sp" style="margin-top:0px;">{{ str_limit(strip_tags($post->body), 145) }} <a href="post/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p>    
            </a>   
					</div>
					</div>
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
     @include('../partials/right-sidebar')

</div>
@endsection