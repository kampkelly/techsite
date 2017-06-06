@extends('layouts.master')

@section('content')
  <div class="row">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="col-sm-9">
        <div class="contaier-fluid">
			<h2 class="text-center" style="text-decoration:underline;">{{$category->name}} Posts</h2>
			<div style="height:10px" ;></div>
			@foreach($category->posts as $post)			
				<div href="/posts/{{$post->id}}" class="category_post col-sm-4">
					<div class="panel panel-default" style="height:360px !important;">  
							<h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
							<h6 class="text-right small"> {{$post->created_at}}</h6>
					<div class="panel-headin">
							<img src="admins/'.$rows['image'].'" width="100%">
							<p class="sp" style="margin-top:0px;">{{ str_limit($post->body_text, 145) }}... <a href="/posts/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p>       
					</div>
					</div>
				</div>
			@endforeach
			<div class="col-sm-12"> 
               @include('../partials/about')
            </div>
        </div>
    </div>
     @include('../partials/right-sidebar')

</div>
@endsection