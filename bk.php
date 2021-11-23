<?php   
include('./conn.php');


 // admin book setup 
    if(isset($_POST["insert"])){
        $id=$_POST['bkid'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $gener=$_POST['gener'];
        $price=$_POST['price'];      
        $imgbk=$_POST['imgbk']['name'];

        if(file_exists("assets/assets-ubk/" .$_FILES["imgbk"]["name"])){
            $store = $_FILES["imgbk"]["name"];
            $_SESSION['statud'] = "image already exists. '.$store.'";
            header ('Location: admin.php');
        }else{
            $sql = "INSERT INTO `bookstbl`(`idbk`, `title`, `author`, `gener`, `price`, `bkimg`) 
            VALUES ('$id','$title','$author','$gener','$price','$imgbk')";

            if ($conn->query($sql) === TRUE){
                move_uploaded_file($_FILES["imgbk"]["tmp_name"], "assets/assets-ubk/" .$_FILES["imgbk"]["name"]);
                $_SESSION['success'] = "Book Added";
                header ('Location: admin.php');
            }
            else {
                $_SESSION['success'] = "Book Not Added";
                header ('Location: admin.php');
            }
        }

        

    } 
    if(isset($_POST['update'])){
        $id=$_POST['bkid'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $gener=$_POST['gener'];
        $price=$_POST['price'];      
        $imgbk=$_POST['imgbk']['name'];

        $sql = " UPDATE `bookstbl` SET 
        
        `title`='$title',
        `author`='$author',
        `gener`='$gener',
        `price`='$price',
        `bkimg`='$imgbk',
        WHERE `idbk`='$id'
        ";
        if ($conn->query($sql) === TRUE){
            move_uploaded_file($_FILES["imgbk"]["tmp_name"], "assets/assets-ubk/" .$_FILES["imgbk"]["name"]);
            $_SESSION['success'] = "Book Updated";
            header ('Location: admin.php');
        }
        else {
            $_SESSION['success'] = "Book Not Updated";
            header ('Location: admin.php');
        }
    }
if(isset($_POST['delete'])){
        $sql = "DELETE FROM bookstbl WHERE `idbk`='$id'";
    if ($conn->query($sql) === TRUE){
        $_SESSION['success'] = "Book deleted";
        header ('Location: admin.php');
    }
    else {
        $_SESSION['success'] = "Book Not Deleted  ";
        header ('Location: admin.php');
    }
    }
// admin User setup
    if (isset($_POST['usinsert'])) {

        $email =$_POST['email'];
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $address =$_POST['address'];
        $contact =$_POST['contact'];
        $password1 =$_POST['password1'];
        $password2 =$_POST['password2'];
        $usprop=$_POST['usprop']['name'];
        
        if(file_exists("assets/assets-us/" .$_FILES["usprop"]["name"])){
            $store = $_FILES["usprop"]["name"];
            $_SESSION['statud'] = "image already exists. '.$store.'";
            header ('Location: admin.php');
        }else{
            $sql="INSERT INTO `usertbl`(`fname`, `lname`, `email`, `pwrd1`, `pwrd2`, `contact`, `address`, `usprop`) 
            VALUES ('$fname','$lname','$email','$password1','$password2','$contact','$address','$usprop')";
            if ($conn->query($sql) === TRUE){
                move_uploaded_file($_FILES["usprop"]["tmp_name"], "assets/assets-us/" .$_FILES["usprop"]["name"]);
                $_SESSION['success'] = "User Added";
                header ('Location: admin.php');
    
            }
            else {
                echo("Error: ".$sql. "<br>" .$conn->error);
            }
        }
        
        
        
        
    }
    if (isset($_POST['signup'])) {

        $email =$_POST['email'];
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $address =$_POST['address'];
        $contact =$_POST['contact'];
        $password1 =$_POST['password1'];
        $password2 =$_POST['password2'];
        $usprop=$_POST['usprop']['name'];
        
        if(file_exists("assets/assets-us/" .$_FILES["usprop"]["name"])){
            $store = $_FILES["usprop"]["name"];
            $_SESSION['statud'] = "image already exists. '.$store.'";
            header ('Location: admin.php');
        }else{
            $sql="INSERT INTO `usertbl`(`fname`, `lname`, `email`, `pwrd1`, `pwrd2`, `contact`, `address`, `usprop`) 
            VALUES ('$fname','$lname','$email','$password1','$password2','$contact','$address','$usprop')";
            if ($conn->query($sql) === TRUE){
                move_uploaded_file($_FILES["usprop"]["tmp_name"], "assets/assets-us/" .$_FILES["usprop"]["name"]);
                $_SESSION['success'] = "User Added";
                header ('Location: userlogin.php');
    
            }
            else {
                echo("Error: ".$sql. "<br>" .$conn->error);
            }
        }
        
        
        
        
    }
    if(isset($_POST['usupdate'])){
        $sql= "UPDATE `ustbl` SET 
        `fname`='$_POST[fname]',
        `lname`='$_POST[lname]',
        `address`='$_POST[address]',
        `contact`='$_POST[contact]',
        `dept`='$_POST[dept]',
        `password`='$_POST[password]'
      
        WHERE `email`='$_POST[email]'";
        if ($conn->query($sql) === TRUE){
            print ("record has updated!!");

        }
        else {
            print("Error: ".$sql. "<br>" .$conn->error);
        }
    } 

    if(isset($_POST['usdelete'])){
        $sql=" DELETE FROM `ustbl` WHERE `email`='$_POST[email]'";
        if ($conn->query($sql) === TRUE){
            print (" record has Deleted!!");
    
        }
        else {
            print("Error: ".$sql. "<br>" .$conn->error);
        }
        }
    
    
    
    $conn->close();
?>