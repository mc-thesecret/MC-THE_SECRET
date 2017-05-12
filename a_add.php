<?
session_start();
require_once("sys/func_connect.php");
require_once("sys/func_static.php");
pageperm("admin");
head("index");
?>
<div class="col-md-9">
<?
if(isset($_POST['act']) && $_POST['act'] == 'confirm')
{
	if(!isset($_POST['i_name']) || $_POST['i_name'] == "")
	{
		$error = redBox("กรุณาใส่ชื่อสินค้า.");
	}
	if(!isset($_POST['i_pic']) || $_POST['i_pic'] == "")
	{
		$error = redBox("กรุณาใส่ลิ้งรูปภาพ.");
	}
	if(!isset($_POST['i_price']) || $_POST['i_price'] == "")
	{
		$error = redBox("กรุณาใส่ราคา.");
	}
	if(!isset($_POST['i_amount']) || $_POST['i_amount'] == "")
	{
		$error = redBox("กรุณาใส่จำนวน.");
	}
	if(!isset($_POST['i_info']) || $_POST['i_info'] == "")
	{
		$error = redBox("กรุณาใส่รายละเอียด.");
	}
	if($error != "")
	{
		echo "$error <hr/>";
		exit();
	}
	if($_GET[mode] ==  "rpg_poke")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','poke','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}
	if($_GET[mode] ==  "rpg_money")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','money','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}
	if($_GET[mode] ==  "rpg_shot")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','shot','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}
	if($_GET[mode] ==  "rpg_add")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','home','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}
	if($_GET[mode] ==  "rpg_warp")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','warp','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}
	if($_GET[mode] ==  "rpg_item")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','item','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}	
	if($_GET[mode] ==  "rpg_drank")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','drank','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}
	if($_GET[mode] ==  "rpg_rank")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','rank','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}
	if($_GET[mode] ==  "rpg_ritem")
	{
		$strSQL = "INSERT INTO shop (name,pic,price,amount,info,mode,ser) VALUES ('".$_POST['i_name']."','".$_POST['i_pic']."','".$_POST['i_price']."','".$_POST['i_amount']."','".$_POST['i_info']."','ritem','rpg')";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			$error = greenBox("เพิ่มสินค้าเรียบร้อย.","a_shop.php");
			echo "$error <hr/>";
			exit();
		}
	}
	
}
?>
	<div class="panel panel-default">
    <div class="panel-body">
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#s1">
          MineShop คลิก!
        </a>
      </h4>
    </div>
   <div id="s1" class="panel-collapse collapse"><div class="panel-body">
     <ul class="nav nav-pills">
  <li><a href="?mode=rpg_item">Item (ไอเทม)</a></li>
  <li><a href="?mode=rpg_ritem">RpgItem (อาพีจีไอเทม)</a></li>
  <li><a href="?mode=rpg_money">Money (เงิน)</a></li>
  <li><a href="?mode=rpg_rank">Group (ยศ)</a></li>
  <li><a href="?mode=rpg_drank">DayGroup (วัน/ยศ)</a></li>
  <li><a href="?mode=rpg_shot">Shot (ปืน)</a></li>
  <li><a href="?mode=rpg_warp">Warp (สถานที่)</a></li>
</ul><hr>
<?if($_GET[mode] ==  "rpg_poke")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อสิ้นค้า</label>
 <input class="form-control" type="text" name="i_name" placeholder="Name" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">ชื่อโปเกมอน</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : Namepoke" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">จำนวน</label>
 <input class="form-control" type="text" name="i_info" placeholder="Give" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
<?if($_GET[mode] ==  "rpg_ritem")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อสินค้า</label>
 <input class="form-control" type="text" name="i_name" placeholder="Name" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">จำนวน</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : 1 , 64" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">ชื่อไอเทม</label>
 <input class="form-control" type="text" name="i_info" placeholder="Item" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
<?if($_GET[mode] ==  "rpg_money")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อจำนวน</label>
 <input class="form-control" type="text" name="i_name" placeholder="Name" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">จำนวน</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : 1 , 10000000" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">ใส่ Give</label>
 <input class="form-control" type="text" name="i_info" placeholder="Give" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
<?if($_GET[mode] ==  "rpg_add")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อฐานทัพ</label>
 <input class="form-control" type="text" name="i_name" placeholder="Name" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">ชื้อโลก</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : Phonix , Dragon" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">ชื่อโซน</label>
 <input class="form-control" type="text" name="i_info" placeholder="zone" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
<?if($_GET[mode] ==  "rpg_warp")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อสถานที่</label>
 <input class="form-control" type="text" name="i_name" placeholder="Name Warp" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">จำนวน</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : 1" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">สถานที่</label>
 <input class="form-control" type="text" name="i_info" placeholder="Info" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
<?if($_GET[mode] ==  "rpg_shot")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อสินค้า</label>
 <input class="form-control" type="text" name="i_name" placeholder="Item Name" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">จำนวน</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : 1" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">ปืน</label>
 <input class="form-control" type="text" name="i_info" placeholder="Info" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
<?if($_GET[mode] ==  "rpg_drank")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อสินค้า</label>
 <input class="form-control" type="text" name="i_name" placeholder="Rank Name" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">จำนวน</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : 7d , 15d , 30d" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">ยศ</label>
 <input class="form-control" type="text" name="i_info" placeholder="Info" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
<?if($_GET[mode] ==  "rpg_rank")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อสินค้า</label>
 <input class="form-control" type="text" name="i_name" placeholder="Rank Name" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">ใส่เลข 1</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : 1" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">ยศ</label>
 <input class="form-control" type="text" name="i_info" placeholder="Info" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
  <?if($_GET[mode] ==  "rpg_item")
	{?>
<form method="post" name="mainform" class="form-group">
<input type="hidden" name="act" value="">
 <label class="col-lg-3 control-label">ชื่อสินค้า</label>
 <input class="form-control" type="text" name="i_name" placeholder="Item Name" />
 <label class="col-lg-3 control-label">ลิ้งรูปภาพ</label>
 <input class="form-control" type="text" name="i_pic" placeholder="Link Picture" />
 <label class="col-lg-3 control-label">จำนวน</label>
 <input class="form-control" type="text" name="i_amount" placeholder="Ex. : 1 - 64" />
 <label class="col-lg-3 control-label">ราคา</label>
 <input class="form-control" type="text" name="i_price" placeholder="Price" />
 <label class="col-lg-3 control-label">ไอดีไอเท็ม</label>
 <input class="form-control" type="text" name="i_info" placeholder="Info" />
 <br>
 <input type="submit" value="เพิ่มสินค้า!" class="btn btn-success" style="width: 180px;" onclick="mainform.act.value='confirm';mainform.submit();">
</form>
<? }?>
	</div></div></div>
	
    </div>
    </div>
	
	
</div>
</div>

</div>
</body>
</html>
