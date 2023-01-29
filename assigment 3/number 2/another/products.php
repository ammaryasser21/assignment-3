<?php
$products = [];

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $quantity = $_POST['quantity'];
    $img = $_POST['img'];
    $price = $_POST['price'];

    $products[] = [
        "title" => $title,
        "quantity" => $quantity,
        "img" => $img,
        "price" => $price
    ];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Product Form -->
<div class="container">
  <h2>Add Product</h2>
  <form action="products.php" method="post">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="quantity">Quantity:</label>
      <input type="number" class="form-control" id="quantity" name="quantity">
    </div>
    <div class="form-group">
      <label for="img">Image URL:</label>
      <input type="text" class="form-control" id="img" name="img">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<!-- Product Table -->
<div class="container mt-5">
  <h2>Products</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if (isset($_POST['title'])) {
            $products[] = [
                'title' => $_POST['title'],
                'quantity' => $_POST['quantity'],
                'img' => $_POST['img'],
                'price' => $_POST['price']
            ];
        }

  if (isset($products)) {
      foreach ($products as $product) {
          echo "<tr>";
          echo "<td>" . $product['title'] . "</td>";
          echo "<td>" . $product['quantity'] . "</td>";
          echo "<td><img src='" . $product['img'] . "' style='width:100px;height:100px;'></td>";
          echo "<td>" . $product['price'] . "</td>";
          echo "</tr>";
      }
  }
  ?>
</tbody>
  </table>
</div>