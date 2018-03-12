<?php
setcookie("user",'',time()-1);
$refer=$_SERVER['HTTP_REFERER'];
header("location:$refer");	  
?>
  