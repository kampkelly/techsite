<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
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
        <script src="{{ asset('js/ism-2.2.min.js') }}"></script>
        <script src="{{ asset('js/dmStyle.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
        <script src="tinymce/js/tinymce/tinymce.min.j"></script>
		<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=zf9z1rq9bwvkedrhxres2s2fx4k71u9i9a9l6chh39jmfgtk"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
    <script src="http://dynamicdrive.com/dynamicindex16/autosaveform.js"></script>
    <script src="https://use.fontawesome.com/fa2b05ef33.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            file_browser_callback_types: 'file image media',
            plugins: [
                "advlist autoresize autosave autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste imagetools textcolor responsivefilemanager"
            ],

            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
               toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
               image_advtab: true ,
               
               external_filemanager_path:"public/tinymce/js/tinymce/plugins/filemanager/",
               filemanager_title:"Responsive Filemanager" ,
               external_plugins: { "filemanager" : "/public/tinymce/js/tinymce/plugins/filemanager/plugin.min.js"},
          //     external_plugins: { "filemanager" : "public/tinymce/js/tinymce/plugins/filemanager/plugin.min.js"},
			// external_plugins: {
			//'filemanager': 'https://cloud.tinymce.com/stable/plugins/filemanager/plugin.min.js'
		 // },
            autosave_interval: "10s",
            autosave_restore_when_empty: true,
            autosave_retention: "30m",
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
       
    </body>
</html>
