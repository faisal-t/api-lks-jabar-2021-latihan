<?php

include_once('connection.php');

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$query = "INSERT INTO menu(name,description,price) VALUES ('$name','$description','$price')";
$sql = mysqli_query($connection,$query);

if($sql){
    echo json_encode(array("message" => "created"));
}else{
    echo json_encode(array("message" => "failed"));
}


?>