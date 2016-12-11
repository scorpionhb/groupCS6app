<?php
include("dbConnect.php");
$dom = new DOMDOcument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

$query = "SELECT * FROM locations WHERE type = 'Club'";
$result = $db->query($query);
if(!$result){
    die('Nothing in result: ');
}
header("Content-type: text/xml");
while($row = $result->fetch_array()){
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("type",$row['type']);
    $newnode->setAttribute("name", $row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("description", $row['description']);
    $newnode->setAttribute("imgURL", $row['imgURL']);
    $newnode->setAttribute("latitude", $row['latitude']);
    $newnode->setAttribute("longitude", $row['longitude']);
}
$result->close();
$db->close();
echo $dom->saveXML();
?>
