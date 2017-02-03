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
        var p = "<p></p>";
        var Bt = "<button id='B" + num +"'>" + num + "</button>" ;
        var X = "<button id='x" + num + "'> X </button>" ;
        $("div").append(p,Bt,X);
       // it is important to create buttons with different id
        $("button#B" + num ).click( CreateButtons );
        $("button#x" + num ).click( DeleteButtons );
        
        num = num+1;
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
