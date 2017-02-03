<head>
    <title> translate() </title>
<style> 
div {
    width: 300px;
    height: 100px;
    background-color: yellow;
    border: 1px solid black;
   // -ms-transform: translate(50px,100px); /* IE 9 */
   // -webkit-transform: translate(50px,100px); /* Safari */
   // transform: translate(50px,100px); /* Standard syntax */
}
div:hover{
    -ms-transform: translate(20px,10px); /* IE 9 */
    -webkit-transform: translate(20px,10px); /* Safari */
    transform: translate(20px,10px); /* Standard syntax */
}
</style>
</head>
<body>

<div>
The translate() method moves an element from its current position. This div element is moved 50 pixels to the right, and 100 pixels down from its current position.
</div>

</body>
</html>
