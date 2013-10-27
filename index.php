<?php
	require'menu.htm';
?>
<div class="anasayfa">
<?php
if (isset($_GET['hakkimizda']) && empty($_GET['hakkimizda'])) {
	require'hakkimizda.php';
}
else if (isset($_GET['akademik']) && empty($_GET['akademik'])) {
	require'akademik.php';
}
else if (isset($_GET['yonetim']) && empty($_GET['yonetim'])) {
	require'yonetim.php';
}
else if (isset($_GET['bolumler']) && empty($_GET['bolumler'])) {
	require'bolumler.php';
}
else if (isset($_GET['degisim_programlari']) && empty($_GET['degisim_programlari'])) {
	require'degisim_programlari.php';
}
else if (isset($_GET['duyurular']) && empty($_GET['duyurular'])) {
	require'duyurular.php';
}
else if (isset($_GET['basvuru']) && empty($_GET['basvuru'])) {
	require'basvuru.php';
}
else if (isset($_GET['iletisim']) && empty($_GET['iletisim'])) {
	require'iletisim.php';
}
else
{
	include"anasayfa.php";
}


?> </div>