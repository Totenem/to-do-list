<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "todo_rpg";


$conn = mysqli_connect($host, $db_user, $db_password, $db_name,);
if (!$conn) {
    die("Error Database Connection");
}


?>