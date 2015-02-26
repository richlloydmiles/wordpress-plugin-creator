<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel=stylesheet href="lib/code-mirror/lib/codemirror.css">
<script src="lib/code-mirror/lib/codemirror.js"></script>
<script src="lib/code-mirror/lib/jquery.min.js"></script>
<script src="lib/code-mirror/mode/xml/xml.js"></script>
<script src="lib/code-mirror/mode/javascript/javascript.js"></script>
<script src="lib/code-mirror/mode/css/css.js"></script>
<script src="lib/code-mirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="lib/code-mirror/addon/edit/matchbrackets.js"></script>
<style>

body {
    font-family: arial,sans-serif;
}
    .button {
        border: 2px tomato dotted;
        padding: 5px 10px;
        text-decoration: none;
        line-height: 2;
    }

    .button:hover {
        background:#efefef;
    }
</style>
</head>
<body>
<div>
<a href class="button" id="save" class="btn btn-sm">Save</a>
</div>
<div  id="editor"></div>


<script>
  var myCodeMirror = CodeMirror(document.getElementById('editor'), {
    mode: "htmlmixed",
  lineNumbers: true
});
  // myCodeMirror.setValue('This is code mirror');
  


jQuery(document).ready(function($) {
    $('#save').click(function(event) {
        /* Act on the event */
        event.preventDefault();
       $.post('ajax.php', { content:myCodeMirror.getValue()}, function(data, textStatus, xhr) {
           /*optional stuff to do after success */
           jQuery('#app').html(data);
       });
    });
});
</script>

<div  id="app"></div>
</body>
</html>

