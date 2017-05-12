<?
session_start();
require_once("sys/func_connect.php");
require_once("sys/func_static.php");
pageperm("admin");
head("index");
?>

	<div class="col-md-9">
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-comment"></span> เปลี่ยนรูปสไลต์ เลือนไปมา .jpg เท่านั้น</div>

		<div class="panel-body">


<center>
	<form name="form1" method="post"  enctype="multipart/form-data">
	<p><input type="file"  <a class="btn btn-success" name="filUpload"></p>
	<p><input name="btnSubmit" type="submit" <a class="btn btn-default" value="อัพโหลด"></p>
	
	<?
	if(copy($_FILES["filUpload"]["tmp_name"],"img/".$_FILES["filUpload"]["name"]))
	?>

	

	<p>ชื่อรูป : <span class="label label-danger">"mario0 , mario1 , mario2 , mario3 : ให้ตั้งชื่อไฟล์รูปตามนี้ครับ .jpg เท่านั้น"</span></p>
	<hr>
<p><span class="label label-info"> ชื่อรูป :   mario0.jpg   </span></p> <img width="500" height="200" src="img/mario0.jpg">
<hr>

<p><span class="label label-info"> ชื่อรูป :   mario1.jpg   </span></p> <img width="500" height="200" src="img/mario1.jpg">
<hr>


<p><span class="label label-info"> ชื่อรูป :   mario2.jpg   </span></p> <img width="500" height="200" src="img/mario2.jpg">
<hr>

<p><span class="label label-info"> ชื่อรูป :   mario3.jpg   </span></p> <img width="500" height="200" src="img/mario3.jpg">
<hr>
</center>

	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-comment"></span> เปลี่ยนรูป Logo หัวเว็บ .png เท่านั้น</div>
	
	<div class="panel-body">
	
	<center>
	<form name="form1" method="post"  enctype="multipart/form-data">
	<p><input type="file"  <a class="btn btn-success" name="filUpload"></p>
	<p><input name="btnSubmit" type="submit" <a class="btn btn-default" value="อัพโหลด"></p>
	
	<?
	if(copy($_FILES["filUpload"]["tmp_name"],"flash/".$_FILES["filUpload"]["name"]))
	?>
	

	<p>ชื่อรูป : <span class="label label-danger">" Logo : ให้ตั้งชื่อไฟล์รูปตามนี้ครับ .png เท่านั้น"</span></p>
	<hr>
<p><span class="label label-info"> ชื่อรูป :   Logo.png   </span></p> <img width="640" height="251" src="flash/Logo.png">

</div>
</div>
</div>
</center>
	


