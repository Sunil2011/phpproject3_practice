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
        div.b2{
            width:100px;
            height:100px;
            background-color:red;
            border:3px;
            cursor:move;
            top:250px;
            position:absolute;
            left:250px
        }
        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
   
   $(document).ready(  function(){
       function Drag(id){
           $("div#"+id).on("mousedown",function(event){
               var x = $("div#"+id).position().left ;
               var y = $("div#"+id).position().top ;
               // var x = parseInt(window.getComputedStyle(this).left);
                // var y = parseInt(window.getComputedStyle(this).top);
            
                var mX = event.pageX ;
                var mY = event.pageY ;
           
          
                $("div#"+id).on("mousemove",function(event){
                    $("div#"+id).css({
                        left: x + event.pageX - mX + "px",
                        top : y + event.pageY -mY + "px" 
                    });
                });
                
               $("div#"+id).on("mouseup",function(){
               //$("div#e1").unbind();
                    $("div#"+id).off("mousemove");
                     $("div#"+id).off("mouseup");
                 });
                 
             });
             
         }
         
       //$( Drag("e1") );
      // $( Drag("e2") );
        Drag("e1") ;
        Drag("e2");
    
    });
    
    
    
    </script>
</head>
<body>
    
    <div class="b1" id="e1"  > </div>
    <div class="b2" id="e2"  > </div>
    
</body>
</html>

