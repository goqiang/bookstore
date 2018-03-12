<?php 
 $user=$_POST['user'];
 $pwd=$_POST['pwd'];
 $pwd=md5($pwd); 
 $con=new PDO('mysql:host=localhost;dbname=bookshop','root','');
 $con->exec('set names utf8');
 $sql="select count(*) from user where user=? and pwd=?";
 $stmt=$con->prepare($sql);
 $stmt->execute(array($user,$pwd));
 $records=$stmt->fetch(PDO::FETCH_NUM);
 $rows=$records[0];
 session_start();
 $refer=$_SESSION['refer'];
 header("Content-type:text/html;charset=utf-8");
 if($rows==1)
 {
  if(isset($_POST['autoLogin']))
  {
	setcookie("user",$user,time()+60*60*24*7);
	//setcookie(session_name(),session_id(),time()+60*60*24*7);
  }		  
  else
  {
	setcookie("user",$user);
  }  
  unset($_SESSION['refer']);
  header("refresh:3;url=$refer");
  echo("{$user}登录成功！3秒后将返回到您登录前所在的页面,您也可点<a href='$refer'>这里</a>立即跳转");	 
 }
 else
 {   
   $sql="select count(*) from user where user=?";
   $stmt=$con->prepare($sql);
   $stmt->execute(array($user));
   $records=$stmt->fetch(PDO::FETCH_NUM);
   $rows=$records[0];
   $loginError=$rows==0?0:1;  
   header("refresh:3;url=login-form.php?loginError=$loginError");
   echo("登录失败!3秒后将重新返回到登录页面,如果您现在不想登录，也可点<a href='$refer'>这里</a>返回到您登录前的页面,稍后再登录");  
 }	
?>