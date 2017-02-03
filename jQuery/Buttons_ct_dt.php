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
         
        $("div").append("<p></p>" + "<button id='B" + num +"'>" + num + "</button>" + "<button id='x'> X </button>");
       // it is important to create buttons with different id
        $("button#B" + num ).click( CreateButtons );
        $("button#x").click( DeleteButtons );
        
        num = num+1;
    }
    
    
//$("button#test").on("click", CreateButtons );


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
