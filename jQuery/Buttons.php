<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
var num=1;
function CreateButtons() {
    var btn1 = document.createElement("button");
    var t = document.createTextNode(num) ;
    btn1.appendChild(t);
    num = num+1;
    
        //var btn2 = "<button > X </button>"; 
    var btn2 = document.createElement("button");
    var t2 = document.createTextNode("X");
    btn2.appendChild(t2);
    
        //var txt3 = document.createElement("p");
        var txt3 = "<p></p>";
        $("body").append(txt3); 
     
    $(btn1).click( CreateButtons );
    $(btn2).click( DeleteButtons );
    $("body").append(btn1,btn2);
   
   
}

function DeleteButtons(){
   $(this).hide();
   $(this.previousSibling).hide();
}

/*$(document).ready(function(){
    $(" ").click(function(){
        $(this).hide();
    });
});
*/
</script>
</head>
<body>

<p>Click on Button.. </p>
<button onclick="CreateButtons()">Append Buttons</button>

</body>
</html>

