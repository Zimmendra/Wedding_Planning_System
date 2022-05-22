<?php
    require('setSession.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./../css/adminsetting.css?v=<?php echo time(); ?>">
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
                        <li><a href="./../php/User.php">Home</a></li>
                         <li><a href="./../php/Admin.php">Dashboard</a></li>
                         <li><a href="logout.php">Log Out</a></li>
                     </ul>
                 </div>
            </div>
        </nav>
    </div>

    <div class ="container1">
       
       <h1>Admin Account Settings</h1>
       
       <form method = "post" action = "./../php/adminsetting.php">
           <label for="uname" id="setting">Change Admin Name</label><br>
           <input type="text" id="setting" name="uname" pattern="{8,15}" title="  At least 8 or more characters" >
           <input type = "submit" class="btn" name = "adminname"><br><br>
       
       </form> 
           
       <form method="post" action="./../php/adminsetting.php">
           <label for="pswd" id="setting">Change Password</label><br>
           <input type="text" id="setting" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
           <input type = "submit" class="btn" name = "adminpwrd"><br><br>
       </form>
       
       <form method = "post" action="./../php/adminsetting.php">
            <label for="delete account"  id="setting">Delete account</label>
            <input type = "submit" value="Delete" class="btndlt" name = "deletaccount"><br><br>  
       </form>

       <form>
            <a href="adminaccountcreate.html"><input type ="submit" value="Add Admin account" class = "addadminacoount"></a>
       </form>
    </div>
</body>
</html>

<?php
    
    if(isset($_POST["adminname"]))
   {
       
       $uname = $_POST["uname"];
       $sql = "UPDATE users SET Username = '$uname' WHERE Uid = 'UD001'";
       

       if($con -> query($sql))
       {
           echo "Updated successfully";
       }
   }
   if(isset($_POST["adminpwrd"]))
   {
    
       $password = $_POST["pswd"];
       $sql = "UPDATE users set Password = '$password' where Uid = 'UD001'";
       if($con ->query($sql)){
           echo "Updated successfully";
       }
   }
   if(isset($_POST["deletaccount"])){
        
       $delete = $_POST["deletaccount"];
       $sql = "DELETE FROM users where Uid = 'UD001'";

       if($con->query($sql)){
           echo "Deleted successfully";
           header('Location:./../html/Visitor.html');
       }
   }
  


?>
