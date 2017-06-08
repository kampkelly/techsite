@extends('layouts.master')

@section('content')
  <div class="row">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="col-sm-9">
        <div class="contaier-fluid">
			@include('../partials/errors')
                         <h2 class="text-center" style="text-decoration:underline;">Post</h2>
                <div style="height:10px" ;></div>
                             <div class="pan_pad">
                                <div class="panel panel-default">  <!--to put anything inside panel you                                            have to create another div tag-->
                                <div class="panel-body">
                                    <div id="pan_head">
                                        <div class="panel-header">
                                            <h4 class="text-center" style="margin-top:8px; font-size:2em;">{{$post->title}}
                                            <span class="text-right small" style="font-size:9px;"> {{$post->created_at}}</span></h4>
											@if(count($post->tags))
												<ul>
													
												</ul>
											@endif
											<h4></h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-1 col-xs-12"></div>
                                            <div class="col-sm-10 col-xs-12">
                                               <!--  <img src="{{ asset('uploads/'.$post->image) }}" width="100%" height="40%"> -->
                                                 <img src="{{ asset('uploads/'.$post->image) }}">
                                            </div>
                                            <div class="col-sm-1 col-xs-12"></div>
                                        </div>
                                    </div>
                                     <div style="height:10px"></div>
                                     <div style="padding-left:30px;">
                                    </div>
                                    <div style="height:25px"></div>
                                    <section>
                                        <p class="spc">{!! $post->body !!}</p>
                                    </section>
                                </div>
                            </div>
                        </div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="text-center">
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
				<div id="comments" class="container-fluid">
					{{ Form::open(array('url' => '/comments', 'method' => 'POST', 'class'=>'form-horizontal')) }}
                    <div class="form-group">
                            {{ Form::label('comment_name', 'Name') }}
                            {{ Form::text('comment_name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
                    </div>
					<div class="form-group">
							{{ Form::label('comment', 'Comment') }}
							{{ Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Type Comment', 'rows' => 5]) }}
					</div>
					{{ Form::hidden('post_id', $post->id) }}
					<div class="form-group">
							{{ Form::submit('Add Comment!', null, ['class' => 'form-control btn btn-default btn-block']) }}
					</div>
						{{ Form::close() }}
				</div>
				@foreach($post->comments as $comment)			
					<div class="" style="margin-left: 10px;">
                                <h6>{{$comment->name}}</h6>
								<h5>{{$comment->comment}}</h5>
                                @if (Auth::user())
								{{ Form::open(array('url' => '/comment/'.$comment->id, 'method' => 'DELETE')) }}
								{{ Form::hidden('post_id', $post->id) }}
								{{ Form::submit('Delete', null, ['class' => 'btn btn-danger btn-xs']) }}
								{{ Form::close() }}
								@endif
					</div><br>
				@endforeach
                <!-- begin wwww.htmlcommentbox.com 
                <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Widget</a> is loading comments...</div>
                <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
                <script type="text/javascript" id="hcb">
                    /*<!*/
                    if (!window.hcb_user) {
                        hcb_user = {};
                    }(function() {
                        var s = document.createElement("script"),
                            l = hcb_user.PAGE || ("" + window.location).replace(/'/g, "%27"),
                            h = "//www.htmlcommentbox.com";
                        s.setAttribute("type", "text/javascript");
                        s.setAttribute("src", h + "/jread?page=" + encodeURIComponent(l).replace("+", "%2B") + "&mod=%241%24wq1rdBcg%24Pk3G46QHXBgsVN14vHZdB0" + "&opts=16862&num=10&ts=1494537831439");
                        if (typeof s != "undefined") document.getElementsByTagName("head")[0].appendChild(s);
                    })(); /*

                </script>
                 end www.htmlcommentbox.com -->
                 @include('../partials/about')
        </div>
    </div>
     @include('../partials/right-sidebar')
	   <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
    <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
    <ul class="juicer-feed" data-feed-id="kamp" data-per="20">
        <h1 class="referral"><a href="https://www.juicer.io">Powered by Juicer</a></h1>
    </ul>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-590b6d62620c44d0"></script>

</div>
@endsection