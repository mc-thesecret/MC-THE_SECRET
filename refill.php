<?
session_start();
require_once("sys/func_connect.php");
require_once("sys/func_static.php");
pageperm("normal");
head("index");
?>
<div class="col-md-9">
	
	<div class="panel panel-default">
	<div class="panel-heading">เติมเงิน</div>
    <div class="panel-body">	
	<script type="text/javascript" src='https://www.tmtopup.com/topup/3rdTopup.php?uid=<? echo $Cfg["web"]["tmtopup"]; ?>'></script>
	<div class="col-md-5">
	     <input type="text" class="form-control" name="tmn_password" id="tmn_password" maxlength="14" placeholder="ใส่รหัสบัตรทรูมันนี่ที่นี้ !">
         <input type="hidden" class="form-control" name="ref1" id="ref1" value="<?echo $_SESSION["username"];?>" />
         <input type="hidden" class="form-control" name="ref2" id="ref2"  value="ShopMario" />
		 <input type="hidden" class="form-control" name="ref3" id="ref3"  value="FOR iTOPMARIO" />
		 </div>
		 	<div class="col-md-2">
	     <a type="submit" class="btn btn-primary" onclick="submit_tmnc()">ยืนยัน!</a>
		 </div><div class="col-md-5">
<table class="table table-striped table-bordered">
<tr><th>TrueMoney</th><th>Point</th><tr>
<tr><td>50</td><td><? echo $Cfg["tmt"][50]; ?></td></tr>
<tr><td>90</td><td><? echo $Cfg["tmt"][90]; ?></td></tr>
<tr><td>150</td><td><? echo $Cfg["tmt"][150]; ?></td></tr>
<tr><td>300</td><td><? echo $Cfg["tmt"][300]; ?></td></tr>
<tr><td>500</td><td><? echo $Cfg["tmt"][500]; ?></td></tr>
<tr><td>1,000</td><td><? echo $Cfg["tmt"][1000]; ?></td></tr>
</table>
		 </div><br><hr>
    </div>
    </div>
<div class="panel-heading"> (M)Mario V2.0 ใช้งานง่าย Developed by <a href="https://www.facebook.com/iToPMario" target="new">TopMario</a></div>
</div>

</div>
</body>
</html>
