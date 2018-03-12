<?php
/*以下是书籍列表、搜索展示和分页导航用的函数,query.php和search.php要用到*/
function  getRows($sql)
{  
 $con=new PDO("mysql:host=localhost;dbname=bookshop","root","");
 $con->exec('set names utf8'); 
 $stmt=$con->query($sql); 
 $stml=$stmt->fetch(PDO::FETCH_NUM);
 $rows=$stml[0];
 return $rows;
}

function outputQueryInfo($rows,$page,$pageSize)
{
  if($rows==0)
  {
   echo "<p>对不起,本站暂时还没有你要检索的书籍</p>";		
  }
  else
  {
   $pages=ceil($rows/$pageSize);	
   echo "<p class='info'>共为你捡索到{$rows}本书,每页显示{$pageSize}本,共{$pages}页,当前为第{$page}页</p>";
  }
}

function  getPageRecords($pageSql)
{ 
  $con=new PDO("mysql:host=localhost;dbname=bookshop","root","");
  $con->exec('set names utf8'); 
  $stmt=$con->query($pageSql); 
  $pageRecords=$stmt->fetchAll(PDO::FETCH_ASSOC); 
  return $pageRecords;
}
 //输出当前页的书籍列表
 function outputBooks($pageRecords)
 {  
  foreach($pageRecords as $record)
  {
  	 extract($record);
	 $sitePrice=round($price*$discount,2);
     $omitContent=(mb_strlen($content,'utf-8')>75)?mb_substr($content,0,75,'utf8') . "......":$content;   
     echo "<div class='book-list'>";
     echo "<a href='book.php?bookID=$bookID' target='_blank'><img src='$cover' /></a>";
	 echo "<p>";
     echo "<a href='book.php?bookID=$bookID'  target='_blank' class='book-name'>$bookName</a><br>";
	 echo "<span class='site-price'>¥$sitePrice</span>&nbsp;&nbsp;<del >¥$price</del><span class='discount'>($discount)</span><br>"; 
     echo "<span>[$author &nbsp;&nbsp;$publishDate &nbsp;&nbsp; $publisher]</span><br>";
     echo "<span>$omitContent</span><br>"; 
     echo "<a href='addToCart.php?bookID=$bookID' target='_blank' class='cart'>加入购物车</a>";
     echo "</p>";    
     echo "</div>";
   }
  }
  //输出底部的页面导航条
  function outputNav($pages,$page,$target)
  {   
   $previousPage=$page-1; 
   $nextPage=$page+1;
   $previousPageNav=($previousPage<=0)?'<span>上一页</span>':"<a href='$target&page=$previousPage'>上一页</a>";
   $pageInfo="<span>$page</span>";
   $nextPageNav=($nextPage>$pages)?'<span>下一页</span>':"<a href='$target&page=$nextPage'>下一页</a>";   
   echo "<p class='page-nav'>$previousPageNav$pageInfo$nextPageNav</p>";  
  }

  //book.php文件要用到.根据给定的书籍的bookID，查询并输出该书的信息.
  function outputBook($bookID)
  { 
	$con=new PDO('mysql:host=localhost;dbname=bookshop','root','');
    $con->exec('set names utf8');
    $sql="select * from book where bookID=?";
	$stmt=$con->prepare($sql);
    $stmt->bindParam(1,$bookID);
	$stmt->execute();
	$record=$stmt->fetch(PDO::FETCH_ASSOC);
	extract($record);
	$sitePrice=round($price*$discount,2);
	echo "<article>";
    echo "<h2>$bookName</h2>";
	echo "<img src='$cover' />";           
    echo "<table>";    
    echo "<tr><td>沪江价</td><td><span class='site-price'>¥$sitePrice</span><span class='discount'>($discount)</span></td></tr>";  
    echo "<tr><td>定价</td><td><del>¥$price</del></td></tr>"; 
    echo "<tr><td>作者</td><td>$author</td></tr>";
    echo "<tr><td>出版社</td><td>$publisher</td></tr>";
    echo "<tr><td>出版时间</td><td>$publishDate</td></tr>";
    echo "<tr><td>ISBN</td><td>$ISBN</td></tr>";
    echo "<tr><td>版次</td><td>$edition</td></tr>";
    echo "<tr><td>页数</td><td>$pages</td></tr>";
    echo "<tr><td>开本</td><td>$bookSize</td></tr>";    
    echo "</table>";	
	echo "<a href='addToCart.php?bookID=$bookID' target='_blank' class='cart'>加入购物车</a>";
    echo "<p>$content</p>";
    echo "</article>";
  }	 
 ?>     