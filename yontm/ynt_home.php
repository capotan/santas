<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
	<title></title>
</head>
<body>
<a href='ynt_home.php?s=ogr'>Öğretim Elemanları</a>
<br>
<a href='ynt_home.php?s=ynt'>Yönetim</a><br>
<a href='ynt_home.php?s=takvim'>Akademik Takvim</a><br>
<a href='cikis.php'>Çıkış</a>
<br>
</body>
</html>

<?php
switch ($_GET['s']) {
	case 'ogr':
		require 'ynt_ogr.php';
		break;
	case 'ynt':
		require 'ynt_ynt.php';
		break;
	case 'takvim':
		require 'ynt_takvim.php';
		break;
	
	default:
		# code...
		break;
}
?>