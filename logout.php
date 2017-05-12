<?
	session_start();
	require_once("sys/config.php");
	session_destroy();;
?>
<html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UCP :: <?echo $Cfg["web"]["name"];?></title>
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body onload="window.location='index.php'">
</body>
</html>