@extends('layouts.master')

@section('content')
  <div class="row">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="col-sm-9">
        <div class="contaier-fluid">
			<h2 class="text-center" style="text-decoration:underline;">{{$category->name}} Posts</h2>
			<div style="height:10px" ;></div>
			@foreach($category->posts as $post)			
				<div href="/posts/{{$post->id}}" class="category_post col-sm-6 col-md-4 pan_pad">
					<div class="pane" style="height:360px !important; padding: 15px;">  
							<h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
							<h6 class="text-right small"> {{$post->created_at}}</h6>
					<div class="panel-headin">
						<a href="/post/{{$post->id}}">
							<img src="{{ asset('uploads/'.$post->image) }}" width="100%" class="img-responsiv">
							<p class="sp" style="margin-top:0px;">{{ str_limit($post->body_text, 145) }}... <a href="/posts/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p>     
						</a>  
					</div>
					</div>
				</div>
			@endforeach
			<div style="height: 40px;"></div>
			<div class="col-sm-12"> 
               @include('../partials/about')
            </div>
        </div>
    </div>
     @include('../partials/right-sidebar')

</div>
@endsection