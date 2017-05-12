<?
session_start();
require_once("sys/config.php");
if(isset($_SESSION["id"]))
{
	header("location:index.php");
}
if($_SESSION["id"] != "")
{
	header("location:index.php");
}
?>
 <a href="https://www.facebook.com/iToPMario" target="_blank" > <img alt="" src="http://image.ohozaa.com/i/8b0/tUXVUD.png" width="1" height="1" border="0" /> </a> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="เซิฟเวอร์  Minecraft สนุก มันส์ เพื่อนเยอะ !! [SHOPMARIO] By.TopMario Www.Fb.Com/iToPMario บริการเว็บช็อป ราคาถูก ใช้งานง่าย (ถาวร!!)" />
<meta name="keywords" content="minecraft,server,มายคราฟ,มายคราฟ,โหลดเกม,มายคราฟ,เซิฟเวอร์ไทย" />
<title><?echo $Cfg["web"]["name"];?> :: หน้าเเรก </title>
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
    </ul>
    <ul class="nav navbar-nav navbar-right">
  </div>
</div>
<center><object type="application/x-shockwave-flash" data="flash/Logo.png" width="640" height="251"><param name="wmode" value="transparent"></object></center>
<?

if(isset($_POST['sub']) && $_POST['sub'] == 'con')
{
    require_once("sys/func_connect.php");
	require_once("sys/func_static.php");
	$objLogin = checkPassword($_POST['log_user'],$_POST['log_pass']);
	if($objLogin == false)
	{
        $error = "<script type='text/javascript'>alert('ชื่อตัวละคร หรือ รหัสผ่านผิดพลาด');location.replace('login.php')</script>";
	}
	if($error != "")
	{
		echo $error;
		exit();
	}
	if($objLogin == true)
	{
		$strSQL = "SELECT * FROM authme WHERE username = '".$_POST['log_user']."'";
		$objQuery = mysql_query($strSQL);
		$objResult = mysql_fetch_array($objQuery);
        $error = "<script type='text/javascript'>alert('เข้าสู่ระบบเรียบร้อย');location.replace('index.php')</script>";
		$_SESSION["id"] = $objResult["id"];
		$_SESSION["username"] = $objResult["username"];
		$_SESSION["status"] = $objResult["status"];
		session_write_close();
		echo $error;
		exit();
	}
	mysql_close();
}
?>
<div class="modal-content">
    <div class="modal-body">
	<div class="row">
	
	<div class="col-md-3">
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> เข้าสู่ระบบ</div>
    <div class="panel-body">
   <form method="post" name="mainform" >
   <input type="hidden" name="sub" value="">
   <div class="form-group">
   <label class="control-label"></label>
   <label class="control-label">ชื่อตัวละคร</label>
    <input type="text" class="form-control" name="log_user">
   <label class="control-label">รหัสผ่าน</label>
    <input type="password" class="form-control" name="log_pass">
   </div>
   <div>
   <button type="submit" class="btn btn-primary" onClick="mainform.sub.value='con';mainform.submit();">เข้าสู่ระบบ</button> <button type="button"onClick="alert('สมัครในเกมเท่านั้น! | พิมพ์ /register รหัสผ่าน รหัสผ่าน !!')" class="btn btn-default">สมัครสมาชิก</button>
    </div> 
   </form>	
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

	<div class="col-md-6">
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-home"></span> ช่าวสารอัพเดท !</div>
    <div class="panel-body">

	
<?require_once("news.php");?>
	
	
	
	<div class="col-md-3">
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-signal"></span> สถานะเซิฟเวอร์</div>
    <div class="panel-body">
	
	<table class="table table-striped table-hover "><tbody>
	<tr><td>Server</td><td><span class="label label label-successOnline">Online</span></td></tr>
	<tr><td>MineShop</td><td><span class="label label label-successOnline">Online</span></td></tr>
	<tr><td>TrueMove</td><td><span class="label label label-successOnline">Online</span></td></tr>
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

<script type="text/javascript" src="http://hostdrift.com/script_demo/fancybox/jquery.min.js"></script>
<script>
                !window.jQuery && document.write('<script src="http://hostdrift.com/script_demo/fancybox/jquery-1.4.3.min.js"></script>
</script>
<script type="text/javascript" src="http://hostdrift.com/script_demo/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="http://hostdrift.com/script_demo/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="http://hostdrift.com/script_demo/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
