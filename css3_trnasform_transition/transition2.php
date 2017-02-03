<!DOCTYPE html>
<html>
<head>
    <title> transition2 </title>
<style> 
div {
    width: 100px;
    height: 100px;
    background: red;
    -webkit-transition: width 2s, height 2s, -webkit-transform 2s; /* Safari */
    transition: width 2s, height 2s, transform 2s;
}

div#a:hover {
    width: 300px;
    height: 300px;
    -webkit-transform: rotate(180deg); /* Safari */
    transform: rotateZ(180deg);
}
</style>
</head>
<body>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div id = "a"> ddd</div>

<p>Hover over the div element above, to see the transition effect.</p>

</body>
</html>