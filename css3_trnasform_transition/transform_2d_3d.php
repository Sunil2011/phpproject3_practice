<!DOCTYPE html>
<html>
<head>
    <title> 2D and 3D rotate  </title>
<style> 
div {
    width: 300px;
    height: 100px;
    background: red;
    margin: 20px;
    -webkit-transition:  height 2s, -webkit-transform 2s; /* Safari */
    transition:  height 2s, transform 2s;
}

div#a:hover {
    width: 300px;
    height: 300px;
    -webkit-transform: rotate(180deg); /* Safari */
    transform: rotateZ(400deg);
}


div#b:hover {
    width: 300px;
    height: 300px;
    -webkit-transform: rotate(180deg); /* Safari */
    transform: rotate(180deg);
}
</style>

</head>
<body>
    
    <div id="a">
         3D rotate  along Z-axis (in Y-X plane) 
    </div>

     <div id="b">
         2D rotate (in X-Y plane) . 
     </div>
    
</body>
</html>

