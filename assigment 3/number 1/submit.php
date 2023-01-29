<?php
session_start();
//session_destroy();

if (isset($_POST['submit'])) {
    if (!empty($_FILES['img']['name'])) {
        $image = $_FILES['img']['name'];
        $imageName = $image['name'];
        $temp = $image['tmp_name'];
        $_SESSION['products'][] = array(
            'title' => isset($_POST['title']) ? $_POST['title'] : '',
            'quantity' => isset($_POST['quantity']) ? $_POST['quantity'] : '',
            'img' => $imageName,
            'price' => isset($_POST['price']) ? $_POST['price'] : '',
        );
        move_uploaded_file($temp, 'uploads/' . $imageName);
    } else {
        $_SESSION['products'][] = array(
            'title' => isset($_POST['title']) ? $_POST['title'] : '',
            'quantity' => isset($_POST['quantity']) ? $_POST['quantity'] : '',
            'img' => '',
            'price' => isset($_POST['price']) ? $_POST['price'] : '',
        );

    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
    <table class="table ">
    <tr>
        <th>Title</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php

if(!isset($_SESSION['products'])){
    $_SESSION['products'] = array();
}

foreach ($_SESSION['products'] as $index => $product) {
    echo "<tr>";
    echo "<td>" . $product['title'] . "</td>";
    echo "<td>" . $product['quantity'] . "</td>";
    echo "<td><img src='uploads/".$product['imageName'] . "' width='100' height='100'></td>";
    echo "<td>" . $product['price'] . "</td>";
    echo "<td><button class='btn btn-danger'><a style='color:white; text-decoration: none;' href='delete.php?index=" . $index . "'>Delete</a></button></td>";
    echo "</tr>";
}

?>
</table>
    </body>
</html>