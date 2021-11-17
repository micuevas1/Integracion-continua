<?php

//create connection
$conn = mysqli_connect("basededatos:3306", "root", "admin", "usuarios");

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successfully";
