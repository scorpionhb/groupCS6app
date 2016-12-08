<?php
include("dbConnect.php.php");
$dom = new DOMDOcument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

$query = "SELECT * FROM markers";
$result = $db->query($query);
if(!$result){
    die('Nothing in result: ');
}
header("Content-type: text/xml");
while($row = $result->fetch_array()){
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("lat",$row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
}
$result->close();
$db->close();
echo $dom->saveXML();
?>
