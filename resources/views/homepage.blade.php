@extends('layouts.master')

@section('content')
  <div class="row">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="col-sm-9">
        <div class="contaier-fluid">
          <h2 class="text-center" style="text-decoration:none;">Top Posts This Week</h2>
          <div style="height:10px" ;></div>
          <div class="row">
              <style>
                  p img {
                      height: 20px;
                      width: 60%;
                  }

              </style>
                <div class="col-sm-8 row" style="padding-left:20px;">
                  <!--LEFT COLUMN -->
                  <!--TOP TRENDING POSTS BEGINS -->
					
					@foreach ($topposts as $post)
						<div href="post/{{$post->id}}" class="top_post col-sm-5">
                          <div class="panel panel-default" style="height:360px !important;">  
                                  <h4><a href="post/{{$post->id}}">{{ str_limit($post->title), 50 }}</a></h4>
                                  <h6 class="text-right small">{{$post->created_at->diffForHumans()}} </h6>
                          <div class="panel-headin">
                                  <img src="http://placehold.it/350x150" width="100%">
                                  <p class="sp" style="margin-top:0px;">{{ str_limit(strip_tags($post->body), 100) }} <a href="post/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p>       
                          </div>
                          </div>
                      </div>
					@endforeach
                    
                    <!--TOP TRENDING POSTS ENDS -->
                </div>
                <div class="col-sm-4">
                    <div id="qp_all1059041" style="width:100%;">
                        <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
                        <STYLE>
                            #qp_main1059041 .qp_btna:hover input {
                                background: rgb(0, 53, 95)!important
                            }
                            
                            #qp_all1059041 {
                                max-width: 815px;
                                margin: 0 auto;
                            }

                        </STYLE>
                        <div id="qp_main1059041" fp='6323478E-44' results=0 style="border-radius: 0px;margin: 0px auto;padding: 0.8em;background: rgb(255, 255, 255);font-family: 'Open Sans', sans-serif, Arial;color: rgb(0, 0, 0);border: 1px solid rgb(219, 217, 217);max-width: 815px;box-sizing: border-box;font-size: 0.86em">
                            <div style="font-size: 1.2em;background-color: rgb(0, 53, 95);color: rgb(255, 255, 255);font-family: 'Open Sans', sans-serif, Arial">
                                <div style="padding: 0.8em;line-height: 1.3em">Poll: Which OS Would You Go For?</div>
                            </div>
                            <form id="qp_form1059041" action="//www.poll-maker.com/results1059041x6323478E-44" method="post" target="_blank" style="display: inline;margin: 0px;padding: 0px">
                                <div style="padding: 0px"><input type=hidden name="qp_d1059041" value="42860.3525462974-42860.3525649233">
                                    <div style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display: block;padding-left: 30px;cursor: inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px;-webkit-appearance:radio;" name="qp_v1059041" type="radio" value="1" />WIndows</span></div>
                                    <div style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display: block;padding-left: 30px;cursor: inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px;-webkit-appearance:radio;" name="qp_v1059041" type="radio" value="2" />macOs</span></div>
                                    <div style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display: block;padding-left: 30px;cursor: inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px;-webkit-appearance:radio;" name="qp_v1059041" type="radio" value="3" />Linux</span></div>
                                    <div style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display: block;padding-left: 30px;cursor: inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px;-webkit-appearance:radio;" name="qp_v1059041" type="radio" value="999" />Other</span></div>
                                    <div id="qp_ot1059041" style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both">
                                        <div style="padding-left:33px">Please Specify: <input style="width:100%;position:relative;top:2px" name='qp_other1059041' type=text value=''></div>
                                    </div>
                                </div>
                                <div style="padding-left: 0px;clear: both;text-align: left;margin: 1em auto">
                                    <a style="display: inline-block;box-sizing: border-box;padding-right: 5px;text-decoration: none" class="qp_btna" href="#"><input name="qp_b1059041" style="min-width: 7.8em;padding: 0.5em;background-color: rgb(11, 121, 211);font-family: 'Open Sans', sans-serif, Arial;font-size: 16px;color: rgb(255, 255, 255);cursor: pointer;border: 0px;-webkit-appearance: none;border-radius: 0px" type="submit" btype="v" value="Vote" /></a>
                                    <a style="display: inline-block;box-sizing: border-box;padding-left: 5px;text-decoration: none" class="qp_btna" href="#"><input name="qp_b1059041" style="min-width: 7.8em;padding: 0.5em;background-color: rgb(11, 121, 211);font-family: 'Open Sans', sans-serif, Arial;font-size: 16px;color: rgb(255, 255, 255);cursor: pointer;border: 0px;-webkit-appearance: none;border-radius: 0px" type="submit" btype="r" value="Results" /></a>
                                </div><a id="qp_a1059041" style="float:right;font-family:Arial;font-size:10px;color:rgb(0,0,0);text-decoration:none" href="https://www.survey-maker.com">make surveys</a></form>
                            <div style="display:none">
                                <div id="qp_rp1059041" style="font-size: 14px;width: 5ex;text-align: right;overflow: hidden;position: absolute;right: 5px;height: 1.5em;line-height: 1.5em"></div>
                                <div id="qp_rv1059041" style="font-size: 14px;line-height: 1.5em;width: 0%;text-align: right;color: rgb(255, 255, 255);box-sizing: border-box;padding-right: 3px"></div>
                                <div id="qp_rb1059041" style="font-size: 14px;line-height: 1.5em;color: rgb(255, 255, 255);display: block"></div>
                                <div id="qp_rva1059041" style="background: rgb(0, 111, 185);border-color: rgb(0, 111, 185)"></div>
                                <div id="qp_rvb1059041" style="background: rgb(22, 52, 99);border-color: rgb(22, 52, 99)"></div>
                                <div id="qp_rvc1059041" style="background: rgb(91, 207, 252);border-color: rgb(20, 129, 171)"></div>
                            </div>
                        </div>
                    </div>
                    <script src="//scripts.poll-maker.com/3012/scpolls.js" language="javascript"></script>
                    <!--JOB ADVERTS BEGINS--
                    <iframe src="https://www.myjobmag.com/widget/feed.php?field=0&industry=0&count=10&title=Jobs%20in%20Nigeria%20-%20MyJobMag.com&width=194&height=350&bgcolor=FFFFFF&border_color=CCCCCC&border_thickness=1&font_type=Sans-Serif&title_font_size=14&title_font_color=000000&font_size=12&font_color=333333&link_color=031333&show_logo=Yes&scroll=No" frameborder="0" width="294" height="350" scrolling="no"></iframe>
                    --JOB ADVERTSENDS-->
                </div>
                <!--RIGHT COLUMN -->
            </div>
            <h2 class="text-center">Recent Posts</h2>
            <div id="other_post"> 
			  @foreach($posts as $post)
				<div href="post/{{$post->id}}" class="other_post col-sm-4 pan_pad">
					<div class="panel panel-deault" style="height:360px !important;">  
							<h4><a href="post/{{$post->id}}">{{ str_limit($post->title), 50 }}</a></h4>
							<h6 class="text-right small">{{$post->created_at}} </h6>
					<div class="panel-headin">
							<img src="https://cvws.icloud-content.com/B/AS0v8p0nVP9xE3ESAIPc7540EAg5AX3H3CMGfUQzPXgcmfdBGt372zdP/creative-869200_1920.jpg?o=AtvTt6lcJkUSsGvKYrHddMs4te7f_O_P8x92l8IjZ44M&v=1&x=3&a=BTzroYiS5sBbAzRFOw&e=1495364358&k=SaC-TypsVqUXJYY31bUSMA&fl=&r=71973090-169e-4f01-8049-ddc2b3d7369e-1&ckc=com.apple.clouddocs&ckz=com.apple.CloudDocs&p=64&s=J6QB-b58e_Lmb1QkLfeIbcxKEUs&cd=i" width="100%">
							<p class="sp" style="margin-top:0px;">{{ str_limit(strip_tags($post->body), 145) }} <a href="post/{{$post->id}}" class="btn btn-xs btn-primary">Read More...</a> </p>       
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