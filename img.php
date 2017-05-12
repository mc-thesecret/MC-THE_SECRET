<?
session_start();
require_once("sys/func_connect.php");
require_once("sys/func_static.php");
pageperm("normal");
head("index");
?>
<div class="col-md-9">
	
	<div class="panel panel-default">
    <div class="panel-body">
<form method="post" name="mainform" enctype="multipart/form-data" action="skin.php" >
<input type="hidden" name="act" value="">
<input type="file" name="skin_file"><br>
<input class="btn btn-default" type="button" onclick="mainform.act.value='skin';mainform.submit();" value="อัพโหลด!"> 
<?
if(isset($_POST['act']) && $_POST['act'] == 'skin')
{
$username=$_SESSION["username"];
if(isset($_FILES["skin_file"])){
if(strchr($_FILES["skin_file"]["name"],".")==".png" or strchr($_FILES["skin_file"]["name"],".")==".PNG"){
$size=getimagesize($_FILES["skin_file"]['tmp_name']);
if($size[0]<>64 or $size[1]<>32){
die('<script type="text/javascript">alert("ขนาดรูปและไฟล์ไม่ถูกต้องตามที่กำหนด");location.replace("skin.php")</script>');
}else{
copy($_FILES["skin_file"]['tmp_name'],"C:AppServ/www/Mine/LSkins/".$username.".png");
die('<script type="text/javascript">alert("ทำการอัพโหลดสกินเสร็จสมบูรณ์");location.replace("skin.php")</script>');
}
}else{
die('<script type="text/javascript">alert("กรุณาอัพโหลดไฟล์นามสกุล PNG เท่านั้นครับ");location.replace("skin.php")</script>');
}
}
}
?>
</form>
<div class="panel-heading"> (M)Mario V1.1 ใช้งานง่าย Developed by <a href="https://www.facebook.com/iToPMario" target="new">TopMario</a></div>
    </div>
    
    </div>

</div>

</div>

</body>
</html>
