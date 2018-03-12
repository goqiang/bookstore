<?php
 $bookID=$_GET['bookID'];
 session_start(); 
 unset($_SESSION['cart'][$bookID]);   
 header("Location:listCart.php"); 
?>