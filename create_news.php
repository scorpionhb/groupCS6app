<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.12.2016 г.
 * Time: 17:02
 */
$output = null;

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
    <main>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
        <form action="createarticle" method="post">
            <input type="text" name="articleName" placeholder="Name of Article">
            <textarea name="articleText"></textarea>
            <input type="submit">
        </form>
    </main>
<?
