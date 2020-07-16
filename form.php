<?php

$hostname = "us-cdbr-east-02.cleardb.com ";
$username = "bad816b66b485e";
$password = "7f49ef11";
$db = "heroku_db38da5d8dd34df";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST)) {
    $email=$_POST['email'];
    $message=$_POST['message'];

    $query = "INSERT INTO `form` (`email`, `message`) VALUES ('{$email}', '{$message}')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occured.');
    } else {
        echo "Thank You! Message received";
    }
}

?>



