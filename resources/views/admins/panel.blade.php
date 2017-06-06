@extends('layouts.admin_master')

@section('content')
  <div style="height:70px" ;></div>
    <div class="row">
     @include('../partials/admin_menubar')
		  <div class="col-sm-8 main_content">
            <h3 class="text-center">Published Posts</h3>
			 @foreach($posts as $post)
				<div href="/post/{{$post->id}}" class="other_post col-sm-4 pan_pad">
					<div class="panel panel-deault" style="height:360px !important;">  
							<h4><a href="/post/{{$post->id}}">{{ str_limit($post->title, 35) }}...</a></h4>
							<h6 class="text-right small"> {{$post->created_at}}</h6>
					<div class="panel-headin">
							<img src="'.$rows['image'].'" width="100%">
							<p class="sp" style="margin-top:0px;">{{ str_limit($post->body_text, 105) }}... <a href="/post/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p>       
					</div>
					</div>
				</div>
			 @endforeach

        </div>
     @include('../partials/admin_right-sidebar')
</div>

@endsection