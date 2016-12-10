<?php


$output = null;

if(isset($_POST['submit'])){
    //Connect to db
    $mysqli =  NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net','b20897870d42e6','f2fdd194','cs6app_db');

    $clubname = $mysqli->real_escape_string($_POST['clubname']);
    $clubgenre = $mysqli->real_escape_string ($_POST['clubgenre']);
    $description = $mysqli->real_escape_string($_POST['message']);
    $email =    $mysqli->real_escape_string ($_POST['email']);
    $telNumber =    $mysqli->real_escape_string ($_POST['tel']);
    $typeOfUser = $mysqli->real_escape_string ($_POST['userChooser']);


    $query = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
    if(empty($username) OR empty($password) OR empty($email) OR empty($rpassword) OR empty($telNumber) OR empty($typeOfUser)){
        $output = "Please fill in all fields.";
    }elseif($query->num_rows != 0){
        $output = "That User Name already taken!";
    }elseif($rpassword != $password){
        $output ="Your passwords does not match!";
    }else{
        //Encrypt the password
        $password = md5($password);
        //Insert the record
        $insert = $mysqli->query("INSERT INTO users(username,password,email,tel_number,type_of_user) VALUES ('$username','$password','$email','$telNumber','$typeOfUser')");
        $insert2 = $mysqli->query("INSERT INTO type_of_user(username) VALUES ('$username')");
        if($insert2 != true){
            $output = "There was a problem <br/>";
            $output .= $mysqli->error;
        }else{
            $output = "You have been registered!";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="registerJS.js"></script>
    <link rel="stylesheet" type="text/css" href="registerHtml.css">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-fixed-top navbar-absolute navbar-transparent big">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand" src="https://github.com/scorpionhb/groupCS6app/blob/testBranch/LOGO1.png?raw=true"/>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="action_page.php" onsubmit="return myFunction()" method="post">


        <div class="container">
            <label class="username"><b>Enter Club Name:</b></label>
            <input  type="text" placeholder="enter club name:" name="clubname" required>

            <label class="password"><b>Club Genre:</b></label>
            <input id="password1" type="text" placeholder="enter password:" name="clubgenre" required>

            <label class="repeatPassword"><b>Club Description</b></label>
            <textarea name="message" rows="20" cols="45" required></textarea>

            <label class="email"><b>Email:</b></label>
            <input  type="email" placeholder="email:" name="email" required>

            <label class="telephone"><b>Phone Number:</b></label>
            <input  type="tel"  placeholder="telephone:" name="tel">

            <br><input class="checkboxTerms" type="checkbox" checked="checked"> I agree with terms and conditions</br>

            <input class="registerbtn" type="submit" value="Register">
            <button class="cancelbtn" type="button" class="cancelbtn">Cancel</button>
        </div>
    </form>

    <?PHP
    echo $output;
    ?>


</div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>

