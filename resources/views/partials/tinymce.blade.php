 <script>
        tinymce.init({
            selector: 'textarea',
           style_formats: [
            {title: 'Headers', items: [
              {title: 'Header 1', format: 'h1'},
              {title: 'Header 2', format: 'h2'},
              {title: 'Header 3', format: 'h3'},
              {title: 'Header 4', format: 'h4'},
              {title: 'Header 5', format: 'h5'},
              {title: 'Header 6', format: 'h6'}
            ]},
            {title: 'Classes', items: [
              {title: 'articleparagraph', inline: 'span', classes: 'article_description'},
              {title: 'remove classes', inline: 'span', classes: 'none'}
            ]},
            {title: 'CustomCss', items: [
              {title: 'Lineheight 35px', inline: 'span', styles: {lineHeight: '35px'}}
            ]},
            {title: 'Inline', items: [
              {title: 'Bold', icon: 'bold', format: 'bold'},
              {title: 'Italic', icon: 'italic', format: 'italic'},
              {title: 'Underline', icon: 'underline', format: 'underline'},
              {title: 'Strikethrough', icon: 'strikethrough', format: 'strikethrough'},
              {title: 'Superscript', icon: 'superscript', format: 'superscript'},
              {title: 'Subscript', icon: 'subscript', format: 'subscript'},
              {title: 'span', inline: 'span'},
              {title: 'Code', icon: 'code', format: 'code'}
            ]},
            {title: 'Blocks', items: [
              {title: 'Paragraph', format: 'p'},
              {title: 'Blockquote', format: 'blockquote'},
              {title: 'Div', format: 'div'},
              {title: 'Pre', format: 'pre'}
            ]},
            {title: 'Alignment', items: [
              {title: 'Left', icon: 'alignleft', format: 'alignleft'},
              {title: 'Center', icon: 'aligncenter', format: 'aligncenter'},
              {title: 'Right', icon: 'alignright', format: 'alignright'},
              {title: 'Justify', icon: 'alignjustify', format: 'alignjustify'}
            ]}
          ],
            file_browser_callback_types: 'file image media',
            plugins: [
                "advlist autoresize autosave autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste imagetools textcolor responsivefilemanager",
            ],

            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect fontselect quicklink",
               toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
               image_advtab: true ,
               
               external_filemanager_path:"/tinymce/js/tinymce/filemanager/",
               filemanager_title:"Responsive Filemanager" ,
               external_plugins: { "filemanager" : "/tinymce/js/tinymce/filemanager/plugin.min.js"},
            //   external_plugins: { "filemanager" : "tinymce/js/tinymce/filemanager/plugin.min.js"},
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
        $base_url="http://newpqtech.dev";
    </script>  