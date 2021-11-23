<?php
$servername ="localhost";
$username ="username";
$password ="password";

                
                

$conn =new mysqli('localhost', 'root','','ollb');

if($conn->connect_error){
die("connection error :". $conn->connect_error);

}


    if(isset($_POST['insert'])){

        
        
        $sql = "INSERT INTO bktbl (bkid, bkname,bkauthor,bkgener,bkprice,bklang)
        VALUES()";
        if ($conn->query($sql) === TRUE){
            echo ("New record has inserted!!");

        }
        else {
            echo("Error: ".$sql. "<br>" .$conn->error);
        }
    }
    if(isset($_POST['adsearchbk'])){
        if($conn->connect_error){
           die("connection error :". $conn->connect_error);
                   
       }
           $sql = "SELECT * FROM bktbl where bkid='$_POST[bkid]'";
           $result = $conn->query($sql);
           if ($result->num_rows > 0 ){
   
               while ($row = $result->fetch_assoc()) {
                   echo "id:".$row["id"]."- Name:".$row["name"]. "<br>";
               }
   
               }
               else {
                   echo "0 results";
               }
       }
    if(isset($_POST['update'])){
        $sql = " UPDATE bktbl 
        set $bkname='$_POST[title]',
        $bkgener='$_POST[gener]',
        $bkprice='$_POST[price]',
        $bkauthor='$_POST[author]',
        $bklang='$_POST[lang]',
        
        where $bkid='$_POST[bkid]'
        ";
        if ($conn->query($sql) === TRUE){
            print ("record has updated!!");

        }
        else {
            print("Error: ".$sql. "<br>" .$conn->error);
        }
    }
    if(isset($_POST['delete'])){
        $sql = "DELETE * FROM bktbl WHERE bkid='$_POST[bkid]'";
    if ($conn->query($sql) === TRUE){
        print (" record has Deleted!!");

    }
    else {
        print("Error: ".$sql. "<br>" .$conn->error);
    }
    }
    
    $conn->close();
?>