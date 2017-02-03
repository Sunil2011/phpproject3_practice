<!DOCTYPE html>
<html>
<head>
    <title> Drag and drop </title>
    <style>
        div.b1{
            width:100px;
            height:100px;
            background-color:blue;
            border:3px;
            cursor:move;
            top:50px;
            position:absolute;
            left:50px
        }
        
        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
    
    $(document).ready(  function(){
        $("div#e1").on("mousedown",function(event){
            var x = $("div#e1").position().left ;
            var y = $("div#e1").position().top ;
           // var x = parseInt(window.getComputedStyle(this).left);
           // var y = parseInt(window.getComputedStyle(this).top);
            
            var mX = event.pageX ;
            var mY = event.pageY ;
           
          
          
            $("div#e1").on("mousemove",function(event){
               $("div#e1").css({
                   left: x + event.pageX - mX + "px",
                   top : y + event.pageY -mY + "px" 
               });
           });
           
           
           $("div#e1").on("mouseup",function(){
               //$("div#e1").unbind();
               $("div#e1").off("mousemove");
               $("div#e1").off("mouseup");
    
           });
           
        });
        
       /*  $("div#e1").on("mouseup",function(){
               //$("div#e1").unbind();
               $("div#e1").off("mousemove");
               $("div#e1").off("mouseup");
    
           }); */
           
    });
    
    
    
    </script>
</head>
<body>
    
    <div class="b1" id="e1"  > </div>
    
</body>
</html>



