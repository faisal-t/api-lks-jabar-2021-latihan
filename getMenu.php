<?php

include_once('connection.php');

$query = mysqli_query($connection,"SELECT * FROM menu");
$result = array();

while($row = mysqli_fetch_array($query)){
    array_push($result,array(
        'name' => $row['name'],
        'description' => $row['description'],
        'price' => $row['price']
    ));
}

echo json_encode(
    
    array('data' => $result)
);

?>