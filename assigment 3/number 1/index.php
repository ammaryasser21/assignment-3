
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
    

    <form class="form-control position-absolute top-50 start-50 translate-middle" style="width: 50%;" action="submit.php" method="post" enctype="multipart/form-data">
    <label class="form-label" for="title">Title:</label>
    <input class="form-control" type="text" id="title" name="title">
    <br>
    <label class="form-label" for="quantity">Quantity:</label>
    <input class="form-control" type="number" id="quantity" name="quantity">
    <br>
    <label class="form-label" for="img">Image:</label>
    <input class="form-control" type="file" id="img" name="img">
    <br>
    <label class="form-label" for="price">Price:</label>
    <input class="form-control" type="number" id="price" name="price">
    <br>
    <button class="btn btn-primary" type="submit" value="Add Product" name="submit">submit</button>
</form>
 
    </body>
</html>