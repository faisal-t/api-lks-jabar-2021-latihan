<?php

include_once('connection.php');

parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];

$query = "DELETE FROM menu WHERE id='$id'";
$sql = mysqli_query($connection,$query);

if($sql){
    echo json_encode(array("message" => "deleted"));
}else{
    echo json_encode(array("message" => "failed"));
}


?>