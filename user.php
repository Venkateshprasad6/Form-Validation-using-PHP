<?php
include 'db.php';
if (isset($_POST['submit']))
  //$id = $_POST['id'];
  $name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$sql = "INSERT INTO crud ( name, email, mobile, password) VALUES ('$name', '$email','$mobile','$password')";
$result = mysqli_query($con, $sql);
if ($result) {
  echo 'Inserted successfully';
  //header("Location:view.php");
} else {
  echo "Error: " . $sql . "<br>" . $con;
}


?>

<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <title>CRUD</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <div class="container">
    <form action="view.php" method="post">

      <div class="form-group">

        <label>Name</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" required>
      </div>




      <div class="form-group">

        <label>Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autocomplete="off" required>
      </div>
      <div class="form-group">

        <label>Mobile </label>
        <input type="number" class="form-control" id="mobile" name="mobile" maxlength="10" placeholder="Enter your Mobile Number" autocomplete="off" required>
      </div>
      <div class="form-group">

        <label>Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" autocomplete="off" required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>





    </form>
  </div>
</head>

</html>