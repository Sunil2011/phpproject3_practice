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
   
  // -ms-transform: translate(50px,100px); /* IE 9 */
   // -webkit-transform: translate(50px,100px); /* Safari */
   // transform: translate(50px,100px); /* Standard syntax */
    
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(document).ready( function(){
      $("#bt1").click(function(){
          $("#dv").css({
              "-ms-transform": "translate(150px,200px)",
              "-webkit-transform": "translate(150px,200px)",
              "transform": "translate(150px,200px)"
          });
      });
      
       $("#bt2").click(function(){
          $("#dv").css({
              "-ms-transform": "rotate(50deg)",
              "-webkit-transform": "rotate(50deg)",
              "transform": "rotate(50deg)"
          });
      });
      
       $("#bt3").click(function(){
          $("#dv").css({
              "-ms-transform": "scale(2,1)",
              "-webkit-transform": "scale(2,1)",
              "transform": "scale(2,1)"
          });
      });
      
    });
</script>
</head>
<body>
    <button id="bt1"> move </button>
    <button id="bt2"> rotate </button>
    <button id="bt3"> scale </button>
<div id="dv">
<p>The translate() method moves an element from its current position. </p>

</div>

</body>
</html>
