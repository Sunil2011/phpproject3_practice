<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn1").click(function(){
        alert("Text: " + $("#test").text());
    });
    $("#btn2").click(function(){
        alert("HTML: " + $("#test").html());
    });
    $("#btn3").click(function(){
       alert("Value: "+ $("#test2").val() ); 
    });
    $("#btn4").click(function(){
        alert("href: "+ $("#w3s").attr("href") );
    });
});
</script>
</head>
<body>

<p id="test">This is some <b>bold</b> text in a paragraph.</p>
<p> Name: <input type="text" id="test2" value="Mickey Mouse"> </p>
<p><a href="http://www.w3schools.com" id="w3s">W3Schools.com</a></p>

<button id="btn1">Show Text</button>
<button id="btn2">Show HTML</button>
<button id="btn3">Show value </button>
<button id="btn4"> Show href </button>
</body>
</html>

