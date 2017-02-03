<!DOCTYPE html>
<html>
<head>
    <title> Drag and Drop..1 </title>
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
       
        function msdn(event){
            
            
            var x = $("div#e1").position().left ;
            var y = $("div#e1").position().top ;
            
            var mX = event.pageX ;
            var mY = event.pageY ;
           
          
          
            function msmv(event){
                
               $("div#e1").css({
                   left: x + event.pageX - mX + "px",
                   top : y + event.pageY -mY + "px" 
               });
           
           };
           
           
           function msup(){
                
               //$("div#e1").unbind();
               $(document).off("mousemove");
               $(document).off("mouseup");
               
           };
           
  
          
           // $("div#e1").on("mousemove",msmv );
           $(document).on("mousemove",msmv );
             
          
            //$("div#e1").on("mouseup",msup ); 
            /* in above case if move pointer faster then on mouse remaining clik down
             * pointer may come out of div#e1 so mouseup event will not act and again
             * when pinter enter to this element it act as "div#e2".mousedown so it  
             * drags the (div#e1) element. */
            
             $(document).on("mouseup",msup );
           
        };
        
        $("div#e1").on("mousedown", msdn );
        
       /* $("div#e1").on("mouseup", function(){
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

