<?php

$connection = mysqli_connect(
  'localhost', 'root', '', 'ecommerce'
);

// for testing connection
if($connection) {
  echo 'database is connected';
}

?>
