<body style="background-color:powderblue;">
<title>電腦選購網</title>

<?php

 
@$nowcnt=$_COOKIE['cnt'];
$nowcnt++;
  setcookie("cnt",$nowcnt,time()+999999999);

  echo "您是第$nowcnt 次光臨本站 <br>";
	header("refresh:3;url=indexi.php");
	print('正在載入，請稍等...三秒後自動跳轉至首頁。');
  ?>
