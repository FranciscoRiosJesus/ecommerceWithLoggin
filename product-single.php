<?php

include('database.php');

if(isset($_POST['product_id'])) {
  #$product_id = mysqli_real_escape_string($connection, $_POST['product_id']);
  $product_id = $_POST['product_id'];

  $query = "SELECT * from products WHERE product_id = $product_id";

  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'product_name' => $row['product_name'],
      'description' => $row['description'],
      'product_id' => $row['product_id']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>
