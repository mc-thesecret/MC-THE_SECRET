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
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
          MineShop                                                                                                                                                                            [ShopMario]
      </h4>
    </div>
   <div id="s1" class=""><div class="panel-body">
    <form method="post" name="s1" action="order.php">
<input type="hidden" name="act1" value="">
<input type="hidden" name="sub_act1" value="">
<?
$shopSQL = "SELECT * FROM shop WHERE ser = 'rpg'";
$shopobjQuery = mysql_query($shopSQL);
while($shopobjResult = mysql_fetch_array($shopobjQuery))
{
?>

  <div class="col-xs-6 col-md-3">
  <div class="thumbnail">
  <center>
   <img src="<?=$shopobjResult["pic"];?>" width="125" height="125">
   <h5><?=$shopobjResult["name"];?></h5>
   <h5> ราคา : <?=$shopobjResult["price"];?> พ้อย </h5>
   <h5> จำนวน : <?=$shopobjResult["amount"];?></h5>
   <a class="btn btn-default btn-sm" onclick="s1.act1.value='check';s1.sub_act1.value='<?=$shopobjResult['id'];?>';s1.submit();">ยืนยันการซื้อ!</a>
   </center>
   </div>
  </div>

<?
}
?>
	</form></div></div></div>
<div class="panel-heading"> (M)Mario V2.0 ใช้งานง่าย Developed by <a href="https://www.facebook.com/iToPMario" target="new">TopMario</a></div>	
    </div>
    </div>
	
    </div>

</div>

</div>
</body>
</html>
