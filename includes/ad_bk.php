<section class="BooksbyAd" id="bkbyad">
    <div class="container01">
        <span></span>
        <div class="form" >
            <div class="inputBX1">
                <h1>Manage Books</h1>
            </div>
            <form action="bk.php" method="POST" enctype="multipart/form-data"   > 
                <div class="inputBX">
                    <input type="text" name="bkid" placeholder=" Book ID" id="bkid" >
                </div>
                <div class="inputBX">
                    <input type="text" name="title" placeholder=" Title" id="bkname">              
                </div>
                <div class="inputBX">
                    <input type="text" name="author" placeholder=" Author" id="bkauthor" >
                </div>
                <div class="inputBX">
                    <input type="text" name="gener" placeholder=" Gener" id="bkgener" > 
                </div>                           
                <div class="inputBX">
                    <input type="text" name="price" placeholder=" Price" id="bkprice" >
                </div>                         
                <div class="inputBX">
                <input type="file" name="imgbk" id="imgbk" >
                </div>           
                <div class="inputBX2">
                    <input type="Submit"  value="Insert" name="insert">                                    
                    <input type="Submit"  value="Update" name="update">
                    <input type="Submit"  value="Delete" name="delete">                                                                    
                </div>
                <p> * if you want to find a Book , <br> just type Book-ID and search</p>
            </form>
        </div>
    </div>
    <div class="details" id="details-bk">
        <div class="books-details">
            <div class="toggle" onclick="toggleMenu()"></div>
            <div class="img-container">
                <img src="" alt="" width="230px" height="300px" id="us-img-dt">
            </div>
            <div class="card-dt">
                <h3>name:</h3>
                <h4>ID:</h4>
                <p>gener:</p>
                <p>author:</p>
                <p>price:</p>
                
                <p id="status">status:</p>
                
            </div>
        </div>
    </div>  
    </section>