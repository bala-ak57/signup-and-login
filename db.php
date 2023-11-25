<?php
$con=mysqli_connect("localhost", "root", "", "register");
if(mysqli_connect_error())
{
    echo "Failed To Connect MYSQL:" . mysqli_connect_error();
}
?>