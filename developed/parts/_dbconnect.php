<?php
$server="localhost";
$username="root";
$password="";
$db="collegecatalyst";

$conn=mysqli_connect($server,$username, $password, $db);

if(!$conn){
    echo "Connection unsuccessful";
}
