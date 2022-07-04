<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogger";

$conn = new mysqli($servername,$username,$password,$dbname);



if($conn->connect_error){


    die("connection failed:" . $conn->connect_error);
    
    }
    



    $sql = "INSERT INTO `attendence`(`id`, `vincode`,`checkin`,`checkout`) VALUES ('1','DD23MM',3,3)"; 


$result = $conn->query($sql);


if($result == TRUE){

  echo "car chekcout from all department.";


} else{

    echo "ERROR:". $sql . "<br>". $conn->error;

}

$conn->close();







?>