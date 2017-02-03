<html>

   <head>
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
            $("#driver").click(function(event){
				
               $.post( 
                  "post.php",
                  { name: "Zara" },
                  function(data) {
                     $('#stage').html(data);
                  }
               );
					
            });
				
         });
      </script>
   </head>
	
   <body>
	
      <p>Click on the button to load result.html file −</p>
		
      <div id = "stage" style = "background-color:#c3c3c3">
         STAGE
      </div>
		
      <input type = "button" id = "driver" value = "Load Data" />
		
   </body>
	
</html>