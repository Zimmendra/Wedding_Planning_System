<?php
 
    require('setsession.php');

    $cid = "";

  if (isset($_SESSION["Cid"]))
  {
      $cid = $_SESSION['Cid'];
  }

?>
<html>
    
    <link rel = "stylesheet" href = "./../css/styleauserbashboard.css?v=<?php echo time(); ?>">
    <head>
  </head>
    <body>
    <div class="container">
        <nav>
            <img src = "./../images/logo.png" class = "logo">
            <div class = "details">
                 <img src = "./../images/pro.png" class = "logo1">
             
                 <a href = "#"><?php echo $name ?></a>
                 <div class="admin-content">
                     <ul>
                        <li><a href="User.php">Home</a></li>
                         <li><a href="userdashboard.php">Dashboard</a></li>
                         <li><a href="logout.php">Log Out</a></li>
                     </ul>
                 </div>
            </div>
        </nav>
    </div>
        <div class ="container1">
          <h1>User dashboard</h1>  
        
           <button class = "addfeedback" onclick="location.href = 'feedback.php';" >Add feedback</button>
           
           <button class = "setting" onclick ="location.href = 'usersetting.php'"> Settings </button>
           
        </div>
    </body>
</html>

<?php 
    $sql = "select o.OrderId, Order_date, o.Amount, p.Package_Name, v.Name, p.price  
    from orders o , customer c, customer_package cp, package p, vendors v 
    Where o.Cid = c.Cid and c.Cid = cp.cid and cp.Pid = p.Pid and p.Vid = v.Vid and c.Cid ='$cid'";
    $order = "";
    $count = 0;



    $result = $con->query($sql); 
    $packages = "";
    $vendors = "";
    $prices = "";

    

    if($result->num_rows>0)
    {
        echo "<table border = '1'><tr><th>Order Id</th><th>order date</th></th><th>Amount</th></th><th>Package Name</th></th><th>Name </th><th>Price</th></tr>";

        $numRows = $result -> num_rows;

        $num1 = 0;
        $num2 = 1;
        $num3 = 2;

        while($row = $result ->fetch_assoc())
        {

            if ( $order != $row["OrderId"])
            {
               

                if ($count != 0)
                {
                    echo "<script> document.getElementById('$num1').innerHTML = '$packages' </script>";
                    echo "<script> document.getElementById('$num2').innerHTML = '$vendors' </script>"; 
                    echo "<script> document.getElementById('$num3').innerHTML = '$prices' </script>";
                    $packages = "";
                    $vendors = "";
                    $prices = "";
                    $num1 += 3;
                    $num2 += 3;
                    $num3 += 3;
                }



                $order = $row["OrderId"];
                echo "<tr>";
                echo "<td >".$row["OrderId"]."</td>";
                echo "<td>".$row["Order_date"]."</td>";
                echo "<td>".$row["Amount"]."</td>";
                echo "<td id = '$num1' > </td>";
                echo "<td id = '$num2' > </td>";
                echo "<td id = '$num3' > </td>";
                echo "</tr>";
            }


            $count++;
            $packages = $packages.$row["Package_Name"]. "</br>";
            $vendors = $vendors.$row["Name"]."</br>";
            $prices = $prices.$row["price"]."</br>";
            

            if ($count == $numRows)
            {
                echo "<script> document.getElementById('$num1').innerHTML = '$packages' </script>";
                echo "<script> document.getElementById('$num2').innerHTML = '$vendors' </script>"; 
                echo "<script> document.getElementById('$num3').innerHTML = '$prices' </script>";

            }
            
           /*else
            {
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".""."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".""."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" "<td>".$row["Package_Name"]."</td>"  "<td>".$row["Name"]."</td>" "<td>".$row["price"]"</td>" " </br>";
            }*/


        }
        echo "</table>";
    }

    $con->close();

?>
