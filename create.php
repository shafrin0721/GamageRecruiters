<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $age = $_POST['age'];
        $status = $_POST['status'];
        $insert = " INSERT INTO `students`(`id`,`name`, `image`, `age`, `status`) VALUES ( '$id','$name', '$image', '$age', '$status' )";

        $query = mysqli_query($conn,$insert);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php" aria-current="page"><span style="font-size:larger;" >Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Member </h1>
 </div><br>

 <label> ID: </label>
 <input type="number" name="id" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> IMAGE: </label>
 <input type="file" name="image" class="form-control"> <br>

 <label> AGE: </label>
 <input type="number" name="age" class="form-control"> <br>

 <label> STATUS: </label>
 <input type="text" name="status" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>