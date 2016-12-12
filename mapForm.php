<!DOCTYPE html>
<html>
<head>
    <title>Map Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="mapStyle.css">

</head>
<body>
    <form action="insertMapData.php" method="post">
        <div class="form-group">
            <label for="inputType">Location Type</label>
            <input type="text" class="form-control" id="inputType" name="type">
        </div>
        <div class="form-group">
            <label for="inputName">Location Name</label>
            <input type="text" class="form-control" id="inputName" name="name">
        </div>
        <div class="form-group">
            <label for="inputAddress">Location Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address">
        </div>
        <div class="form-group">
            <label for="inputDescription">Descriptiona</label>
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
            <label for="inputLatitude">Latitude</label>
            <input type="text" class="form-control" id="inputLatitude" name="latitude">
        </div>
        <div class="form-group">
            <label for="inputLongitude">Longitude</label>
            <input type="text" class="form-control" id="inputLongitude" name="longitude">
        </div>
        <button type="submit" class="btn btn-primary" onclick>Submit</button>
    </form>
</body>
</html>
