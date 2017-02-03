<html>

   <head>
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
            $("#driver").click(function(event){
               $('#stage').load('result.html');
            });
         });
      </script>
   </head>
	
   <body>
	
      <p>Click on the button to load result.html file −</p>
		
      <div id = "stage" style = "background-color:#e5eecc;">
         STAGE
      </div>
		
      <input type = "button" id = "driver" value = "Load Data" />
		
   </body>
	
</html>