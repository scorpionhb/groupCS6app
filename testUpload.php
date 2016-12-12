<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 12.12.2016 г.
 * Time: 19:56
 */

include(dbConnect.php);
$title = $_POST["title"];
$info = $_POST["info"];

$sql = "INSERT INTO news(content,title) VALUES ('$info', '$title')";

$result = $db->query($sql);

?>