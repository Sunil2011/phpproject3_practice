<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
var num=1;
function CreateButtons() {
   var p = "<p></p>";
   
   var bt = "<button  >num  </button>";
   num = num+1;
   var bt2 = "<button id='x'>X</button>";
  
    $("body").append(p,bt,bt2);  // Append 
}

$(document).ready(function(){ //uncomplete 
    $(" ").click(function(){
        $(this).hide();
    });
});

</script>
</head>
<body>

<p>Click on Button.. </p>
<button onclick="CreateButtons()">Append text</button>

</body>
</html>

