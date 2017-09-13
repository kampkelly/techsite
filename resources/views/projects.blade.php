@extends('layouts.master')

@section('content')
  <div class="row container">
    <!--INCLUDE SIDEBAR HERE -->
    <div class="col-sm-9 kk">
        <!--ABOUT BEGINS HERE -->
        <div class="container-fluid" style="background:#FAFAFA;">
             <div class="row">
             <h4 class="text-center" style="text-decoration: underline;" >Runor Adjekpiyede's Projects</h4>
                <img src="{{ asset('man.png') }}" class="oval">
                <p class="lead">I am a full stack developer who builds and designs software and modern day responsive websites. I am currently the lead developer at Teamin working on TheInnovestors. <br> Some of my coding languages are (but not limited to) HTML5, CSS3/SASS, PHP, Laravel, Javascript, Python, Jquery, VueJs, AngularJs, Git, and <a href="#others" style="color: gray; cursor: pointer;">several</a> others :-).</p>
             </div>
         </div>
        <!--ABOUT ENDS HERE -->
        <?php $k = ['game', 'game']; ?>
        <?php $k = ['game', 'game', 'game', 'game']; ?>
        <h3 style="text-decoration: underline;">My Projects</h3>
        <ul class="list-unstyled">
            <li>
                <h5>- <a href="https://salesnaija.com">SalesNaija -  A website selling IT products.</a></h5>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/3.png') }}"> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/2.png') }}"> 
                    </div>
                </div>
            </li> 
            <li>
                <h5>- InstantPay -  A demo ecommerce website for women's fashion.</h5>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/4.png') }}"> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/2.png') }}"> 
                    </div>
                </div>
            </li>
            <li>
            <h5>- <a href="">Product finder website integrated with machine learning (natural language communication).</a></h5>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                   <img src="{{ asset('showcase/5.png') }}"> 
                </div>
            </div>
            </li>
            <li>
            <h5>- <a href="">Student's Alumni website.</a></h5>
             <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/1.png') }}"> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/1.png') }}"> 
                    </div>
                </div>
            </li>
            <li>
            <h5>- <a href="">TheInnovestors - connecting innovators with investors</a></h5>
             <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/1.png') }}"> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 10px 40px 0px 40px;">
                       <img src="{{ asset('showcase/1.png') }}"> 
                    </div>
                </div>
            </li>
            <li><h5>- <a href="">Website blocker application.</a></h5></li>
            <li><h5>- <a href="">A web mapping application.</a></h5></li>

        </ul>
        <div id="others">
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
@endsection