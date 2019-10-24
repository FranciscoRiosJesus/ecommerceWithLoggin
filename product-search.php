<?php

include('database.php');

$search = $_POST['search'];
if(!empty($search)) {
  $query = "SELECT * FROM products  WHERE product_name LIKE '$search%'";
  $result = mysqli_query($connection, $query);
  
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
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
}

?>
