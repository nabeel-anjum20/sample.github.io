<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogger";

$conn = new mysqli($servername,$username,$password,$dbname);



if($conn->connect_error){


    die("connection failed:" . $conn->connect_error);
    
    }
    




$sql = "INSERT INTO `carstock`(`id`, `vincode`) VALUES ('1','DD23MM')"; 


$result = $conn->query($sql);


if($result == TRUE){

  echo "car not chekcout.";


} else{

    echo "ERROR:". $sql . "<br>". $conn->error;

}

$conn->close();







?>