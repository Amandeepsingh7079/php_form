<?php

$servername="localhost:3307";
$username="root";
$password="";
$database="form";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("connection to this database failed due to" . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$bgroup = $_POST['bgroup'];

$sql= "INSERT INTO `form` ( `name`, `email`, `phone`, `bgroup`) VALUES ( '$name', '$email', '$phone', '$bgroup');";


if($conn->query($sql) == true){
    echo "Successfully inserted";}
else{
    $conn->close();
}


?>
