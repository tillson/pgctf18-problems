<?php
require('header.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

   $username = $_POST['username'];
   $password = $_POST['password'];
   if($password == "admin" && $username == "admin") {
      $_SESSION['username'] = $username;
      header('Location: /manage');
   } else {
     header('Location: /?error=invalid');
     die();
   }
}

?>
