<?php
$db =  NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net','b20897870d42e6','f2fdd194','cs6app_db');
$type = $_POST["type"];
$name = $_POST["name"];
$address = $_POST["address"];
$desc = $_POST["description"];
$history = $_POST["history"];
$geological= $_POST["geological"];
$image = $_POST["image"];
$lat = $_POST["latitude"];
$lon = $_POST["longitude"];

$sql = "INSERT INTO locations(type,name,address,description,history,geological,imgURL,latitude,longitude) VALUES('$type','$name','$address','$desc','$history','$geological','$image','$lat','$lon')";

if(mysqli_query($db, $sql)){
}
else{
    "Error: " . $sql . "<br>" . mysqli_errno($db);
}
header("location:mapPage.php");
?>