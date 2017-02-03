
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$servername = "localhost";
$username = "root";
$password = "welcome";
$dbname = "db01";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

#echo "Connected successfully ";

//$result = $conn->query("SELECT Id, firstName, lastName FROM myGuest");

$sql = "SELECT Id, firstName, lastName FROM myGuest";
$result = $conn->query($sql);

//var_dump($result); 

//$rs = $result->fetch_assoc();
//var_dump($rs) ;
//echo 'ajajk';
//exit;


$outp = "";
while($rs = $result->fetch_assoc()) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"ID":"'  . $rs["Id"] . '",';
    $outp .= '"fName":"'   . $rs["firstName"]  . '",';
    $outp .= '"lName":"'  . $rs["lastName"]  . '"}'; 
}

$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);


?>
