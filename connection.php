<?php 
$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'iwt-vb';

$conn = mysqli_connect($hostname, $user, $password, $database);

if($conn){
    echo 'Connection OK';
}else{
    echo 'Connection failed';
}

?>