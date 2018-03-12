<?php
require "includes/check-user.php";
session_start();
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
    <link href="../css/carousel.css" rel="stylesheet" type="text/css">
    <link href="../css/cart.css" rel="stylesheet" type="text/css">

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
<div id="cart">
<?php
function listCart() 
{

 if(!isset($_SESSION["cart"]) or empty($_SESSION["cart"]))
 {
   echo "<p class='cartPrompt'>您的购物车是空的,您还没有选购图书!</p>";
 }
 else
 {
   $cart=$_SESSION["cart"];
   $IDArray=array_keys($cart);
   $IDSet=implode(',',$IDArray);
   $sql="select bookID,cover,bookName,price,discount from book where bookID in ($IDSet)";
   $con=new PDO('mysql:host=localhost;dbname=bookshop','root','');
   $con->exec('set names utf8');
   $stmt=$con->query($sql);
   $records=$stmt->fetchAll(PDO::FETCH_ASSOC);
   $counts=0;
   $total=0;	
   echo "<p class='listInfo'>你购物车中的图书详情如下:</p>";
   echo "<table>";	      
   echo "<tr class='thead'><th>封面</th><th>书名</th><th>单价</th><th>数量</th><th>小计</th><th>操作</th></tr>";   
   foreach($records as $record)
   {
      $bookID=$record['bookID'];
      $count=$cart[$bookID];
      $bookName=$record['bookName'];
      $cover=$record['cover'];
      $discount=$record['discount'];
      $price=$record['price'];
      $sitePrice=round($price*$discount,2);	   
      $subtotal=round($sitePrice*$count,2);
      $counts=$counts+$count;
      $total=$total+$subtotal;     
      echo "<tr>";
      echo "<td><img src='{$cover}'></td>";
	  echo "<td class='bookName'>{$bookName}</td>";
	  echo "<td><span class='price'>$sitePrice</span>({$discount}折)</td>";
	  echo "<td class='changeCart'><input type='number' min='1'  value='$count' bookID='$bookID' preCount='$count' sitePrice='$sitePrice'></td>";
      echo "<td class='subtotal'>$subtotal</td>";
      echo "<td><a href='removeFromCart.php?bookID=$bookID'>删除</a></td>";
      echo "</tr>";
   }
   echo "</table>";
   echo "<p class='total-empty-checkout'>
	<span id='preTotalCount' class='counts'>$counts</span>本图书应付总额:<span id ='total' class='total'>$total</span><br/>
	<a href='emptyCart.php'>清空购物车</a><a href='checkout.php' class='checkout'>结算</a>
         </p>";
  }       	 
}
listCart();
?>
</div>
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
<script src="../js/updateCart.js" type="text/javascript"></script>
<!--<script src="scripts/execFrame.js"></script>-->
</body>
</html>

