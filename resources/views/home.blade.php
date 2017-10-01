@extends('layouts.master')

@section('content')
  <div class="container" style="margn-left: 0px; margi-right: 0px;">
    <!--INCLUDE SIDEBAR HERE -->
 <div class="row topspace">
    <div class="col-sm-9">
        <section class="" style="padding: 0px 20px 0px 20px;">
            <h1 style="color: #96653b; text-transform: uppercase; font-weight: 600;" class="hide-smartphone">Hey, I'm Runor  Adjekpiyede, <span style="font-size: 70%; ">a Full Stack Developer</span> <span style="font-size: 70%;">and I  build</span> <span style="color: #286090;"> web apps.</span> </h1>
            <h3 style="color: #96653b; text-transform: uppercase; font-weight: 600;" class="show-only-smartphone">Hey, I'm Runor  Adjekpiyede, <span style="font-size: 70%; ">a Full Stack Developer</span> <span style="font-size: 70%;">and I build</span> <br> <span style="color: #286090;"> web apps.</span> </h3>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="display: none;">
                    <h4 class="text-center text-info">A Quick Look</h4>
                    <img class="fancybox" src="{{ asset('showcase/quicklook1.png') }}" title="Quick look" style="cursor: zoom-in;">
                    <div class="text-center" style="margin-top: 20px;">
                        <a href="/contact" class="btn btn-success btn-block" style="backgroun-color: #cb9126;">Contact Me</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-7">
                   <h4 class="text-justif lea" style="font-weight: 300;"><img src="{{ asset('showcase/fet1.png') }}" class="rect hidden-lg">I specialize in web development, responsive design, HTML5, CSS3/SASS, Bootstrap, Javascript, PHP, Laravel.<br> I also make use of <a href="#languages" onclick="mystuff()">these</a>. <br><br>I am currently a freelancer but interested in working with a dynamic and growth oriented organization.<br> While away from these coding life, I do enjoy football, writing tutorials and getting acquainted.<br><br>
                If you want to know more about me, my work or work together, feel free to contact me on hola@runoradjekpiyede.me or</h4>
                <a href="/contact" class="btn btn-info btn-block" style="backgroun-color: #cb9126;">Contact Me</a>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 hidden-xs hidden-sm hidden-md">
                    <img class="fancybo" src="{{ asset('showcase/fet1.png') }}" class="rect" style="height: 200px;">
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 hide-smartphone hide-tablet hide-mini-laptop hide-desktop">
                    <h5 class="text-centr text-warning" style="text-decoration: underline;">See what my customers say:</h5>
                    <q>Believe in yourself, there is no limit to what you can achieve!</q> <span class="text-muted">- James</span><br><br>
                    <q>Believe in yourself, there is no limit to what you can achieve!</q> <span class="text-muted">- James</span><br><br>
                    <q>Believe in yourself, there is no limit to what you can achieve!</q> <span class="text-muted">- James</span>
                </div>
            </div>
            
            <div style="height: 10px;"></div>
            <div class="text-center hide-smartphone hide-tablet hide-mini-laptop hide-desktop" style="margin-top: 20px;">
                <a href="/contact" class="btn btn-success btn-blck" style="backgroun-color: #cb9126; width: 50%;">Contact Me</a>
            </div>
        </section>
        <div style="display: none;">
        <div style="height: 7px;"></div>
        <h4 class="text-center">My Articles</h4>
        <div class="row">
            @foreach($posts as $post)
                <div href="post/{{$post->id}}" class="other_post col-sm-6 col-md-4 pan_pad">
                    <div class="pane" style="height:360px !important; padding: 15px;">  
                        <div style="min-height: 21% !important;">
                            <h4><a href="post/{{$post->id}}">{{ str_limit($post->title, 50) }}</a></h4>
                            <h6 class="text-right small">{{$post->created_at}} </h6>
                        </div>
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
            <!--ABOUT ENDS HERE -->
        </div>

    </div>
     @include('../partials/newright-sidebar')
     

</div>
</div>
<script type="text/javascript">
    
</script>
@endsection
