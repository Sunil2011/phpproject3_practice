<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    
    $(document).ready(function(){
        $("button#bt").click( CreateButtons );
    });
    
var num=1;
function CreateButtons() {
       // var para = document.createElement("p");
        var para ="<p></p>";
        //$("body").append(para);
        
        var btn = document.createElement("button"); 
        var t = document.createTextNode(num);
        btn.appendChild(t);
        num=num+1;
        $(btn).click( CreateButtons );
    
        var btn2 = document.createElement("button");
        var t2 = document.createTextNode("x");
        btn2.appendChild(t2);
       $(btn2).click( DeleteButtons );
       
       
        $("body").append(para,btn, btn2); 
        
   
   
}

function DeleteButtons(){
        $(this).prev().remove();
        $(this).remove();
   // $(this.previousSibling).hide();
  
}

</script>
</head>
<body>

<p>Click on Button.. </p>
<button id="bt">Append Buttons</button>

</body>
</html>

