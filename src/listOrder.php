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
    <link href="../css/carousel.css" rel="stylesheet" type="text/css">
    <link href="../css/listOrder.css" rel="stylesheet" type="text/css">

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
<?php
 require "includes/check-user.php";
 require "includes/listOrder-search.php";
	if(!isset($_COOKIE['user']))
	{ 
	  header("location:login-form.php");
	}
      $user=$_COOKIE['user'];
      $sql="select count(*) from  orders where user='$user'";
      $orderRows=getOrderRows($sql);
      $orderPageSize=3;
      $orderPage=isset($_GET['orderPage'])? $_GET['orderPage']:1;
      outputOrderInfo($orderRows,$orderPage,$orderPageSize);
      if($orderRows>0)
      {
         $orderOffset=($orderPage-1)*$orderPageSize;
         $orderPageSql="select * from  orders where user='$user' limit $orderOffset,$orderPageSize";
         echo "<table>";
         echo "<tr class='thead'><th>商品信息</th><th>实付款</th><th>订单信息</th><th>下单时间</th><th>订单状态</th><th>操作</th></tr>";
         $orderPageRecords=getOrderPageRecords($orderPageSql);
         outputOrders($orderPageRecords);
         echo "</table>";
      }
      if($orderRows>$orderPageSize)
      {
          $orderPages=ceil($orderRows/$orderPageSize);
          outputOrderNav($orderPages,$orderPage);
      }
  ?>
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
<script type="text/javascript">
    var target = ["pic-01","pic-02","pic-03","pic-04","pic-05","pic-6","pic-07"];
</script>
<!--<script src="scripts/execFrame.js"></script>-->
</body>
</html>
   