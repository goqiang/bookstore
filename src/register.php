 <?php    
  $user=$_POST['user'];
  $pwd=$_POST['pwd'];
  $pwd=md5($pwd);	  
  $phone=$_POST['phone'];
  $address=$_POST['address'];  
  $con=new PDO('mysql:host=localhost;dbname=bookshop','root','');
  $con->exec('set names utf8'); 
  $sql="insert into user values(?,?,?,?)";
  $stmt=$con->prepare($sql);
  $stmt->execute(array($user,$pwd,$phone,$address));
  $row=$stmt->rowCount();
  session_start();
  $refer=$_SESSION['refer'];
  header("Content-type:text/html;charset=utf-8");
  if($row==1)
  {		 
	unset($_SESSION['refer']);
	setcookie("user",$user);	
	header("refresh:3;url=$refer");
    echo("注册成功,欢迎{$user}成为本站的会员！,3秒后将返回到您注册前所在的页面,您也可点<a href='$refer'>这里</a>立即返回");	  
  }
  else
  {
    header("refresh:3;url=register-form.php?registerError=1");
    echo("注册失败!3秒后将重新返回到注册页面,如果您现在不想注册，也可点<a href='$refer'>这里</a>返回到您注册前的页面,稍后再注册"); 
  }
 ?> 