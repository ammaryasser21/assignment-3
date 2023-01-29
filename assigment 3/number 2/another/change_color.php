
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
    <!-- Change Color Form -->
<div class="container">
  <h2>Change Navbar Color</h2>
  <form action="change_color.php" method="post">
    <div class="form-group">
      <label for="color">Color:</label>
      <input type="text" class="form-control" id="color" name="color">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
<?php
  // check if the form is submitted
  if (isset($_POST['color'])) {
    // set the cookie with the color value
    setcookie("navbar_color", $_POST['color'], time() + 3600);

    // reload the page to apply the new color
    header("Location: index.php");
  }
?>
