<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#bt1").click(function(){
        $("#div1").addClass("important blue");
    });
    
    $("#bt2").click(function(){
        $("#div1").removeClass("blue");
    });
    
});
</script>
<style>
.important {
    font-weight: bold;
    font-size: xx-large;
}

.blue {
    color: blue;
}
</style>
</head>
<body>

<div id="div1">This is some text.</div>
<div id="div2">This is some text.</div>
<br>

<button id="bt1">Add classes to first div element</button>

<button id="bt2">Remove classes to first div element</button>


</body>
</html>
