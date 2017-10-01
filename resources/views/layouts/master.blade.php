<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106793844-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106793844-1');
</script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="adLK6eRjRbL7vzgRzjh1QPy1RwDcfGCC6WNwjbmOToU" />
        <title>RunorAdjekpiyede.me</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!--  <link rel="stylesheet" href="public/css/style.css"> -->
        <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/my-slider.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
        <script src="{{ asset('js/ism-2.2.min.js') }}"></script>
        <script src="{{ asset('js/dmStyle.js') }}"></script>
        <script src="{{ asset('js/script1.js') }}"></script>
        <script src="tinymce/js/tinymce/tinymce.min.j"></script>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
 <!--   <script src="http://dynamicdrive.com/dynamicindex16/autosaveform.js"></script>  -->
    <script src="https://use.fontawesome.com/fa2b05ef33.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            file_browser_callback_types: 'file image media',
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste imagetools textcolor responsivefilemanager"
            ],
            imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
            image_caption: true,
            image_advtab: true,
            image_title: true,
            media_live_embeds: true,
            image_list: [{
                    title: 'My image 1',
                    value: 'http://www.tinymce.com/my1.gif'
                },
                {
                    title: 'My image 2',
                    value: 'http://www.moxiecode.com/my2.gif'
                }
            ]
        });

    </script>  
        @include('../partials/dynamic')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--lightbox-->
       @include('../partials/lightbox') 
        <!--lightbox-->
    </head>
    <body>
        @include('../partials/new_header') 
		@if($flash = session('message'))
			<div class="alert alert-success" role="alert">
				{{$flash}}
			</div>
		@endif
        @yield('content')
         @include('../partials/footer')

         <!--lightbox-->
        @include('../partials/body_close')
         <!--lightbox-->
       
    </body>
</html>
