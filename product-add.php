<?php

  include('database.php');

if(isset($_POST['product_name'])) {
  # echo $_POST['product_name'] . ', ' . $_POST['description'];
  $product_product_name = $_POST['product_name'];
  $product_description = $_POST['description'];
  $query = "INSERT into products(product_name, description) VALUES ('$product_product_name', '$product_description')";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  echo "product Added Successfully";  

}

?>
