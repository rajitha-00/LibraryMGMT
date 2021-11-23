<?php 
    session_start();
    $servername ="localhost";
    $username ="username";
    $password ="password";
    $errors = array();
                    
                    

    $conn =new mysqli('localhost', 'root','','dbolb');

    if($conn->connect_error){
    die("connection error :". $conn->connect_error);

}
?>