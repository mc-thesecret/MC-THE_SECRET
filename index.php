<?
session_start();
require_once("sys/func_connect.php");
require_once("sys/func_static.php");
pageperm("normal");
head("index");
?>
<div class="col-md-6">
	
	<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-home"></span> ช่าวสารอัพเดท !</div>
    <div class="panel-body">

 
<?require_once("news.php");?> 
	
	

<?head2("index");?>	