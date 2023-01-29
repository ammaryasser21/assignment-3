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
    <!-- Login Form -->
<div class="container"  >
  <h2>Login</h2>
  <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">user name</label>
    <input type="text" name="username" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
    
  </div>
  </form>

</body>
</html>

<?php
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $users = [
      [
        "username" => "admin",
        "password" => "1234"
      ],
      [
        "username" => "user",
        "password" => "1234"
      ],
    ];

    $is_taken = false;
    foreach ($users as $user) {
      if ($_POST['username'] == $user['username']) {
        $is_taken = true;
        break;
      }
    }

    if (!$is_taken) {
      $users[] = [
        "username" => $_POST['username'],
        "password" => $_POST['password']
      ];
      echo "Signup successful!";
        header("Location:products.php " . $_SERVER['PHP_SELF']);
    } else {
      echo "Username already taken.";
    }
  }
?>



