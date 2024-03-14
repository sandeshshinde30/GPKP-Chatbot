<?php
use LDAP\Result;
// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "gpkpbot2";

// // $conn = mysqli_connect($host, $user, $password, $db);
// // if($_SERVER['REQUEST_METHOD']=='POST'){
// // $user = $_POST['name'];
// // $pass = $_POST['pass'];
// // $Sql = "SELECT * FROM adminlogin WHERE `AdminName` = '$user' AND `Password` = '$pass' ";

// if ($result = $conn -> query($Sql)){
//   echo '<script>location.href = "admin1.php"</script>';
// }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPKP CHATBOT Admin Login</title>
    <link rel="web icon" type="jpg" href="img/GPKP_LOGO.jpg">
    <link rel="stylesheet" href="admin.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>
<body>

  
    <div class="box"> 
        <div class="form">

        <h2>GPKP CHATBOT Admin Login </h2>
        <form method = "post" action="admin.php">
        <?php if(isset($_GET['error'])) {?> 
        <p class = "error"><?php echo $_GET['error']; ?></p> 
        <?php } ?>
        <div class="inputbox">
            <input type="text" name="name" required="required" >
            <span>Admin Name </span>
            <i></i>
          </div>

        

          <div class="inputbox">
              <input type="password" name="pass" required="required" >
              <span>Admin Password</span>
              <i></i>
            </div>

        
            <div class="links">
           
           
            </div><br><br>
            <div class="f">
              <input type="submit" name="submit" value="Sign-Up">
            <input type="button" value="Back" onclick="back()">
            </div>
        
        </form> 
         
          
    </div>
  </div>
  
<?php

  $invalid_Login = 0;
  $conn = mysqli_connect("localhost","root","","gpkpbot2");
  if(!$conn)
  {
    die("Connection not establish".mysqli_connect_error());
  }
  else
  {
    if(isset($_POST['submit']))
    {
      $name = $_POST['name'];
      $password = $_POST['pass'];

      // echo $name;
      // echo $password;

      $sql = "SELECT * FROM `adminlogin` ";
      $result = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($result))
      {
        if($name == $row['AdminName'] && $password == $row['Pass'])
        {
          header('Location:admin1.php');
        }
        else
        {
          $invalid_Login = 1;
        }
      }
      if($invalid_Login == 1)
        {
          echo '<script type = "text/JavaScript">alert("Invalid Login")</script>';
        }
    }
  }
  mysqli_close($conn);
?>
</body>
</html>