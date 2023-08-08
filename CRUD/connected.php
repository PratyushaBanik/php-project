<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_crud";*/

$con=new mysqli('localhost', 'root', '', 'crudoperation');
if ($con) {
    echo "Connected";
} else {
    echo "Failed";
}
?>