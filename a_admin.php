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
<ul class="nav nav-pills nav-stacked">
  <li><a href="a_add.php">เพิ่มไอเท็ม!</a></li>
  <li><a href="a_new.php">จัดการรูปภาพ</a></li>
  <li><a href="a_shop.php">จัดการไอเท็ม</a></li>
  <li><a href="a_code.php">จัดการไอเท็มโค้ด</a></li>
  <li><a href="a_log.php">ประวัติการซื้อผู้เล่น</a></li>
  <li><a href="a_list.php">จัดการสมาชิก</a></li>
</ul>
</div>
</div>

</div>
</body>
</html>
