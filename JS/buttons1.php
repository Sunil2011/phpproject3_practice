<!DOCTYPE html>
<html>
<head>

<script src="myscripts.js"></script>

<script  type="text/javascript">

var parai = document.createElement("p");
document.body.appendChild(parai);

var x = document.getElementById("myButton");
 x.addEventListener("click", myFunction );
 


var num = 1 ;
function myFunction() {
   
    var btn = document.createElement("button");
    var t = document.createTextNode(num);
    btn.appendChild(t);
   
    btn.onclick = myFunction ;
    document.body.appendChild(btn);
    num += 1;
    
    var btn2 = document.createElement("button");
    var t2 = document.createTextNode("x");
    btn2.appendChild(t2);
   
    btn2.onclick = removeElmt  ;
    document.body.appendChild(btn2);
    
    var para = document.createElement("p");
    document.body.appendChild(para);
    
}

function removeElmt(){
    
    document.body.removeChild(this.previousSibling);
    document.body.removeChild(this);
}

</script>
</head>
<body>

    <button id="myButton" >Try This !</button>

</body>
</html>

