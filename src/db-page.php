 <?php
header("Content-type:text/html; charset=utf-8");
class DB
{
  private $con;
  public function __construct($dbname)
  {
   $this->con=new PDO("mysql:host=localhost;dbname=$dbname","root","");
   $this->con->exec('set names utf8');
  }
  public function exec($sql)
  {
   return $this->con->exec($sql);
  }
  public function query($sql)
  {
   $stmt=$this->con->query($sql);
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public function getRows($sql)
  {
   $stmt=$this->con->query($sql); 
   return $stmt->fetch(PDO::FETCH_NUM)[0];   
  }
}
class Paging
{
  public $pageSize;
  public $page;
  public $rows;
  public $pages;
  public $offset;
  public $nextPage;
  public $previousPage;
  public function __construct($pageSize,$page,$rows)
  {
   $this->pageSize=$pageSize;
   $this->page=$page;
   $this->rows=$rows;
   $this->pages=ceil($this->rows/$this->pageSize);
   $this->offset=($this->page-1)*$this->pageSize; 
   $this->nextPage=$this->page+1;
   $this->previousPage=$this->page-1;
  }  
}

$page=(isset($_GET['page']))?$_GET['page']:1;
$pageSize=5;
$db=new DB("bookshop");
$sql="select count(*) from book";
$rows=$db->getRows($sql);
$paging=new Paging($pageSize,$page,$rows);
echo "<p>共{$rows}行,每页{$pageSize}行,共{$paging->pages}页,当前为第{$page}页</p>";
$pageSql="select * from book limit $paging->offset,$pageSize";
$pageRecords=$db->query($pageSql);
foreach($pageRecords as $record)
{
	var_dump($record);
}
if($paging->previousPage<1)
{
	echo "<span>上一页</span>";
}
else
{
	echo "<a href='db-page.php?page=$paging->previousPage'>上一页</a>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;<span>$page</span>&nbsp;&nbsp;&nbsp;&nbsp;";
if($paging->nextPage>$paging->pages)
{
	echo "<span>下一页</span>";
}
else
{
	echo "<a href='db-page.php?page=$paging->nextPage'>下一页</a>";
}
?>