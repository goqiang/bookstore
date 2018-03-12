  <?php
  if(isset($_GET['registerError'])) 
  {
    $welcome="非常抱歉,您刚才的注册出现错误,请重新注册";
  }
  else
  {
   $welcome="新用户注册";   
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
       <link href="../css/css_nav/nav.css"  rel="stylesheet" type="text/css">
       <link href="../css/register-login.css" rel="stylesheet" type="text/css">

       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
       <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->
   </head>
   <body>
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
           <form  action="search.php" method="get" id="searchForm">
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
       <!--横导航栏.end-->

     <section>
	           <form action="register.php" method="post"   class="loginForm" role="form" onsubmit="return validForm();">
                <fieldset>
                <legend>
                <?php
                    echo "<h2>$welcome</h2>";
                 ?>
                </legend>
                 <div class="input-group">
                 <span class="input-group-addon" onclick="validForm();">用户名</span>
                 <input type="text" name="user"  id="user" size="20" required class="form-control" placeholder="邮箱/昵称/手机号码">
                 </div></br>
                 <div class="input-group">
                   <span class="input-group-addon">请设置密码</span>
                   <input type="password" name="pwd" id="pwd" size="20" required class="form-control" placeholder="密码">
                 </div></br>
                 <div class="input-group">
                    <span class="input-group-addon">请确认密码</span>
                    <input type="password" name="conformPwd"  id="conformPwd" size="20" required class="form-control" >
                 </div></br>
                 <div class="input-group">
                      <span class="input-group-addon">联系手机</span>
                      <input type="tel" name="phone"  id="phone" size="20" pattern="^1[345678][0-9]{9}$" required class="form-control" >
                 </div></br>
                 <div class="input-group">
                       <span class="input-group-addon">收货地址</span>
                       <input type="text" name="address"  size="40" required class="form-control" >
                 </div></br>
                 <input type="submit" name='login' value="注&nbsp;&nbsp;册"  class="login">
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
	<script src="../js/validForm.js" type="text/javascript"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/js_nav/index_v20.js"></script>
    <script src="../js/js_carousel/slide.js" type="text/javascript"></script>
    
    <!--<script src="scripts/execFrame.js"></script>-->
    </body>
    </html>