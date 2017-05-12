<?
session_start();
require_once("sys/func_connect.php");
require_once("sys/func_static.php");
pageperm("normal");
head("order");
$AuthmeSQL9 = "SELECT * FROM authme WHERE username = '".$_SESSION["username"]."'"; 
$AuthmeQuery9 = mysql_query($AuthmeSQL9); 
$AuthmeResult = mysql_fetch_array($AuthmeQuery9); 
?>
<div class="col-md-9">
<div class="panel panel-default">
<div class="panel-body">
<?
if(isset($_POST['act']) && $_POST['act'] == 'buy')
{
//-------- CHECK
	$strSQL = "SELECT * FROM shop WHERE id = '".$_POST['buy']."'";
	$objQuery = mysql_query($strSQL);
	$shopobjResult = mysql_fetch_array($objQuery);
    if($AuthmeResult["points"] < $shopobjResult["price"])
	{
        $shop = "shop.php";
		$str = "จำนวนเงินคุณไม่พอ!";
	    echo "&nbsp;<font color='#ff0000'><b>".$str."</b></font><div class='controls' align='right'><input type='button' class='btn' value='ย้อนกลับ' onclick=\"window.location='".$shop."'\"></div>";
		exit ();
	}
//-------- SUCCESS
	else
	{
	$date = date("Y-m-d H:i:s");
    $logSQL = "INSERT INTO log (username,info,info2,info3,date) VALUES ('".$_SESSION["username"]."','".$shopobjResult["name"]."','".$shopobjResult["price"]."','SERVER : MineRPG','".$date."')";
	$logobjQuery = mysql_query($logSQL);
	$rem_point = $AuthmeResult["points"] - $shopobjResult["price"];
	$strSQL = "UPDATE authme SET points = '$rem_point' WHERE username = '".$_SESSION["username"]."'";
	$objQuery = mysql_query($strSQL);
	$_SESSION["points"] = $rem_point; 
	include_once 'sys/func_websend.php';
	$ws = new Websend("localhost");
	$ws->connect($Cfg["web"]["websend"]);
	$error = greenBox("ทำการซื้อสินค้าเรียบร้อย!.","shop.php");
	if( $shopobjResult['mode'] == 'item') {{$ws->doCommandAsConsole("give $_SESSION[username] $shopobjResult[info] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'ritem') {{$ws->doCommandAsConsole("rpgitem $shopobjResult[info] give $_SESSION[username] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'poke') {{$ws->doCommandAsConsole("pokegive $_SESSION[username] $shopobjResult[info] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'money') {{$ws->doCommandAsConsole("money $shopobjResult[info] $_SESSION[username] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'warp') {{$ws->doCommandAsConsole("warp $shopobjResult[info] $_SESSION[username] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'add') {{$ws->doCommandAsConsole("rg addmember $shopobjResult[info] $_SESSION[username] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'shot') {{$ws->doCommandAsConsole("shot give $_SESSION[username] $shopobjResult[info] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'drank') {{$ws->doCommandAsConsole("azsetgroup $_SESSION[username] $shopobjResult[info] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'rank') {{$ws->doCommandAsConsole("manuadd $_SESSION[username] $shopobjResult[info] $shopobjResult[amount]"); } }
	if( $shopobjResult['mode'] == 'home') {{$ws->doCommandAsConsole("rg addowner $shopobjResult[info] $_SESSION[username] $shopobjResult[amount]"); } 
	$strSQL = "DELETE FROM shop WHERE id = '".$_POST['buy']."'"; $objQuery = mysql_query($strSQL);
	}
	$ws->doCommandAsConsole("say [Shop] $_SESSION[username] Buy $shopobjResult[name] Success!");
	$ws->disconnect();
	echo $error;
	exit ();
	}
}
?>
<?
if($_POST["act1"] == "check")
{
$strSQL = "SELECT * FROM shop WHERE id = ".$_POST['sub_act1']."";
$objQuery = mysql_query($strSQL);
$shopobjResult = mysql_fetch_array($objQuery);
	if(!$shopobjResult)
	{
		$error = redBox("ไม่พบสินค้ากรุณาติดต่อ Admin !");
		if($error != "")
		{
			echo $error;
			exit();
		}
	}
	else
	{
?>
<div class="well">
ยืนยันการซื้อ : <?=$shopobjResult["name"];?>
</div>
<hr>
<form method="post" name="mainform">
<input type="hidden" name="act" value="">
<input type="hidden" name="buy" value="">
<div ><b>
<p>ชื่อสินค้า : <span class="label label-info"><?=$shopobjResult["name"];?></span></p>
<p>รายละเอียด : <span class="label label-info">เซิฟเวอร์ : MineCraft | ราคา : <?=$shopobjResult["price"];?> พ้อย</span></p>
<hr>
<p>ชื่อตัวละคร :  <span class="label label-info"><? echo $AuthmeResult["username"]; ?></span></p>
<p>พ้อย :  <span class="label label-info"><? echo $AuthmeResult["points"]; ?></span></p>
<p>หมายเหตุ : <span class="label label-danger">"ห้ามซื้อขณะเซิฟเวอร์ปิดอยู่ เเละกรุณาออนไลน์ในเซิฟเวอร์ ก่อนสั่งซื้อไอเท็มน่ะจ๊ะ ^^"</span></p>
	<hr><?if($AuthmeResult["points"] < $shopobjResult["price"]){?>
	<a class="btn btn-danger" disabled>จำนวนเงินคุณไม่พอ!</a> <a class="btn btn-default" href="shop.php">ย้อนกลับ</a>
	<?} else {?>
	<a class="btn btn-success" onclick="mainform.act.value='buy';mainform.buy.value='<?=$shopobjResult['id'];?>';mainform.submit();" >ยืนยันการซื้อ!</a> <a class="btn btn-default" href="shop.php">ย้อนกลับ</a>
	<?}?></b></div>
</form>
<?
 }
}
?>
</table>
</form>
</div>
</div>
</div>



</div>
</div>
<script src="./js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>