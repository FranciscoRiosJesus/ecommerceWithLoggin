<?php

include('database.php');

if(isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT email, password FROM client WHERE email=$email AND password=$password";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  } 

  echo "loggin Successfully";  
  header("Location: index.html");
}

?>