<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.12.2016 г.
 * Time: 17:02
 */

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
    <main method ="post">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
        <form action="createarticle" method="post">
            <input type="text" name="articleName" placeholder="Name of Article">
            <textarea name="articleText"></textarea>
            <input type="submit">
        </form>
    </main>
<?php
    $output = null;
include ("dbConnect.php");

if(isset($_POST['submit'])) {
    $mysqli = NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net', 'b20897870d42e6', 'f2fdd194', 'cs6app_db');

    $articleName = $mysqli->real_escape_string($_POST['articleName']);
    $articleText = $mysqli->real_escape_string($_POST['articleText']);
    $insert = $mysqli->query("INSERT INTO news(content,title) VALUES ('$articleText','$articleName')");
    if ($insert != true) {
        $output = "There was a problem :@ <br/>";
        $output .= $mysqli->error;
    } else {
        $output = "Your news has been successfully added!";
    }
}
?>



        <?PHP
        echo $output;
        ?>


    </div>
    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

    </body>


</html>

