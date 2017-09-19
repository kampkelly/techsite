@extends('layouts.master')

@section('content')
  <div class="container">
    <!--INCLUDE SIDEBAR HERE -->
     <div class="row topspace">
    <div class="col-sm-9 kk">
        <!--ABOUT BEGINS HERE -->
        <div class="container-fluid" style="background:#FAFAFA;">
             <div class="row">
             <h4 class="text-center" style="text-decoration: underline;" >About Me</h4>
                <img src="{{ asset('me.jpg') }}" class="oval">
                <p class="lead">I am a full stack developer who builds, designs software and modern day responsive websites. In my spare time I do watch soccer, series (GOT), news and engaging in tech meetups.<br> Some of my coding languages are (but not limited to) HTML5, CSS3/SASS, PHP, Laravel, Javascript, Python, Jquery, VueJs, AngularJs, Git, and <a href="#others" style="color: gray; cursor: pointer; text-decoration: underline;">several</a> others :-).</p>
             </div>
         </div>
        <!--ABOUT ENDS HERE -->
        <?php $k = ['game', 'game']; ?>
        <?php $k = ['game', 'game', 'game', 'game']; ?>
        <h3 style="text-decoration: underline;">My Projects</h3>
        <ul class="list-unstyled">
            <li>
                <h5>- <a href="https://salesnaija.com" target="blank">SalesNaija -  A website selling IT products.</a></h5>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/sales1.png') }}" style="max-height: 200px; cursor: zoom-in;" class="fancybo" title="salesnaija home page"> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/sales2.png') }}" style="max-height: 200px; cursor: zoom-in;" class="fancybo" title="salesnaija mobile"> 
                    </div>
                </div>
            </li> 
            <hr>
            <li>
                <h5>- InstantPay -  A demo ecommerce website for women's fashion.</h5>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/shopping2.png') }}" style="max-height: 200px; cursor: zoom-in;" class="fancybo" title="shopping cart"> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/shopping1.png') }}" style="max-height: 200px; cursor: zoom-in;" class="fancybo" title="shopping homepage"> 
                    </div>
                </div>
            </li>
            <hr>
            <li>
            <h5>- <a href="http://elis-demo.ml" target="blank">Chatbot using natural language communication to provide information.</a></h5>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                   <img src="{{ asset('showcase/elis1.png') }}" style="max-height: 200px; cursor: zoom-in;" class="fancybo" title="elis chatbot"> 
                </div>
            </div>
            </li>
            <hr>
            <li>
            <h5>- <a href="https://www.metallidurans15.com" target="blank">Student's Alumni website.</a></h5>
             <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/1.png') }}" style="max-height: 200px; cursor: zoom-in;" class="fancybo" title="metallidurans homepage"> 
                    </div>
                    
                </div>
            </li>
            <hr>
            <li>
            <h5>- <a href="#">TheInnovestors - connecting innovators with investors</a></h5>
             <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/theinnovestors1.png') }}" style="max-height: 200px; cursor: zoom-in;" class="fancybo" title="theinnovestors homepage"> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/theinnovestors2.png') }}" style="max-height: 200px; cursor: zoom-in;" class="fancybo" title="theinnovestors how it works"> 
                    </div>
                </div>
            </li>
            <hr id="others">
            <li><h5>- <a href="#">Website blocker application.</a></h5></li>
            <li><h5>- <a href="https://github.com/kampkelly/webmap" target="blank">A web mapping application.</a></h5></li>

        </ul><br>
        <div>
            <h5>More extensive list of my programming skills</h5>
            <ul class="list-inline skills">
                <li>HTML5</li>
                <li>CSS3/SASS</li>
                <li>Javascript</li>
                <li>Jquery</li>
                <li>Bootstrap</li>
                <li>MaterializeCss</li>
                <li>AngularJs</li>
                <li>VueJs</li>
                <li>PHP</li>
                <li>Laravel</li>
                <li>Intermediate Python</li>
                <li>Basic Ruby on Rails</li>
                <li>Git</li>
                <li>Website Deployments</li>
                <li>Cordova</li>
                <li>Wordpress</li>
                <li>Wireframes</li>
                <li>Responsive design</li>
            </ul>
        </div>

    </div>
     @include('../partials/newright-sidebar')
     

</div>
</div>
@endsection