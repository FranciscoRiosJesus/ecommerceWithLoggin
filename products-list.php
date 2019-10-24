<?php

  include('database.php');

  $query = "SELECT * from products";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'product_name' => $row['product_name'],
      'quantity' => $row['quantity'],
      'description' => $row['description'],
      'price' => $row['price'],
      'product_id' => $row['product_id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
