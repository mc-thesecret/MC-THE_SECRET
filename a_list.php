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
<form method="post" name="mainform">
<input type="hidden" name="act" value="">
<input type="hidden" name="subact" value="">
<?

if(isset($_POST['act']) && $_POST['act'] == "delete")
{
	if($_POST["subact"] == "1")
	{
		$error = redBox("ไม่สามารถลบชื่อผู้ใช้นี้ได้.");
	}
	if($error != "")
	{
		echo "<tr><td>";
		echo $error;
		echo "</td></tr></table><hr>";
		exit();
	}
	$strSQL1 = "SELECT * FROM authme WHERE id = '".$_POST["subact"]."'";
	$objQuery1 = mysql_query($strSQL1);
	$objResult1 = mysql_fetch_array($objQuery1);
	if($objResult1['status'] == "admin")
	{
		$error = redBox("ไม่สามารถลบชื่อผู้ใช้นี้ได้.");
	}
	if($error != "")
	{
		echo "<tr><td>";
		echo $error;
		echo "</td></tr></table><hr>";
		exit();
	}
	if($objResult1)
	{
		if($_POST['act'] == "delete")
		{
			$strSQL = "DELETE FROM authme WHERE username = '".$objResult1['username']."'";
			$objQuery = mysql_query($strSQL);
			if($objQuery)
			{
				$strSQL = "DELETE FROM iconomy WHERE username = '".$objResult1['username']."'";
				$objQuery = mysql_query($strSQL);
				if($objQuery)
				{
					$error = greenBox("ชื่อผู้ใช้ ".$objResult1['username']." ถูกลบเรียบร้อย.","0");
					echo "<tr><td>";
					echo $error;
					echo "</td></tr></table><hr>";
					exit();
				}
			}
		}
	}
}
if(isset($_POST['act']))
{
	$strSQL1 = "SELECT * FROM authme WHERE id = '".$_POST["subact"]."'";
	$objQuery1 = mysql_query($strSQL1);
	$objResult1 = mysql_fetch_array($objQuery1);
	if($objResult1)
	{
		if($_POST['act'] == "editsend")
		{
			$strSQL = "UPDATE authme SET points = '".$_POST["points"]."' WHERE id = '".$_POST["subact"]."'";
			$objQuery = mysql_query($strSQL);
			$strSQL2 = "UPDATE authme SET status = '".$_POST["status"]."' WHERE id = '".$_POST["subact"]."'";
			$objQuery2 = mysql_query($strSQL2);
			if($objQuery and $objQuery2)
			{ 
				$error = greenBox("เปลี่บยข้อมูล ".$objResult1['username']." เรียบร้อย.","0");
				echo "<tr><td>";
				echo $error;
				echo "</td></tr></table><hr>";
				exit();
			}
		}
		if($_POST['act'] == "delete" && $_POST["subact"] != "1")
		{
			$strSQL = "DELETE FROM authme WHERE username = '".$objResult1['username']."'";
			$objQuery = mysql_query($strSQL);
			if($objQuery)
			{
				$strSQL = "DELETE FROM iconomy WHERE username = '".$objResult1['username']."'";
				$objQuery = mysql_query($strSQL);
				if($objQuery)
				{
					$error = greenBox("ชื่อผู้ใช้ ".$objResult1['username']." ถูกลบเรียบร้อย.","0");
					echo "<tr><td>";
					echo $error;
					echo "</td></tr></table><hr>";
					exit();
				}
			}
		}
	}
}
?>

	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-home"></span> วิธีหาชื่อผู้เล่นง่ายๆ</div>
    <div class="panel-body">
<center>เพื่อหาข้อมูลชื่อผู้เล่นได้ง่ายขึ้นให้ กด Ctrl+F ครับ แล้วก็พิมข้อมูลทีต้องการหาครับ</center>

<?
$strSQL = "SELECT * FROM authme";
$objQuery = mysql_query($strSQL);
?>
<tr height="30">
<th>ชื่อตัวละคร</th>
<th>จำนวนพ้อย</th>
<th>สถานะ</th>
<th>ตัวเลือก</th>
</tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
	if($objResult["id"] == $_POST["subact"] and $_POST["act"] == "edit")
	{
?>
<!--editing table-->
<tr>
<td><?=$objResult["username"];?></td>
<td><input type="text" name="points"></td>
<td>
<select class="input-small" name="status">
<?
	if($objResult["status"] == "admin")
	{
		$oppo_status = "member";
	}
	if($objResult["status"] == "member")
	{
		$oppo_status = "admin";
	}
?>
<option value="<?=$objResult["status"];?>" selected><?=$objResult["status"];?></option>
<option value="<?=$oppo_status;?>"><?=$oppo_status;?></option>
</select>
</td>
<td><input class="btn btn-success" type="button" value="ยืนยัน" onclick="mainform.act.value='editsend';mainform.subact.value='<?=$objResult["id"];?>';mainform.submit();">
<input class="btn btn-warning" type="button" value="ยกเลิก" onclick="window.location='a_list.php'"></td>
</tr>
<?
	}
	else
	{
?>
<!--normal table-->
<tr>
<td><?=$objResult["username"];?></td>
<td><?=$objResult["points"];?></td>
<td><?=$objResult["status"];?></td>
<td>
<input class="btn btn-warning" type="button" value="เเก้ไข" onclick="mainform.act.value='edit';mainform.subact.value='<?=$objResult["id"];?>';mainform.submit();">
<input class="btn btn-danger" type="button" value="ลบทิ้ง" onclick="mainform.act.value='delete';mainform.subact.value='<?=$objResult["id"];?>';mainform.submit();">
</td>
</tr>
<?
	}
}
?>
</form>
</table>

	
</div>
</div>

</div>
</body>
</html>
