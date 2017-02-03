<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn3").click(function(){
        $("div").remove();
        $("#btn3").remove();
    });
    $("#btn4").click(function(){
     $("#btn1").remove();
     $("#btn4").remove();
   });
});
</script>
</head>
<body>

<p><input type="button" id="btn1" value="btn"></p>
<div id="div1" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">

This is some text in the div.
<p>This is a paragraph in the div.</p>
<p>This is another paragraph in the div.</p>

</div>
<br>

<button id="btn3">Remove div element</button>
<button id="btn4">Remove btn </button>

</body>
</html>
