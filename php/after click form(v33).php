<?php
    require('config.php');

?>

<!DOCTYPE html>
<html>
    <head>
          <link rel = "stylesheet" href = "./../CSS/afterclickform.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class ="container">
       
            <h1>
                <?php 
    
                    $sql = "SELECT Name From vendors Where vid = '33'";
                    $result = $con -> query($sql);
                  
                    if($result->num_rows>0)
                    {
                        while($row = $result -> fetch_assoc())
                        {
                            echo $row["Name"] ;
                        }

                    } 


                ?>
             </h1>
             <img src = "./../images/vendor33.jpg" class = "hotelimages">
          <div class="description">
              <h3>
                <?php 
                    $sql = "select description from vendors where vid = '33'";
                    $result = $con->query($sql);

                    if($result ->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            echo $row ["description"];
                        }
            
                    }
                    else
                    {
                        echo "<script>alert('No record')</script>";
                        echo "no result";
                    } 

                ?>
              </h3>
          </div>

    
          <div class="package">
                <nav>
                    <ul> &nbsp;&nbsp;&nbsp;<li><button class = "btnpackage"><a href="navitems.php?id=97">
                         <p>
                         <?php

                                $sql = "SELECT Package_Name,Price
                                From Package
                                Where vid = '33' AND Package_Name = 'Design 1'";

                                $result = $con -> query($sql);
  
                                if($result->num_rows>0)
                                {
                                    while($row = $result -> fetch_assoc())
                                    {
                                      echo $row["Package_Name"] . "<br><br>Rs.". $row["Price"].".00";
                                    }

                                }
                            ?>
                            </p></a></button></li>&nbsp;&nbsp; &nbsp; <li><button class = "btnpackage"><a href="navitems.php?id=98"><p><?php
  

                            $sql = "SELECT Package_Name,Price
                            From Package
                            Where vid = '33' AND Package_Name = 'Design 2'";

                            $result = $con -> query($sql);

                            if($result->num_rows>0)
                            {
                              
                              while($row = $result -> fetch_assoc())
                              {
                                echo $row["Package_Name"] . "<br><br>Rs.". $row["Price"].".00";
                              }

                            }
                            ?></p></a></button></li> &nbsp;&nbsp;&nbsp;  <li><button class = "btnpackage"><a href="navitems.php?id=99"><p><?php
 


                            $sql = "SELECT Package_Name,Price
                            From Package
                            Where vid = '33' AND Package_Name = 'Design 3'";

                            $result = $con -> query($sql);
                            if($result->num_rows>0){
                              while($row = $result -> fetch_assoc()){
                                echo $row["Package_Name"] . "<br><br>Rs.". $row["Price"].".00";
                              }
                              
                            }
 

?></p></a></button></li>
                        
                    </ul>
                </nav>
            </div>
        
        <div>

   
  </body>
</html>