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
<form method="post" name="mainform">
<input type="hidden" name="act" value="" />
<input type="hidden" name="sub_act" value="" />
 <table class="table table-bordered table-condensed table-hover">
<?
if(isset($_POST['act']) && $_POST['act'] == 'delete')
{
	$strSQL = "DELETE FROM shop WHERE id = '".$_POST['sub_act']."'";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
			$error = greenBox("ลบเรียบร้อย.","a_shop.php");
			echo "$error";
			exit();
	}
}
?>
<?
$strSQL = "SELECT * FROM shop";
$objQuery = mysql_query($strSQL);
?>
<tr><th>ชื่อสินค้า</th><th>ราคา</th><th>เซิฟเวอร์</th><th>ตัวเลือก</th></tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
	if($objResult["id"])
{
?>
<tr height="20">
<td align="center"><?=$objResult["name"];?></td>
<td align="center"><?=$objResult["price"];?></td>
<td align="center"><?=$objResult["ser"];?></td>
<td align="center">
<input class="btn btn-danger" type="button" value="delete" onclick="mainform.act.value='delete';mainform.sub_act.value='<?=$objResult["id"];?>';mainform.submit();">
</td>
</tr>
<?
}
}
?>
</table>
</form>
	
</div>
</div>

</div>
</body>
</html>
