<?php
//以下为检测用户是否登录的代码，每个php文件都要用到
$userLoginOrNotInfo="<span>您好，欢迎来到沪江网店!</span>
                     <a href='login-form.php'>[登录]</a>
                     <a href='register-form.php'>[注册]</a>";
if(isset($_COOKIE['user']))
{
	$user=$_COOKIE['user'];
	$userLoginOrNotInfo="<span class='user'>$user</span>您好,欢迎来到沪江网店!<a href='logout.php'>退出</a>";
}
?>