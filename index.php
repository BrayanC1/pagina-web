<?php require "./inc/session_start.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "./inc/head.php"; ?>
    </head>
    <body>


  <?php

  if (!isset($_GET["vista"]) || $_GET["vista"] == "") {
    $_GET["vista"] = "login";
  }


  if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']!="login") {

    include "./inc/navbar.php";

    include "./vistas/" . $_GET['vista'] . ".php";
    
    include "./inc/script.php";
  } else {
   
    if ($_GET['vista'] == "login") {
      
      include "./vistas/login.php";
    } 
  }
  ?>


    </body>
</html>