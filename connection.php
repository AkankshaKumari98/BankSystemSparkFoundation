<?php 
$servername= "localhost";
$username= "root";
$password="";
$dbname= "dataweb";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
}
else
{
echo "connection failed".my_sqli_connect_error();
}
?>
