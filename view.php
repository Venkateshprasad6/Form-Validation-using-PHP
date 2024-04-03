<?php
include "db.php";
?>
<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="style.css"> -->

  <title>CRUD</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<body>

  <div class="container">
    <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a>

    </button>
    <table class="table">
      <thead>
        <tr>
          <!-- //<th scope="col">Id</th> -->
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM crud";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id  = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            echo '<tr>
           <th scope="row"> ' . $id  . ' </th>
          <td>'  .$name. '</td>
          <td>' .$email . '</td>
          <td>' .$mobile. '</td>
          <td>' .$password. '</td>
          ';
          }
        }

        ?>
<button class="btn btn-success"><a href="update.php? upd='.$id.'"class = "text-light">Update</a></button>
<button  class="btn btn-danger " ><a href="delete.php? del=' . $id  . '" class = "text-light">Delete</a></button>
      </tbody>
    </table>
  </div>
</body>
</head>

</html>