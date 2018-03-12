  <?php
  if(isset($_GET['loginError'])) 
  {    
	$welcome=$_GET['loginError']==0?'用户名不存在,请输入正确的用户名重新登录!':'密码错误,请输入正确的密码重新登录！';	 
  }
  else
  {
   $welcome="用户登录";   	
   if(isset($_SERVER['HTTP_REFERER']));
   {
	session_start();
	$_SESSION['refer']=$_SERVER['HTTP_REFERER'];
   }
  }  
  ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="沪江网店 IT 计算机 信息技术">
    <meta name="Description" content="专营计算机类的书籍">
    <title>模仿网站</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/global.css"  rel="stylesheet">
    <link href="../css/register-login.css"  rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--header.start-->
<header>
    <div class="topHeader">

        <div class="topHeader-right">
        <?php
	    require "includes/check-user.php";
	    echo $userLoginOrNotInfo;
        ?>
        <a href="#">帮助</a>
        </div>
    </div>
    <!--topHeader.end-->
    <div class="lowHeader" id="lowHeader">
        <a href="index.php"><img src="../images/logo.gif"></a>
        <form  id="searchForm" action="search.php" method="get">
            <input type="search" name="search-value" size="40" required>
            <select name="search-type">
                <option value="bookName" selected>书名</option>
                <option value="type">类型</option>
                <option value="author">作者</option>
                <option value="publishor">出版社</option>
                <option value="content">内容</option>
            </select>
            <input type="submit" value="搜索">
        </form>
        <div id="lowHeader-right">
        <a href="listCart.php" id="buyCar">我的购物车</a>
        <a href="listOrder.php" id="order">我的订单</a>
        </div>
    </div>
    <!--lowHeader.end-->
</header>
<!--header.end-->
<div>
    <nav>
        <div id="nav_1" class="nav_1">
            <div class="categoryClass pull-left">商品分类</div>
            <ul>
                <li>
                    <a id="drop4"  data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="drop4" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">web后端<b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="drop4" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">web后端<b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="drop4" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">web后端<b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="drop4" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">web后端<b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="drop4" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">web后端<b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="drop5" role="button" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">web后端<b class="caret"></b></a>
                    <ul id="menu2" class="dropdown-menu" aria-labelledby="drop5">
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                        <li><a href="query.php?type=php" target='_blank'>PHP</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="nav_2" class="nav_2">
            <ul>
                <li><a href="#">尾品汇</a></li>|
                <li><a href="#">图书</a></li>|
                <li><a href="#">网络文学</a></li>|
                <li><a href="#">服装</a></li>|
                <li><a href="#">尾品汇</a></li>|
                <li><a href="#">图书</a></li>|
                <li><a href="#">网络文学</a></li>|
                <li><a href="#">服装</a></li>|
                <li><a href="#">家园</a></li>
                <li>海外购</li>
            </ul>
        </div>
    </nav>
</div>
<section>

       <form action="login.php" method="post" class="loginForm"  role="form">
         <fieldset>
         <legend>
         <?php
             echo "<h2>$welcome</h2>";
          ?>
         </legend>
          <div class="input-group">
          <span class="input-group-addon"><img src="../images/用户.png"></span>
          <input type="text" name="user"  id="user" size="20" required class="form-control" placeholder="邮箱/昵称/手机号码">
          </div></br>
          <div class="input-group">
        <span class="input-group-addon"><img src="../images/验证码.png"></span>
        <input type="password" name="pwd"  id="pwd" size="20" required class="form-control" placeholder="密码">
        </div></br>
          <input type='checkbox' name='autoLogin'  value='autoLogin' ><label>&nbsp;七天之内自动登录</label><br><br>
          <input type="submit" name='login' value="登&nbsp;&nbsp;录"  class="login">
         </fieldset>
       </form>
</section>
    <footer>
        <div class="container">
            <div class="row">
            <a href="index.html">首页</a>|
            <a href="#">帮助</a>|
            <a href="#">我的帐户</a>|
            <a href="#">我的购物车</a>|
            <a href="#">广告服务</a>|
            <a href="#">合作伙伴</a><br>
            <span>Copyright &#169;2015 - 2017版权陈高强所有</span>
            </div>
        </div>
    </footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/js_nav/index_v20.js"></script>
    <script src="../js/js_carousel/slide.js" type="text/javascript"></script>
    </body>
    </html>