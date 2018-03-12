<?php
  $user=$_GET["user"];  
  $con=new PDO('mysql:host=localhost;dbname=bookshop','root','');
  $con->exec('set names utf8');
  $sql="select * from user where user='$user'";
  $stmt=$con->query($sql);
  $rows=$stmt->rowCount();
  if($rows>0)
  {
   echo "0";
  }
  else
  {
   echo "1";
  }  
?>