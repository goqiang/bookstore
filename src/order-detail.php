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
    <link href="../css/order-detail.css" rel="stylesheet" type="text/css">
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
        <a href="listCart.php" id="buyCar">>我的购物车</a>
        <a href="listOrder.php" id="order">我的订单</a>
        </div>
    </div>
    <!--lowHeader.end-->
</header>
<!--header.end-->
<section>
<?php
	$orderID=$_GET['orderID'];
	$con=new PDO('mysql:host=localhost;dbname=bookshop','root','');
    $con->exec('set names utf8');	
    $sql="select orders.*,user.phone,user.address from orders inner join user on user.user=orders.user where orders.orderID=$orderID";
	$stmt=$con->query($sql);
	$record=$stmt->fetch(PDO::FETCH_ASSOC);
	$user=$record['user'];
	$datetime=$record['datetime'];
	$total=$record['total'];
	$deliverMode=$record['deliverMode'];
    $paymentMode=$record['paymentMode'];
	$datetime=$record['datetime'];	
	$address=$record['address'];
	echo "<table>";
	echo "<caption>订单号:$orderID</caption>";
    echo "<tr><td colspan='6' class='left-td'>收货人信息:<span>$user,$address</span></td></tr>";
	echo "<tr><td colspan='6' class='left-td'>下单时间:，<span>$datetime</span></td></tr>";
	echo "<tr><td colspan='6' class='left-td'>送货方式:<span>$deliverMode</span></td></tr>";
	echo "<tr><td colspan='6' class='left-td'>付款方式:<span>$paymentMode</span></td></tr>";
	echo "<tr><td colspan='6' class='product-list'>商品清单</td></tr>";
	echo "<tr><th>封面</th><th>书名</th><th>沪江价</th><th>数量</th><th>小计</th><th>操作</th></tr>";
    $sql="select suborders.count,book.bookID,book.bookName,book.cover,book.price,book.discount from suborders inner join book on suborders.bookID=book.bookID where suborders.orderID=$orderID";
	$stmt=$con->query($sql);
	$records=$stmt->fetchAll(PDO::FETCH_ASSOC);
	$total=0;
	foreach($records as $record)
	{
	  $bookID=$record['bookID'];
	  $count=$record['count'];
	  $bookName=$record['bookName'];
	  $cover=$record['cover'];
	  $price=$record['price'];
	  $discount=$record['discount'];
	  $sitePrice=round($price*$discount,2);
	  $subtotal=$count*$sitePrice;
	  $total=$total+$subtotal;
	  echo "<tr><td><a href='book.php?bookID=$bookID'><img src='$cover'></a></td><td><a href='book.php?bookID=$bookID'>$bookName</a></td><td>$sitePrice({$discount}折)</td><td>$count</td><td>$subtotal</td><td><a href='addToCart.php?bookID=$bookID'>再买一次</td></tr>";
	}
	echo "<tr><td colspan='6' class='total'>您需支付:<span>¥$total</span></td></tr>";
	echo "</table>";
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