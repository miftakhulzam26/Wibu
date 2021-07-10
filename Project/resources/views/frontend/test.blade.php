<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="{{asset('froala/css/froala_editor.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/froala_style.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/code_view.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/colors.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/emoticons.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/image_manager.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/image.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/line_breaker.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/table.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/char_counter.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/video.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/fullscreen.css')}}">
  <link rel="stylesheet" href="{{asset('froala/css/plugins/file.css')}}">

  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  </style>
</head>

<body>
  <div id="editor">
    <div id='edit' style="margin-top: 30px;">
      <h1>TAB Key</h1>
      <p>Froala WYSIWYG HTML Editor does not interfere with the natural TAB key behavior allowing you to easily navigate
        through pages. You can also change this behaviour and use the TAB key to indent a specified number of spaces at
        a time. Use the <a href="https://www.froala.com/wysiwyg-editor/docs/options#tabSpaces" target="_blank"
          title="tabSpaces option">tabSpaces</a> option to specify the number of spaces.</p>
    </div>
  </div>
  <script type="text/javascript" src="{{asset('froala/js/froala_editor.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/align.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/code_beautifier.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/code_view.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/colors.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/draggable.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/emoticons.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/font_size.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/font_family.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/image.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/file.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/image_manager.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/line_breaker.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/link.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/lists.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/paragraph_format.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/paragraph_style.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/table.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/url.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/entities.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala//plugins/char_counter.min.js')}}js"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/inline_style.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/save.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/plugins/fullscreen.min.js')}}"></script>

  <script>
    (function () {
      new FroalaEditor("#edit", {
        tabSpaces: 4
      })
    })()
  </script>
</body>

</html>
