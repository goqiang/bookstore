<?php
 $bookID=$_GET['bookID'];
 $count=$_GET['count'];
 session_start();
 $_SESSION['cart'][$bookID]=$count;  
?>
