<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

var num=1;
//function CreateButtons() {
//   var p = "<p></p>";
//   
//   var bt = "<button > num  </button>";
//   num = num+1;
//   var bt2 = "<button id='x'>X</button>";
  //
//    $("body").append(p,bt,bt2);  // Append 
//}

$(document).ready(function(){
    $("button#x").click(function(){
        $(this).hide();
    });
});

$(document).ready(function(){
    $("button").click(function(i){
        var p = "<p></p>";
    
   var bt = "<button  > i</button>";
  // num = num+1;
  i=i+1;
   var bt2 = "<button id='x'>X</button>";
  
    $("body").append(p,bt,bt2); 
    });
});

</script>
</head>
<body>

<p>Click on Button </p>
<button >Append text</button>
<button id="x">button id=x</button>

</body>
</html>

