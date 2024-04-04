<?php
include "db.php";
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = "DELETE FROM crud WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        // echo 'deleted successfully';
    header("Location:view.php");
    } else {
        echo "Error deleting record: " .$con->error;;
      }  
}
?>