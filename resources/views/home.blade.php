@extends('layouts.master')

@section('content')
  <div class="row container">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="col-sm-9 kk">
        <section class="" style="padding: 0px 20px 0px 20px;">
            <h3 style="color: #96653b">Hey, I'm Runor  Adjekpiyede, <span style="font-size: 70%; color: #cb9126;">Freelancer, Full Stack Developer</span> <span style="font-size: 70%;">and I</span> build<br> beautiful websites. <a href="#" style="font-size: 50%; text-decoration: underline;"><br>More about me...</a> </h3>
            <h4 class="text-center text-info">A Quick Look</h4>
            <div class="row" style="background:#337AB7; padding: 10px; border: 1px #337AB7; border-radius: 4px; display: none;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <img src="{{ asset('showcase/1.png') }}">
                </div> 
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <img src="{{ asset('showcase/2.png') }}">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <img src="{{ asset('showcase/4.png') }}">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <img src="{{ asset('showcase/1.png') }}">
                </div>
            </div>
            <img src="{{ asset('showcase/un.png') }}">
            <div style="height: 10px;"></div>
            <div class="text-center">
                <a href="#" class="btn btn-info btn-block" style="backgroun-color: #cb9126;">Hire Me</a>
            </div>
        </section>
        <div style="height: 10px;"></div>
        <h4 class="text-center">My Posts</h4>
        <div class="row">
            @foreach($posts as $post)
                <div href="post/{{$post->id}}" class="other_post col-sm-6 col-md-4 pan_pad">
                    <div class="pane" style="height:360px !important; padding: 15px;">  
                            <h4><a href="post/{{$post->id}}">{{ str_limit($post->title), 50 }}</a></h4>
                            <h6 class="text-right small">{{$post->created_at}} </h6>
                    <div class="panel-headin">
                <a href="/post/{{$post->id}}">
                            <img src="{{ asset('uploads/'.$post->image) }}" width="100%">
                            <p class="sp" style="margin-top:0px;">{{ str_limit(strip_tags($post->body), 145) }} <a href="post/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p> 
                </a>      
                    </div>
                    </div>
                    <div style="height: 40px;"></div>
                </div>
               @endforeach  
           </div>      


            <!--ABOUT BEGINS HERE -->
            @include('partials/about')
            <!--ABOUT ENDS HERE -->

    </div>
     @include('../partials/newright-sidebar')
     

</div>
@endsection