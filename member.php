<title>會員中心</title>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body style="background-color:powderblue;">
<?php
include("mysql_connect.inc.php");
echo '<a href="logout.php">登出</a>  <br><br>';
echo '<a href="indexin.php">返回首頁</a>  <br><br>';

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['username'] != null)
{
        echo '<a href="update.php">修改個人資料</a>    ';
        
    
       
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>