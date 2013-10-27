<?php
if (isset($_GET['ogretim_elemanlari']) && empty($_GET['ogretim_elemanlari'])) {
	require'ogretim_elemanlari.php';
}
else if (isset($_GET['takvim']) && empty($_GET['takvim'])) {
	require'takvim.php';
}
else
{
	?>
		<div class="akademik">
		<div  class="left" id="akademik_resim"><a href="index.php?akademik&ogretim_elemanlari"><img src="resim/pic2.jpg"><br>Öğretim Elemanları</a></div>
		 <div class="left" id="akademik_resim"><a href="index.php?akademik&takvim"><img src="resim/pic2.jpg"><br>Akademik Takvim</a></div></div>
	<?php
}