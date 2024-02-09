<?php
include_once 'dbh.inc.php';
// $servername = "localhost";
// $username = "root";
// $password = "mypassword";
// $dbname = "test1db";


// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }


 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $country = $_POST["country"];

    $sql = "INSERT INTO users (username, password, country) VALUES('$username', '$password', '$country');";
    mysqli_query($conn, $sql);

    header("Location: ../upload.html");
 }else{
    header("Location: ../index.html");
 }