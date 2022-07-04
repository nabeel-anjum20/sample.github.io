<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogger";

$conn = new mysqli($servername,$username,$password,$dbname);



if($conn->connect_error){


    die("connection failed:" . $conn->connect_error);
    
    }
    




$sql = "INSERT INTO `department`(`id`, `name`) VALUES ('2','mehran')"; 


$result = $conn->query($sql);


if($result == TRUE){

  echo "car chekcout.";


} else{

    echo "ERROR:". $sql . "<br>". $conn->error;

}

$conn->close();







?>







