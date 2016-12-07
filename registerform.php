<?php




$output = null;

if(isset($_POST['submit'])){

    $mysqli = mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net','b20897870d42e6','f2fdd194','cs6app_db');

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string ($_POST['password']);
    $rpassword = $mysqli->real_escape_string($_POST['rpassword']);
    $email =    $mysqli->real_escape_string ($_POST['email']);
    $phone = $mysqli->real_escape_string($_POST['tel']);
    $typeOfUser =    $mysqli->real_escape_string ($_POST['userChooser']);

    $query = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
    if($query->num_rows != 0){
        $output = "That User Name already taken ";
    }else{
        //Encrypt the password
        $password = md5($password);
        //Insert the record
        $insert = $mysqli->query("INSERT INTO users(username,password,email,tel_number,type_of_user) VALUES ('$username','$password','$email','$phone','$typeOfUser')");
        if($insert != true){
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

    <form action="registerform.php"  method="post">


        <div class="container">
            <label class="username"><b>Enter Username:</b></label>
            <input  type="text" placeholder="enter username:" name="username" required>

            <label class="password"><b>Enter Password:</b></label>
            <input id="password1" type="password" placeholder="enter password:" name="password" required>

            <label class="repeatPassword"><b>Repeat Password:</b></label>
            <input id="password2" type="password" placeholder="repeat password:" name="rpassword" required>

            <label class="email"><b>Email:</b></label>
            <input  type="email" placeholder="email:" name="email" required>

            <label class="telephone"><b>Phone Number:</b></label>
            <input  type="tel"  placeholder="telephone:" name="tel">

            <label class="chooseUser"><b>Type of user:</b></label>

            <select class="dropDownForm" name="userChooser">
                <option value= 1>Choose:</option>
                <option value= 2>Saab</option>
                <option value= 3>Fiat</option>
                <option value= 4>Audi</option>
            </select>

            <input class="checkboxNKPAG" type="checkbox" checked="checked"> Choose if you want to be NKPAG
            <label class="adminValidation"><b>*Requires validation from site admin</b></label>
            <br><input class="checkboxTerms" type="checkbox" checked="checked"> I agree with terms and conditions</br>

            <input class="registerbtn" type="submit" value="Register">
            <button class="cancelbtn" type="button" >Cancel</button>
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


</html>
