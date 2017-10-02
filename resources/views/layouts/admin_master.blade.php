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
        <title>Pqtech</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!--  <link rel="stylesheet" href="public/css/style.css"> -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/my-slider.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
        <script src="{{ asset('js/ism-2.2.min.js') }}"></script>
        <script src="{{ asset('js/dmStyle.js') }}"></script>
        <script src="{{ asset('js/script1.js') }}"></script>
        <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
		<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=zf9z1rq9bwvkedrhxres2s2fx4k71u9i9a9l6chh39jmfgtk"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
    <script src="http://dynamicdrive.com/dynamicindex16/autosaveform.js"></script>
    <script src="https://use.fontawesome.com/fa2b05ef33.js"></script>
     @include('../partials/tinymce')
   
        @include('../partials/dynamic')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('../partials/admin_header')
		@if($flash = session('message'))
			<div class="alert alert-success" role="alert">
				{{$flash}}
			</div>
		@endif
        @yield('content')
         @include('../partials/footer')
       <script>
    $(document).ready(function () {
       
      $('.form_delete_post').submit(function(e){
            e.preventDefault();
            delete_post(this);
        });
            function delete_post(theform) {
                swal({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#CF472A',
                  cancelButtonColor: '#2499D7',
                  confirmButtonText: 'Yes, delete this post!'
                }).then(function () {                    
                  swal(
                    'Deleted!',
                    'The post has been deleted.',
                    'success'
                  ),
                  $(theform).unbind('submit').submit()
                })
            }
        });
       </script>
    </body>
</html>
