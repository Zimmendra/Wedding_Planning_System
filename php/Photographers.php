<?php
    require('setSession.php');
    require('setCid.php');
?>


<html>
    <head>
        <link rel="stylesheet" href="./../css/Photographers.css?v=<?php echo time(); ?>">   
        <title>Wedding Photography | The Wedding Table</title>
    </head>
    <body>

         <!------------------------------Header------------------------------------>
         <div class="navbar">
            <div class = "logo1">
                <img src = "./../images/logo.png" width = "125px">
            </div>
            <nav>
                <ul>
                    <li> <a href="User.php" class="active1">Home</a></li>
                    <li> <a href="userCategory.php"class="active1">Categories</a></li>
                    <li> <a href="./../html/about us.html" class="active1">About Us</a></li>
                </ul>
            </nav>
            <div class="sign-in">
              <button class="signinbtn"><img src = "./../images/pro.png"> &nbsp <?php echo $name ?></button>
              <div class="sign-in-content">
                <ul>
                    <li><a href="logout.php">Log Out</a></li>
                    <li><a href="usersetting.php">Settings</a></li>
                    <li><a href="userdashboard.php">Dashboard</a></li>
                </ul>
              </div>
            </div>
        </div> 

        <!-------------------body -->

        <h2>Wedding Photography</h2>

        <div class="Categories">
            <a href="./../php/after click form(v13).php"><div class="item1 item"><p><span><?php

$sql = "SELECT Name
From vendors
Where vid = '13'";

$result = $con -> query($sql);

if($result->num_rows>0)
{
    while($row = $result -> fetch_assoc())
    {
      echo $row["Name"] ;
    }

}
?></span></p></div></a>
            <a href="./../php/after click form(v14).php"><div class="item2 item"><p><span><?php

$sql = "SELECT Name
From vendors
Where vid = '14'";

$result = $con -> query($sql);

if($result->num_rows>0)
{
    while($row = $result -> fetch_assoc())
    {
      echo $row["Name"] ;
    }

}
?></span></p></div></a>
            <a href="./../php/after click form(v15).php"><div class="item3 item"><p><span><?php

$sql = "SELECT Name
From vendors
Where vid = '15'";

$result = $con -> query($sql);

if($result->num_rows>0)
{
    while($row = $result -> fetch_assoc())
    {
      echo $row["Name"] ;
    }

}
?></span></p></div></a>
            <a href="./../php/after click form(v16).php"><div class="item4 item"><p><span><?php

$sql = "SELECT Name
From vendors
Where vid = '16'";

$result = $con -> query($sql);

if($result->num_rows>0)
{
    while($row = $result -> fetch_assoc())
    {
      echo $row["Name"] ;
    }

}
?></span></p></div></a>
            <a href="./../php/after click form(v17).php"><div class="item5 item"><p><span><?php

$sql = "SELECT Name
From vendors
Where vid = '17'";

$result = $con -> query($sql);

if($result->num_rows>0)
{
    while($row = $result -> fetch_assoc())
    {
      echo $row["Name"] ;
    }

}
?></span></p></div></a>
            <a href="./../php/after click form(v18).php"><div class="item6 item"><p><span><?php

$sql = "SELECT Name
From vendors
Where vid = '18'";

$result = $con -> query($sql);

if($result->num_rows>0)
{
    while($row = $result -> fetch_assoc())
    {
      echo $row["Name"] ;
    }

}
?></span></p></div></a>
        </div>

         <!-----------------------------------------Footer---------------------------->

         <footer>

            <div class="footer">
                    
                <img src="./../images/logo.png" class="logo2" height="15%" width="10%">
                    <img src="./../images/play-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../images/app-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../images/Contact us.png" class="bind1" height="10%" width="10%">
                    

                <img src="./../images/fb.png" class="bind2"  width="3%">
                <img src="./../images/inster.png" class="bind2" width="3%">
                <img src="./../images/tw.png" class="bind2" width="3%">
                
            </div>

        </footer>

    </body>
</html>