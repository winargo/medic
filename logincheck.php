<?php
        session_start();
        include("db_connect.php");
        $username=isset($_POST['usercheck']) ? $_POST['usercheck'] : '';
        $password=isset($_POST['passwordcheck']) ? $_POST['passwordcheck'] : '';
        echo $username;
        echo $password;
        $sql = "Select password from `user` where username='$username'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
        $row = mysqli_fetch_array($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $row[0];
      if(($password==$row[0])/*===true*/) {
          $_SESSION["username"] = $username;
          $_SESSION["online"] = "1";
          header ("Location: home.php");
          exit();
      }
     else {
         $_SESSION["error"] = "<b>Your Login Name or Password is invalid</b>";
          header ("Location: login1.php");
         
      }
?>