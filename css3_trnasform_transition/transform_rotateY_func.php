<!DOCTYPE html>
<html>
<head>
    <title> translate(), rotate(),scale() </title>
<style> 
div {
    width: 300px;
    height: 100px;
    background-color: #0000ff;
    border: 1px solid black;
    margin: 20px;
 
    transition: transform 2s;
    -webkit-transition: -webkit-transform 2s;
    -ms-transition: -ms-transform 2s;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(document).ready( function(){
      $("#bt").click( rtY );  
    });
    
    var n = 0 ;
    function rtY(){
        // var n = 0 ;
          $("div").css({
              "-ms-transform": "rotateY(120" + n +  "deg)",
              "-webkit-transform": "rotateY(120" + n + "deg)",
              "transform": "rotateY(120" + n + "deg)"
          });
         if(n < 240){
          n= n+120 ;
      } else(){
          n = n-240 ;
      }
      //  n=n+120;
    }
     
    /*
    function rtY(){
    
          $("div").css({
              "-ms-transform": "rotateY(120deg)",
              "-webkit-transform": "rotateY(120deg)",
              "transform": "rotateY(120deg)"
          });
    }
    */
</script>
</head>
<body>
    
    <button id="bt"> rotateY() </button>
    
    <div>
        <p> rotateY() method rotates  an element along Y-axis . </p>
    </div>
    

</body>
</html>

