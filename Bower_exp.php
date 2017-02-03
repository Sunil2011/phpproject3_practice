<!DOCTYPE html>
<html>
<head>
    <title> Bower example </title>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script>
    
      $(document).ready(function(){
        $("button#bt").click( CreateButtons );
    });
    
    var num=1;
    function CreateButtons() {
        
        var btn = document.createElement("button"); 
        var t = document.createTextNode(num);
        btn.appendChild(t);
        num=num+1;
        $(btn).click( CreateButtons );
        
        var p = "<p></p>";
        var bt = "<button id='x'> X </button>";
        
        $("div").append( p, btn , bt);
    
       
       $("button#x").click( DeleteButtons );
        
    }
    

function DeleteButtons(){
        $(this).prev().remove();
        $(this).remove();
   // $(this.previousSibling).hide();
  
}

</script>
</head>
<body>

<button id="bt">Append Buttons</button>
<div></div>
</body>
</html>
