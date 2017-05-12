<?
session_start();
require_once("sys/func_connect.php");
require_once("sys/func_static.php");
pageperm("admin");
head("index");
?>
<div class="col-md-9">
	<div class="panel panel-default">
    <div class="panel-body">
 <table class="table table-bordered table-condensed table-hover">
<tr><th>ชื่อตัวละคร</th><th>รายละเอียด</th><th>วัน / เดือน / ปี | เวลาสั่งซื้อ</th></tr>
<?
$logSQL = "SELECT * FROM log";
$logobjQuery = mysql_query($logSQL);
while($logobjResult = mysql_fetch_array($logobjQuery))
{
?>
<tr>
<td><span class="badge"><?=$logobjResult["username"];?></span></td>
<td>สินค้า : <span class="badge"><?=$logobjResult["info"];?></span> ราคา : <span class="badge"><?=$logobjResult["info2"];?></span></td>
<td><span class="badge"><?=$logobjResult["date"];?></span></td></tr>
<?
}
?>
</table>
	
</div>
</div>

</div>
</body>
</html>
