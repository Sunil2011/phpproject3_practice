<!DOCTYPE html>
<html>
<head>
    <title> Transition </title>
<style> 
div {
    width: 100px;
    height: 100px;
    background: red;
    -webkit-transition: width 2s linear 1s; /* For Safari 3.1 to 6.0 */
    transition:height 3s, width 3s ;
    transition-delay : 1s;
    transition-timing-function: linear;
    
}

div:hover {
    width: 300px;
    height: 300px;
}
</style>
</head>
<body>


<p>Hover over the div element above, to see the transition effect.</p>
<p><b>Note:</b> The transition effect has a 1 second delay before starting.</p>


<div></div>

</body>
</html>
