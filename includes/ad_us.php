<section class="UsersbyAd" id="usbyad">
                                               
                        <div class="container01">
                            <span></span>
                            <div class="form" >
                                <div class="inputBX1">
                                <h1>Manage Users</h1>                                 
                                </div>
                                <?php
                                if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                                    echo '<h2>'.$_SESSION['status'].'</h2>';
                                    unset($_SESSION['status']);
                                }
                                ?>
                                <form action="bk.php" method="POST" enctype="multipart/form-data">     
                                    <div class="inputBX">
                                        <input type="text" name="fname" placeholder=" Firstname">
                                    </div>
                                    <div class="inputBX">
                                        <input type="text" name="lname" placeholder=" Lastname">
                                    </div>
                                    
                                    <div class="inputBX">
                                        <input type="text" name="email" placeholder=" Email"> 
                                    </div>
                                    <div class="inputBX">
                                        <input type="password" name="password1" placeholder=" Password">
                                    </div> 
                                    <div class="inputBX">
                                        <input type="password" name="password2" placeholder=" Repeat Password">
                                    </div> 
                                    <div class="inputBX">
                                        <input type="text" name="contact" placeholder=" Contact">
                                    </div>
                                    <div class="inputBX">
                                        <input type="text" name="address" placeholder=" Address">
                                    </div>
                                    <div class="inputBX">
                                    <input type="file" name="usprop" >
                                    </div>
                        <div class="inputBX2">
                                        <input type="Submit" name="usinsert" value="Insert">
                                        <input type="Submit" name="usupdate" value="Update">
                                        <input type="Submit" name="usdelete" value="Delete">                                                                        
                                    </div>
        
                              </form>
                            </div>
                            
                        </div>
                        <div class="details" id="details-us">
                            <div class="user-details">
                                
                                <div class="img-container">
                                    <img src="" alt="" width="230px" height="300px" id="us-img-dt">
                                </div>
                                <div class="card-dt">
                                    <h3 >name:</h3>
                                    <h4 >ID:</h4>
                                    <p >address:</p>
                                    <p >contact:</p>
                                    <p >email:</p>
                                 </div>
                            </div>
                        </div>  
                    </section>