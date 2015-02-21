<?php

    $dbhost = "localhost";
    $dbuser = $_POST["uid"];
    $dbpass = $_POST["pass"];

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(!$conn){
      header('Location: loginErr.php');
    }
    else{
      session_start();
      $_SESSION["id"] = $dbuser;
      $_SESSION["password"] = $dbpass;

      header('Location: loginSucc.php');
    }

?>
