<?php 

$connection = null;
//config
try{
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "lks_android";
    $dbms = "mysql";

    $database = "$dbms:dbname=$dbName;host=$host";
    $connection = new PDO($database,$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // if($connection){
    //     echo "Koneksi Berhasil";
    // } else {
    //     echo "Gagal gan";
    // }
} catch (PDOException $e){
    echo "Error ! " . $e->getMessage();
    die;
}

?>
