<?php
include 'db.php';
$id = $_GET['upd'];
$sql = "SELECT * FROM `crud` WHERE Id='$id'";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();
$id = $id;
$name = $row['Name'];
$email = $row['Email'];
$mobile = $row['Mobile'];
$password = $row['Password'];

if (isset($_POST['submit']))
{
    echo 'fghh';
    $id = $_POST['Id'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $mobile = $_POST['Mobile'];
    $password = $_POST['Password'];
$sql = "UPDATE `crud` SET Name = '$name', Email = '$email', Mobile = '$mobile', Password ='$password' where id = '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    
    header("Location:view.php");
} else {
    echo "Error: " . $sql . "<br>" . $con;
}

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
        <form method="post">

        <div class="form-group">

                <label>Id</label>
                <input type="text" id="Id" class="form-control" readonly name="Id" placeholder="Enter your name" required autocomplete="off" value=<?php echo $id ?>>
            </div>

            <div class="form-group">

                <label>Name</label>
                <input type="text" id="name" class="form-control" name="Name" placeholder="Enter your name" required autocomplete="off" value=<?php echo $name ?>>
            </div>




            <div class="form-group">

                <label>Email</label>
                <input type="email" class="form-control" id="email" name="Email" placeholder="Enter your email" autocomplete="off" required value=<?php echo $email ?>>
            </div>
            <div class="form-group">

                <label>Mobile </label>
                <input type="number" class="form-control" id="mobile" name="Mobile" maxlength="10" placeholder="Enter your Mobile Number" autocomplete="off" required value=<?php echo $mobile ?>>
            </div>
            <div class="form-group">

                <label>Password</label>
                <input type="password" class="form-control" id="password" name="Password" placeholder="Enter your Password" autocomplete="off" required value=<?php echo $password ?>>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>





        </form>
    </div>
</head>

</html>