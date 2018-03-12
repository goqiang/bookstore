<?php
header("Content-type:text/html; charset=utf-8");
$orderID=$_GET['orderID'];
$con=new PDO("mysql:host=localhost;dbname=bookshop","root","");
$con->exec('set names utf8');
$sql="delete from orders where orderID=$orderID";
$con->exec($sql);
header("Location:listOrder.php");
?>

