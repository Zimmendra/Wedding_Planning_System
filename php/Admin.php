<?php
    require('config.php'); // include the php file

    require('setSession.php');// include the php file
?>



<!DOCTYPE html>

<!---------------------------------------------HTML-------------------------------------------------->

<html>
<<<<<<< Updated upstream
    <head>
        <link rel = "stylesheet" href = "./../css/Admin.css?v=<?php echo time(); ?>">

    </head>

    <body>
       <div class="container">
           <nav>
               <img src = "./../images/logo.png" class = "logo">
               <div class = "details">
                    <img src = "./../images/pro.png" class = "logo1">
                
                    <a href = "#" class = "btn"><?php echo $name ?></a>
                    <div class="admin-content">
                        <ul>
                            <li><a href="./../php/adminsetting.php">Settings</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                         
                        </ul>
                    </div>
               </div>
           </nav>
       </div>

       <div class="card-1">
        <div class="card1">
           
            <div class="info">
                <h2 id = "01">$150000</h2>
                <h2 id = "title-card1">Total Number of Customers</h2>
            </div>
            

        </div>
        <div class="card2">
            
            <div class="info">
                <h2 id = "02" >$150000</h2>
                <h2 id = "title-card1">Total Sales</h2>
            </div>
           

        </div>
        <div class="card3">
            
            <div class="info">
                <h2 id = "03">$150000</h2>
                <h2 id = "title-card1">Most Clicked Vendor</h2>
            </div>
            

        </div>
        </div>
        <div class="card-2">
            <div class="card4">
                
                <div class="info">
                    <h2 id = "04" >$150000</h2>
                    <h2 id = "title-card1">Most Clicked Category</h2>
                </div>

            </div>
            <div class="card5">
                
                <div class="info">
                    <h2 id = "05">$150000</h2>
                    <h2 id = "title-card1">Total Number of Admins</h2>
                </div>
                
                </div> 

        </div>
       



       </div>


       <?php

         $noOfCustomers = 0;
         $totalRevenue = 0;
         $sql = "select * from Customer";

         if( $result = $con -> query($sql))
         {
             if ($result -> num_rows > 0)
             {
                 while($row = $result -> fetch_assoc())
                 {
                    $noOfCustomers += 1;
                 }
             }
         }

         $sql = "select * from Orders";

         if( $result = $con -> query($sql))
         {
             if ($result -> num_rows > 0)
             {
                 while($row = $result -> fetch_assoc())
                 {
                    $totalRevenue += $row["Amount"];
                 }
             }
         }
         
         $sql = "select Name from vendors Where Number_of_Clicks = ( select max(Number_of_Clicks) from  vendors )";
         $result = $con -> query($sql);
         $maxVendor = "";
   
         while ($row = $result->fetch_assoc()) {
            $maxVendor = $row['Name'];
        }

        $sql = "select Category_Name from category Where Number_of_Clicks = ( select max(Number_of_Clicks) from  category)";
         $result = $con -> query($sql);
         $maxCate = "";
   
         while ($row = $result->fetch_assoc()) {
            $maxCate = $row['Category_Name'];
        }

        $sql = "select * from users where type = 'User'";
        $noOfAdmins = 0;
        if( $result = $con -> query($sql))
        {
            if ($result -> num_rows > 0)
            {
                while($row = $result -> fetch_assoc())
                {
                   $noOfAdmins += 1;
                }
            }
        }

        echo '<script>'.
            "let counts=setInterval(updated);
             let upto=0;
             function updated(){
                var count= document.getElementById('01');
                count.innerHTML=++upto;
                if(upto == '$noOfCustomers')
                {
                    clearInterval(counts);
                }
            }"
             . '</script>';
 
         $totalIncome = ceil($totalRevenue*0.40);

         echo '<script>'. "document.getElementById('02').innerHTML = '$' + '$totalRevenue';". '</script>';
         echo '<script>'. "document.getElementById('03').innerHTML = '$maxVendor';". '</script>';
         echo '<script>'. "document.getElementById('04').innerHTML = '$maxCate';". '</script>';
         echo '<script>'. "document.getElementById('05').innerHTML = '$noOfAdmins';". '</script>';





       ?>
    
<button class ="btnupdateexistingpackage"><a href = "./../html/adminexistingpackageupdate.html">Update <br> Package Details </button>
<button class ="btncheckingupdate"><a href = "./../php/ordertable.php"> checking orders </button>       
    </body>
