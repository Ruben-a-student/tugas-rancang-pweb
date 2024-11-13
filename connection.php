<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="db_tugasrancang";

    // $conn= new mysqli($servername,$username,$password,$dbname);

    // if($conn->connect_error){
    //     die("we're cooked".$conn->connect_error);
    // }
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Database connection failed: " . $e->getMessage());
    }
?>