<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="newcss1.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
body {
    background-color:lightgreen;
}

@media only screen and (max-width: 900px) {
    body {
        background-color:lightgrey;
    }
}
@media only screen and (orientation: landscape){
    .xyz{
        font-style: oblique;
    }
} 

</style>
</head>
<body>
    <div>
        <p>Resize the browser window. When the width of this document is less 
            than 500 pixels, the background-color is "light-blue", otherwise it 
            is "light-grey".</p>
    </div>
    <div class="xyz">
        <p> <b>this is a class .... !!! </b> </p>
        <p> <b> these are  contents of class xyz .... !!! </b> </p>
    </div>
    <div class="box">
        <p>this style is imported in link ... !!</p>
        <p> this style is defined in link  "href" part ... !! </p>
    </div>
</body>
</html>

