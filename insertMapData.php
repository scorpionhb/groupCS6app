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
$imageCheck = substr($image, -3);

if(empty($type) OR empty($name) OR empty($address) OR empty($desc) OR empty($lat) OR empty($lon)){
    echo("Please fill in all the required fields!");
}
else if($type != "Viewpoint" OR $type != "Club" OR $type != "HistoricalLandmark" OR $type != "Route"){
    echo("Please input any of the following types(Viewpoint,Club,HistoricalLandmark,Route");
}
else if(strlen($name > 50)){
    echo("Name cannot be longer than 50 characters");
}
else if(strlen($address) > 100){
    echo("Address cannot be longer than 100 characters");
}
else if($imageCheck != jpg OR $imageCheck != "png"){
    echo("Invalid url format");
}
else{
    $sql = "INSERT INTO locations(type,name,address,description,history,geological,imgURL,latitude,longitude) VALUES('$type','$name','$address','$desc','$history','$geological','$image','$lat','$lon')";
    header("location:mapPage.php");
}
?>