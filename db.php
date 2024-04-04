<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "venkatesh prasad";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");
}else{
    echo "";
}
?>

