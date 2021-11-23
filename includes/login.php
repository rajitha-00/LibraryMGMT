<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        $servername ="localhost";
        $username ="username";
        $password ="password";

        $conn =new mysqli('localhost', 'root','','wddassignmentdb');

        if($conn->connect_error){
            die("connection error :". $conn->connect_error);

        }
        $sql = "INSERT INTO login (, st_name) VALUES('$_POST[id]','$_POST[name]')";
        if ($conn->query($sql) === TRUE){
            print ("New record has inserted!!");

        }
        else {
            print("Error: ".$sql. "<br>" .$conn->error);
        }
        $conn->close();
        
        ?>
    </body>
</html>