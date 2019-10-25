<?php

include('database.php');

if(isset($_POST['logging'])) {
  
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $query = "SELECT email, pass FROM users WHERE email='$email' AND pass='$password'";
  $result = mysqli_query($connection, $query);

  if ( $result->fetch_assoc() == NULL ) {
    $_SESSION['message'] = 'incorrect email or password';
    $_SESSION['message_type'] = 'danger';

    header("Location: logging.php");
  }

  header("Location: index.php");
  
}

?>