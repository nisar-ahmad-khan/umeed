<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'umeed';

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn){
   die(mysqli_error($conn));
}






?>