<?php

include_once('connection.php');

parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];
$name = $value['name'];
$description = $value['description'];
$price = $value['price'];

$query = "UPDATE menu SET name='$name',description='$description',price='$price' WHERE id='$id'";
$sql = mysqli_query($connection,$query);

if($sql){
    echo json_encode(array("message" => "updated"));
}else{
    echo json_encode(array("message" => "failed"));
}


?>