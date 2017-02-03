<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn1").click(function(){
        $("#div1").remove();
    });
    
    $("#btn2").click(function(){
        $("#div2").empty();
    });
    
});
</script>
</head>
<body>

<div id="div1" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">

This is some text in the div.
<p>This is a paragraph in the div.</p>
<p>This is another paragraph in the div.</p>

</div>
<br>

<button id="btn1">Remove div element</button>

<p> </p>
<p> </p>
<div id="div2" style="height:100px;width:300px;border:1px solid black;background-color:lightgreen;">

This is some text in the div.
<p>This is a paragraph in the div.</p>
<p>This is another paragraph in the div.</p>

</div>
<br>

<button id="btn2">Empty div element</button>

</body>
</html>

