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
$warning = null;



if(empty($type) OR empty($name) OR empty($address) OR empty($desc) OR empty($lat) OR empty($lon)){
    $warning = "Please fill in all the required fields!";
}
else if(strlen($name > 50)){
    $warning = "Name cannot be longer than 50 characters.";
}
else if(strlen($address) > 100){
    $warning = "Address cannot be longer than 100 characters.";
}
else{
    $sql = "INSERT INTO locations(type,name,address,description,history,geological,imgURL,latitude,longitude) VALUES('$type','$name','$address','$desc','$history','$geological','$image','$lat','$lon')";
    $db->query($sql);
    if(mysql_query($db, $sql)){
    }
    else{
        echo "error";
    }
    header("location:mapPage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Map Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="mapStyle.css">

</head>
<body>
    <?php

    echo  $warning;
    $warning= null;
    ?>
    <form action="mapForm.php" method="post">
        <div class="form-group">
            <label for="inputType">Location Type*</label>
            <input type="text" class="form-control" id="inputType" name="type">
        </div>
        <div class="form-group">
            <label for="inputName">Location Name*</label>
            <input type="text" class="form-control" id="inputName" name="name">
        </div>
        <div class="form-group">
            <label for="inputAddress">Location Address*</label>
            <input type="text" class="form-control" id="inputAddress" name="address">
        </div>
        <div class="form-group">
            <label for="inputDescription">Description*</label>
            <textarea class="form-control" id="inputDescription" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="inputHistory">History</label>
            <textarea class="form-control" id="inputHistory" rows="3" name="history"></textarea>
        </div>
        <div class="form-group">
            <label for="inputGeological">Geological Data</label>
            <textarea class="form-control" id="inputGeological" rows="3" name="geological"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <textarea class="form-control" id="image" rows="3" name="image"></textarea>
        </div>
        <div class="form-group">
            <label for="inputLatitude">Latitude*</label>
            <input type="text" class="form-control" id="inputLatitude" name="latitude">
        </div>
        <div class="form-group">
            <label for="inputLongitude">Longitude*</label>
            <input type="text" class="form-control" id="inputLongitude" name="longitude">
        </div>
        <button type="submit" class="btn btn-primary" onclick>Submit</button>
    </form>
</body>
</html>
