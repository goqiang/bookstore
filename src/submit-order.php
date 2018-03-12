<?php	
	$user=$_COOKIE['user'];
	$deliverMode=$_POST['deliverMode'];	
	$paymentMode=$_POST['paymentMode']; 
	$address=$_POST['address'];	   
    $total=$_POST['total'];
	$timestamp=time();	
	$datetime=date("Y-m-d,H:i:s",$timestamp);
	$con=new PDO('mysql:host=localhost;dbname=bookshop','root','');
    $con->exec('set names utf8');
	$sql="insert into orders values(null,'$user','$address',$total,'$deliverMode','$paymentMode','$datetime',default)";	
	$con->exec($sql);
	$orderID=$con->lastInsertId();
	$sql="insert into suborders values";
	$values='';
	session_start();
    $cart=$_SESSION['cart'];
	foreach($cart as $key=>$value)
	{	  $values=$values."(null,$key,$value,$orderID),";
	}
	$values=substr($values,0,strlen($values)-1);
	$sql=$sql.$values;	
    $con->exec($sql);   
	echo "<p>{$user}您好,感谢你提交订单,您的订单编号为:<strong>$orderID</strong>,我们将及时为您处理!您也可点击<a href='listOrder.php'>我的订单</a>进行查询</p>";	
    $_SESSION['cart']=array();   
  ?>
