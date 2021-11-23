<section class="Books" id="BOOKS">

    <?php
    $servername ="localhost";
    $username ="username";
    $password ="password";
    $errors = array();
                    
                    

    $conn =new mysqli('localhost', 'root','','dbolb');

    if($conn->connect_error){
    die("connection error :". $conn->connect_error);

}
    $query = "SELECT * FROM `bookstbl`";
    $query_run =mysqli_query($conn, $query);
    $check_books = mysqli_num_rows($query_run)>0;

    if($check_books){
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
                <div class="card02">
                    <div class="boxBooks" id="2">
                        <div class="imgBx02">
                            <img src="./assets/assets-ubk/<?php echo $row['imgbk'];?>" width="260px" height="320px" alt="">
                        </div>
                        <div class="contentBx">
                            <div>
                                <h2><?php echo $row['title'];?></h2>
                                <p ><?php echo $row['author'];?></p>
                                <p ><?php echo $row['gener'];?> </p>
                                <P ><?php echo $row['price'];?></P>
                                <button type=class="fa fa-shopping-cart" id="add-to-cart"></button>
                                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
    } 
    ?>
</section>