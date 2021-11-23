<?php
include('./conn.php');

if(isset($_POST['uslogin'])){
    $usemail = $_POST['usemail'];
    $uspword = $_POST['pword'];
    $sql = " SELECT * FROM 'usertbl' WHERE 'email' ='$usemail' AND 'pwrd1' = '$uspword'";
    if ($conn->query($sql) === TRUE){
        // $_SESSION['email'] =$usemail;
        // header('Location: ./user.php');
        echo'DONE';
    }
    else {
        // $_SESSION['status'] ='Email id / Passwordis';
        // header('Location: ./userlogin.php');
        echo("Error: ".$sql. "<br>" .$conn->error);
    }   
}

if(isset($_POST['adlogin'])){
    $ademail = $_POST['usname'];
    $adpword = $_POST['pword'];
    $sql = " SELECT  FROM 'usertbl' WHERE 'email' ='$ademail' AND 'pwrd1' = '$adpword'";
    if ($conn->query($sql) === TRUE){
        $_SESSION['email'] =$ademail;
        header('Location: ./admin.php');
    }
    else {
        $_SESSION['status'] ='Email id / Passwordis';
        header('Location: ./adminlogin.php');
    }   
}   
               
?>

