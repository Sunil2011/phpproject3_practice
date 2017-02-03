<!DOCTYPE html>
<html>
<head>
    <title> translate(), rotate(),scale() </title>
<style> 
div {
    width: 300px;
    height: 100px;
    background-color: yellow;
    border: 1px solid black;
    margin: 10px;
  // -ms-transform: translate(50px,100px); /* IE 9 */
   // -webkit-transform: translate(50px,100px); /* Safari */
   // transform: translate(50px,100px); /* Standard syntax */
    transition: transform 2s;
    -webkit-transition: -webkit-transform 2s;
    -ms-transition: -ms-transform 2s;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(document).ready( function(){
      $("#bt1").click(function(){
          $("#dv").css({
              "-ms-transform": "rotateX(180deg)",
              "-webkit-transform": "rotateX(180deg)",
              "transform": "rotateX(180deg)"
          });
      });
      
       $("#bt2").click(function(){
          $("#dv2").css({
              "-ms-transform": "rotateY(180deg)",
              "-webkit-transform": "rotateY(180deg)",
              "transform": "rotateY(180deg)"
          });
      });
      
       $("#bt3").click(function(){
          $("#dv3").css({
              "-ms-transform": "rotateZ(180deg)",
              "-webkit-transform": "rotateZ(180deg)",
              "transform": "rotateZ(180deg)"
          });
      });
      
    });
</script>
</head>
<body>
    <button id="bt1"> rotateX() </button>
    <button id="bt2"> rotateY() </button>
    <button id="bt3"> rotateZ() </button>
    <div >
        <p>rotateX(),rotateY(),rotateZ() methods rotates  an element along X,Y,Z-axis respectively  . </p>
    </div>
    <div id="dv">
        <p>rotateX() method rotates  an element along X-axis . </p>
    </div>
    <div id="dv2">
        <p>rotateY() method rotates  an element along Y-axis . </p>
    </div>
    <div id="dv3">
        <p> rotateZ() method rotate an element along Z-axis .</p>
    </div>

</body>
</html>
