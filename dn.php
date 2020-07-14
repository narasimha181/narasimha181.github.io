<?php

$server = "sql304.epizy.com";
$username = "epiz_26259368";
$password ="x7aKpygrKUz";
$dbname = "epiz_26259368_narasimhaofficial";


$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
?>