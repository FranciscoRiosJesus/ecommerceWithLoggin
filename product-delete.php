<?php

include('database.php');

if(isset($_POST['product_id'])) {
  $product_id = $_POST['product_id'];
  $query = "DELETE FROM products WHERE product_id = $product_id"; 
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "product Deleted Successfully";  

}

?>
