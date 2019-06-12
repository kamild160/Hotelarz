<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "aslan2011";
$dbName = "bazaprojekt";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if ($conn)
{ 
    echo "Connected";
}
else 
{
    die("Connection failed");
}

