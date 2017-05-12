<?
function redBox($str)
{
	$objResult = "&nbsp;<font color='#ff0000'><b>".$str."</b></font><div class='controls' align='right'><input type='button' class='btn' value='ย้อนกลับ' onclick=\"window.location='".$_SERVER['PHP_SELF']."'\"></div>";
	return $objResult;
}
function greenBox($str,$page)
{
	if($page == "0")
	{
		$objResult = "&nbsp;<font color='green'><b>".$str."</b></font><div class='controls' align='right'><input type='button' class='btn btn-success' value='ตกลง' onclick=\"window.location='".$_SERVER['PHP_SELF']."'\"></div>";
	}
	if($page != "0")
	{
		$objResult = "&nbsp;<font color='green'><b>".$str."</b></font><div class='controls' align='right'><input type='button' class='btn btn-success' value='ตกลง' onclick=\"window.location='".$page."'\"></div>";
	}
	return $objResult;
}
function pageperm($perm)
{
	if($perm == "admin")
	{
		if(!isset($_SESSION["id"]))
		{
			header("location:login.php");
		}
		else if($_SESSION["id"] == "")
		{
			header("location:login.php");
		}
		if(!isset($_SESSION["status"]))
		{
			header("location:login.php");
		}
		else if($_SESSION["status"] != "admin")
		{
			header("location:index.php");
		}
	}
	if($perm == "normal")
	{
		if(!isset($_SESSION["id"]))
		{
			header("location:login.php");
		}
		else if($_SESSION["id"] == "")
		{
			header("location:login.php");
		}
	}
}
function head($actpage)
{
	require("config.php");
	$Authme = "SELECT * FROM authme WHERE id = '".$_SESSION["id"]."'";
	$AuthmeQuery = mysql_query($Authme);
	$ShopResult = mysql_fetch_array($AuthmeQuery);
?>
 <a href="https://www.facebook.com/iToPMario" target="_blank" > <img alt="" src="http://image.ohozaa.com/i/8b0/tUXVUD.png" width="1" height="1" border="0" /> </a> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="เซิฟเวอร์ Minecraft สนุก มันส์ เพื่อนเยอะ !!" />
<meta name="keywords" content="minecraft,server,มายคราฟ,มายคราฟ,โหลดเกม,มายคราฟ,เซิฟเวอร์ไทย" />
<title><?echo $Cfg["web"]["name"];?> :: หน้าเเรก</title>
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://icons.iconarchive.com/icons/mahm0udwally/all-flat/256/User-icon.png">
</head>

<body>
<div class="container">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./js/bootstrap.js"></script>
<div class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" >
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="https://www.facebook.com/iToPMario"><?echo $Cfg["web"]["name"]; ?></a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
		<li><a href="<?echo $C["index"]; ?>">หน้าเเรก</a></li>
		<li><a href="<?echo $C["download"]; ?>">ดาวน์โหลด</a></li>
		<li><a href="<?echo $C["shop"]; ?>">ร้านค้า</a></li>
		<li><a href="<?echo $C["refill"]; ?>">เติมเงิน</a></li>
		<li><a href="<?echo "logout.php"; ?>">ออกจากระบบ</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
  </div>
</div>
<center><object type="application/x-shockwave-flash" data="flash/Logo.png" width="640" height="251"><param name="wmode" value="transparent"></object></center>

<div class="modal-content">
    <div class="modal-body">
	<div class="row">
	
	<div class="col-md-3">
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> ข้อมูลส่วนตัว</div>
    <div class="panel-body">
	<h6>ชื่อตัวละคร  :  <span class="label label-primary"><?echo $ShopResult["username"];?></span></h6>
	<h6>รหัสสมาชิก  :  <span class="label label-primary"><?echo $ShopResult["id"];?></span></h6>
	<h6>พ้อย  :  <span class="label label-primary"><?echo $ShopResult["points"];?></span></h6>
	<!--<h6>สกิน :  <img src="/Buy/LSkins/<?=$_SESSION["username"]?>.png"  class="img-thumbnail"> | <a href="skin.php">เปลี่ยน!</a></h6>-->
	<a type="button" class="btn btn-default" href="<?echo $C["refill"];?>"> เติมเงิน!</a> <?if($ShopResult["status"] == "admin") {?><a class="btn btn-danger" href="a_admin.php">จัดการ</a><? }?>
	</div>
    </div>
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-thumbs-up"></span> เฟสบุ๊ค</div>
    <div class="panel-body">
	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2F<?echo $Cfg["web"]["FB"];?>&amp;width=230&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=1426681300934181" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:230px; height:290px;" allowTransparency="true"></iframe>
   </div>
    </div>
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-thumbs-up"></span> วิทยุออนไลค์!</div>
    <div class="panel-body">
<iframe src="http://www.wink.in.th/musicbox/200x60-b.php" width="200" height="60" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
<iframe src="http://shop-mario.blogspot.com/" width="0" height="0" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
   </div>
    </div>		
	
	
    </div>
<?
}
function head2($actpage2)
{
	require("config.php");
	$Authme = "SELECT * FROM authme WHERE id = '".$_SESSION["id"]."'";
	$AuthmeQuery = mysql_query($Authme);
	$ShopResult = mysql_fetch_array($AuthmeQuery);
?>

	<div class="col-md-3">
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-signal"></span> สถานะเซิฟเวอร์</div>
    <div class="panel-body">
	
	<table class="table table-striped table-hover "><tbody>
	<tr><td>Server</td><td><span class="label label-successOnline">Online</span></td></tr>
	<tr><td>MineShop</td><td><span class="label label-successOnline">Online</span></td></tr>
	<tr><td>TrueMove</td><td><span class="label label-successOnline">Online</span></td></tr>
	</tbody></table> 
    </div>
    </div>
	
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-signal"></span> อัตราเติมเงิน</div>
    <div class="panel-body">
<table class="table table-striped table-hover "><tbody>
<tr><th>TrueMoney</th><th>Point</th><tr>
<tr><td>50</td><td><? echo $Cfg["tmt"][50]; ?></td></tr>
<tr><td>90</td><td><? echo $Cfg["tmt"][90]; ?></td></tr>
<tr><td>150</td><td><? echo $Cfg["tmt"][150]; ?></td></tr>
<tr><td>300</td><td><? echo $Cfg["tmt"][300]; ?></td></tr>
<tr><td>500</td><td><? echo $Cfg["tmt"][500]; ?></td></tr>
<tr><td>1,000</td><td><? echo $Cfg["tmt"][1000]; ?></td></tr>

</tbody></table> 
	</div>
	</div>
</div>

</div>
	<br>
</body>
</html>


<?}
function createSalt($length)
{
	srand(date("s")); 
	$chars = "abcdefghigklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
	$ret_str = ""; 
	$num = strlen($chars); 
	for($i=0;$i<$length;$i++)
	{ 
		$ret_str.= $chars[rand()%$num];
	} 
	return $ret_str;
}
function hashPassword($orgPassword)
{
	$salt = createSalt(16);
	$hashedPassword = "\$SHA\$".$salt."\$".hash('sha256',hash('sha256',$orgPassword).$salt);
	return $hashedPassword;
}
function checkPassword($nickname,$password)
{
	require_once("sys/func_connect.php");
	$a = mysql_query("SELECT password FROM authme where username = '$nickname'");
	if(mysql_num_rows($a) == 1)
	{
		$password_info = mysql_fetch_array($a);
		$sha_info = explode("$",$password_info[0]);
	}
	else return false;
	if($sha_info[1] === "SHA")
	{
		$salt = $sha_info[2];
		$sha256_password = hash('sha256', $password);
		$sha256_password .= $sha_info[2];;
		if(strcasecmp(trim($sha_info[3]),hash('sha256', $sha256_password)) == 0) return true;
		else return false;
	}
}
?>