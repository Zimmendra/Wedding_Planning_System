<?php
   require('setSession.php');

   $totalPrice = $_SESSION['Totalprice'];

?>

<html>
    <head>
        <link rel="stylesheet" href="./../css/Payment_portal.css?v=<?php echo time(); ?>">
    </head>

    <body>
    
            <!------------------------------Header------------------------------------>
            <div class="navbar">
                <div class = "logo1">
                    <img src = "./../IMAGES/logo.png" width = "125px">
                </div>
                <nav>
                    <ul>
                        <li> <a href="User.php" class="active1">Home</a></li>
                        <li> <a href="usercategory.php"class="active1">Categories</a></li>
                        <li> <a href="./../html/about us.html" class="active1">About Us</a></li>
                    </ul>
                </nav>
                <div class="sign-in">
                  <button class="signinbtn"><img src = "./../IMAGES/pro.png"> &nbsp <?php echo $name ?></button>
                  <div class="sign-in-content">
                    <ul>
                        <li><a href="logout.php">Log Out</a></li>
                        <li><a href="usersetting.php">Settings</a></li>
                        <li><a href="userdashboard.php">Dashboard</a></li>
                    </ul>
                  </div>
                </div>
            </div> 

        <!----------------------------------------Payment Portal------------------------------------------->
        
        <div class="form">
            <form method = "post" action = "submitOrder.php" >
                <label>
                    Name on Card
                </label>
                <br>
                <input type="text" name="name" maxlength="20" placeholder="E.g: John Smith" required>
                <br><br>
                <label>
                Card Number 
                </label>
                <br>
                <input type="text" name="CNo" maxlength="16" minlength="16" placeholder="XXXX-XXXX-XXXX-XXXX" required>
                <br><br>
                <div>
                    <div>
                <label>
                    Expiry Date
                </label>
                <label id="cvn">
                    CVN
                </label>
                
                <br><input type="date" min="2022-05-22">
                    <div style="float:right">
                
                <input type="text" name="cvn" maxlength="3" minlength="3" required>
                    </div>
                     </div>
                </div>
                
                <br><br><br><br>

                <p id="tot">Total : <?php echo $totalPrice ?> </p>
                <br><br>
                <input type="submit" id="pay" value="Pay">
        
            </form>
        </div>
        <!----------------------------------------Footer------------------------------------------->
        
        <footer>

            <div class="footer">
                    
                <img src="./../IMAGES/logo.png" class="logo2" height="10%" width="10%">
                    <img src="./../IMAGES/play-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../IMAGES/app-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../IMAGES/Contact us.png" class="bind1" height="10%" width="10%">
                    

                <img src="./../IMAGES/fb.png" class="bind2"  width="3%">
                <img src="./../IMAGES/inster.png" class="bind2" width="3%">
                <img src="./../IMAGES/tw.png" class="bind2" width="3%">
                
            </div>
            
        </footer>

    </body>
</html>