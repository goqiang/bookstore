<?php
//根据查询条件获取满足的订单信息
function getOrderPageRecords($orderPageSql)
    {
        $con=new PDO('mysql:host=localhost;dbname=bookshop','root','');
        $con->exec('set names utf8');
        $stmt=$con->query($orderPageSql);
        $records=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records;
    }


function  getOrderRows($sql)
    {
         $con=new PDO("mysql:host=localhost;dbname=bookshop","root","");
         $con->exec('set names utf8');
         $stmt=$con->query($sql);
         $stml=$stmt->fetch(PDO::FETCH_NUM);
         $orderRows=$stml[0];
         return  $orderRows;
   }

function outputOrders($records)
      {
        foreach($records as $record)
        {
          $orderID=$record['orderID'];
          $total=$record['total'];
          $deliverMode=$record['deliverMode'];
          $paymentMode=$record['paymentMode'];
          $datetime=$record['datetime'];
          $orderState=$record['orderState'];
          echo "<tr><td colspan='6' class='orderID'>订单号:<a href='order-detail.php?order=$orderID'>$orderID</a></td></tr>";
          $con=new PDO("mysql:host=localhost;dbname=bookshop","root","");
          $sql="select bookID,cover from book where bookID in(select bookID from suborders where orderID=$orderID)";
          $stmt=$con->query($sql);
          $records=$stmt->fetchAll(PDO::FETCH_ASSOC);
          $imgs='';
          foreach($records as $record)
          {
            $bookID=$record['bookID'];
            $cover=$record['cover'];
//            echo"$cover";
            $imgs="$imgs<a href='book.php?bookID=$bookID'><img src='$cover'/></a>";
          }
          echo "<tr><td class='imgs'>$imgs</td><td>$total</td><td>$deliverMode<br>$paymentMode</td><td>$datetime</td><td>$orderState<br><a href='order-detail.php?orderID=$orderID'>订单详情</a></td><td id='removeOrder'><a href='removeOrder.php?orderID=$orderID'>删除订单</a></td></tr>";
        }
      }
function outputOrderInfo($orderRows,$orderPage,$orderPageSize)
       {
              if($orderRows==0)
              {
               echo "<p>对不起,你没有订单，请创建订单！</p>";
              }
              else
              {
               $orderPages=ceil($orderRows/$orderPageSize);
               echo "<p class='info'>你总共{$orderRows}个订单,每页显示{$orderPageSize}个订单,共{$orderPages}页,当前为第{$orderPage}页</p>";
              }
       }

  //输出分页导航
function outputOrderNav($orderPages,$orderPage)
{
       $previousOrderPage=$orderPage-1;
       $nextOrderPage=$orderPage+1;
       $previousOrderPageNav=($previousOrderPage<=0)?'<span>上一页</span>':"<a href='listOrder.php?orderPage=$previousOrderPage'>上一页</a>";
       $orderPageInfo="<span>$orderPage</span>";
       $nextOrderPageNav=($nextOrderPage>$orderPages)?'<span>下一页</span>':"<a href='listOrder.php?orderPage=$nextOrderPage'>下一页</a>";
       echo "<p class='page-nav'>$previousOrderPageNav&nbsp&nbsp$orderPageInfo&nbsp&nbsp$nextOrderPageNav</p>";
}
?>

