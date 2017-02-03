<!DOCTYPE html>
<html>
<head>
    <title> Drag and Drop..3 </title>
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
    
    $(document).ready( function(){
       var clk = false;
       var x;
       var y;
       var mX;
       var mY;
       
        function msdn(event){
            clk = true;
             x = $("div#e1").position().left ;
             y = $("div#e1").position().top ;
            
             mX = event.pageX ;
             mY = event.pageY ;
           
         
           };
           
          function msmv(event){
                if( clk === false ) return ;
               $("div#e1").css({
                   left: x + event.pageX - mX + "px",
                   top : y + event.pageY -mY + "px" 
               });
           
           };
           
           
           function msup(e){
                clk = false;
              // $("div#e1").off("mousemove");
              // $("div#e1").off("mouseup");
               e.stopPropagation();   
           };
           
            
            $("div#e1").on("mousedown", msdn );
          
            $(document).on("mousemove", msmv );
             
          
            $(document).on("mouseup",msup );
        
           
           
    });
    
    
    
    </script>
</head>
<body>
    
    <div class="b1" id="e1"  > </div>
    
</body>
</html>

