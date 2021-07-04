<html>
<title>線上訂購</title>
<body style="background-color:powderblue;">
<form name="form" method="post" action="indexin.php">
<?php
include("mysql_connect.inc2.php");

$id = $_POST['id'];
$address = $_POST['address'];
$cpu = $_POST['cpu'];
$mb = $_POST['mb'];
$ram = $_POST['ram'];
$ssd = $_POST['ssd'];
$vga = $_POST['vga'];

if($id != null && $address != null )
{
        //新增資料進資料庫語法
        $sql = "insert into member_table (username, address, CPU, MB, RAM, SSD, VGA) values ('$id', '$address', '$cpu', '$mb', '$ram', '$ssd', '$vga')";
        if(mysql_query($sql))
        {
                echo '訂購成功!';
                echo $_POST['id']." 先生/小姐您好: <p>" ; 
				echo "感謝您訂購本公司產品<p>";
				echo "中央處理器：".$_POST['cpu'] ;
				echo "</br>主機板：".$_POST['mb'] ;
				echo "</br>固態硬碟：".$_POST['ssd'] ;
				echo "</br>記憶體：".$_POST['ram'] ;
				echo "</br>顯示卡：".$_POST['vga'] ;
				echo "<p>貨品將於三日內送達 ".$_POST['address']."<p>" ;
        }
        else
        {
                echo '訂購失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=indexin.php>';
        }
}
else
{
        echo '輸入錯誤，請重新輸入!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=buy.php>';
}


	
?>
<input type="submit" name="button" value="確定" />
	</body>
	</html>