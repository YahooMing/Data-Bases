<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'baza_danych';

$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_errno)
{
    die("Connect error:<br>".$conn->connect_error."<br>");
}
?>