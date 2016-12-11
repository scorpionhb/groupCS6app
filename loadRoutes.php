<?php
$db =  NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net','b20897870d42e6','f2fdd194','cs6app_db');
$dom = new DOMDOcument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

$query = "SELECT * FROM locations WHERE type = 'Route'";
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
    $newnode->setAttribute("history", $row['history']);
    $newnode->setAttribute("geological", $row['geological']);
    $newnode->setAttribute("latitude", $row['latitude']);
    $newnode->setAttribute("longitude", $row['longitude']);
}
$result->close();
$db->close();
echo $dom->saveXML();
?>
