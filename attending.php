<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "persons attending";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}
else {
    echo "connected";
}


$name = $_POST['name'];
$email = $_POST['email'];
$guests= $_POST['guestss'];
$messages = $_POST['message'];

$sql = "INSERT INTO `at`(`name`, `email`, `guests`, `message`) VALUES ('$name','$email','$guests','$messages')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo "data submitted";
}
else
{
    echo "query failed....!";
}


?>