=======
                <head>
                    <link rel = "stylesheet" href = "./../css/Admin.css?v=<?php echo time(); ?>"> // link the style sheet

                </head>

                <body>
                                <div class="container">
                                    <nav>
                                        <img src = "./../images/logo.png" class = "logo">  // add the logo image
                                        <div class = "details">
                                                <img src = "./../images/pro.png" class = "logo1"> // add the user image
                                            
                                                <a href = "#" class = "btn"><?php echo $name ?></a> // display the user name from the database
                                                <div class="admin-content">
                                                    <ul>
                                                        <li><a href="./../php/adminsetting.php">Settings</a></li>  // hover content
                                                        <li><a href="logout.php">Log Out</a></li>
                                                    
                                                    </ul>
                                                </div>
                                        </div>
                                    </nav>
                                </div>

                            <!----------------display the details of website from the data base-------------------->

                            <div class="card-1">
                                <div class="card1">
                                
                                    <div class="info">
                                        <h2 id = "01">$150000</h2>
                                        <h2 id = "title-card1">Total Number of Customers</h2>
                                    </div>
                                    

                                </div>
                                <div class="card2">
                                    
                                    <div class="info">
                                        <h2 id = "02" >$150000</h2>
                                        <h2 id = "title-card1">Total Revenue</h2>
                                    </div>
                                

                                </div>
                                <div class="card3">
                                    
                                    <div class="info">
                                        <h2 id = "03">$150000</h2>
                                        <h2 id = "title-card1">Most Clicked Vendor</h2>
                                    </div>
                                    

                                </div>
                                </div>
                                <div class="card-2">
                                    <div class="card4">
                                        
                                        <div class="info">
                                            <h2 id = "04" >$150000</h2>
                                            <h2 id = "title-card1">Most Clicked Category</h2>
                                        </div>

                                    </div>
                                    <div class="card5">
                                        
                                        <div class="info">
                                            <h2>$150000</h2>
                                            <h2 id = "title-card1">Total Revenue</h2>
                                        </div>
                                        
                                        </div> 

                                </div>
                            



                            </div>

                            

                            <?php

                            //-----------------------------------------------PHP-----------------------------------------------

                                $noOfCustomers = 0;
                                $totalRevenue = 0;
                                $sql = "select * from Customer";

                                    if( $result = $con -> query($sql))
                                    {
                                        if ($result -> num_rows > 0)
                                        {
                                            while($row = $result -> fetch_assoc())
                                            {
                                                $noOfCustomers += 1;
                                            }
                                        }
                                    }

                                $sql = "select * from Orders";

                                    if( $result = $con -> query($sql))
                                    {
                                        if ($result -> num_rows > 0)
                                        {
                                            while($row = $result -> fetch_assoc())
                                            {
                                                $totalRevenue += $row["Amount"];
                                            }
                                        }
                                    }
                                
                                $sql = "select Name from vendors Where Number_of_Clicks = ( select max(Number_of_Clicks) from  vendors )";
                                $result = $con -> query($sql);
                                $maxVendor = "";
                        
                                    while ($row = $result->fetch_assoc()) {
                                        $maxVendor = $row['Name'];
                                    }

                                $sql = "select Category_Name from category Where Number_of_Clicks = ( select max(Number_of_Clicks) from  category)";
                                $result = $con -> query($sql);
                                $maxCate = "";
                        
                                    while ($row = $result->fetch_assoc()) {
                                        $maxCate = $row['Category_Name'];
                                    }

                                echo '<script>'.
                                    "let counts=setInterval(updated);
                                    let upto=0;
                                    function updated(){
                                        var count= document.getElementById('01');
                                        count.innerHTML=++upto;
                                        if(upto == '$noOfCustomers')
                                        {
                                            clearInterval(counts);
                                        }
                                    }"
                                    . '</script>';
                        


                                echo '<script>'. "document.getElementById('02').innerHTML = '$totalRevenue';". '</script>';
                                echo '<script>'. "document.getElementById('03').innerHTML = '$maxVendor';". '</script>';
                                echo '<script>'. "document.getElementById('04').innerHTML = '$maxCate';". '</script>';




                            ?>
                            
                        <button class ="btnupdateexistingpackage"><a href = "./../html/adminexistingpackageupdate.html">Update <br> Package Details </button>
                        <button class ="btncheckingupdate"><a href = "./../php/ordertable.php"> checking orders </button>       
                </body>
>>>>>>> Stashed changes



</html>
