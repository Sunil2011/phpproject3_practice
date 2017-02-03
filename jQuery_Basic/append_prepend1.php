<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn1").click(function(){
        $("p#ap").append(" <b>Appended text</b>.");
    });

    $("#btn2").click(function(){
        $("ol#ap").append("<li>Appended item</li>");
    });
    
    $("#btn3").click(function(){
        $("p#prp").prepend(" <b>Appended text</b>.");
    });

    $("#btn4").click(function(){
        $("ol#prp").prepend("<li>Appended item</li>");
    });
});
</script>
</head>
<body>

    <p id="ap">This is a paragraph.</p>
    <p id="ap">This is another paragraph.</p>

    <ol id="ap">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
    </ol>
    <button id="btn1">Append text</button>
    <button id="btn2">Append list items</button>
    
    
    <p id="prp"> This is a paragraph ...</p>
    <p id="prp"> This is another paragraph ....</p>
    
     <ol id="prp">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
    </ol>
    <button id="btn3">Prepend text</button>
    <button id="btn4">Prepend list items</button>
    



</body>
</html>


