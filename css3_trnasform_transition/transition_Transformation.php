<!DOCTYPE html>
<html>
<head>
    <title> Transform + Transition </title>
<style> 
div {
    width: 100px;
    height: 100px;
    background: red;
    -webkit-transition: background-color 2s, width 2s, height 2s, -webkit-transform 2s; /* Safari */
    transition: background-color 2s, width 2s, height 2s, transform 2s;
}

div:hover {
    background-color: blue;
    width: 300px;
    height: 300px;
    -webkit-transform: rotate(180deg); /* Safari */
    transform: rotate(180deg);
}
</style>
</head>
<body>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div></div>

<p>Hover over the div element above, to see the transition effect.</p>

</body>
</html>
