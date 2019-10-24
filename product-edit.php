<?php

  include('database.php');

if(isset($_POST['product_id'])) {
  $product_product_name = $_POST['product_name']; 
  $product_description = $_POST['description'];
  $product_id = $_POST['product_id'];
  $query = "UPDATE products SET product_name = '$product_product_name', description = '$product_description' WHERE product_id = '$product_id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "product Update Successfully";  

}

?>
