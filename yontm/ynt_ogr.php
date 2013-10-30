<?php
include "../database.php";
function ogretim()
{
	?>
<table>
<?php

$a=1;
$sorgu=mysql_query("SELECT * from ogr_elemanlari");
while($sonuc=mysql_fetch_array($sorgu))
{
echo "<tr>";
echo "<td>".$a."</td>";
echo "<td><img style='width:50px; height:50px;' src='../".$sonuc['resim']."'></td>";
echo "<td><img style='width:50px; height:50px;' src='../".$sonuc['resim2']."'></td>";
echo "<td>".$sonuc['isim']."</td>";
echo "<td>".$sonuc['bilgi']."</td>";
echo "<td>".$sonuc['mail']."</td>";
echo "<td><a href='ynt_home.php?s=ogr&y=duzenle&d=".$sonuc['id']."'>Düzenle</a></td>";
echo "<td><a href='ynt_home.php?s=ogr&y=sil&d=".$sonuc['id']."'>Sil</a></td>";
echo "</tr>";

	$a++;
}
?></table>

<?php
}
function duzenle($id)
{
	if ($_POST['isim']) {
		mysql_query(" UPDATE ogr_elemanlari SET (isim,bilgi,mail,resim,resim2) values('$_POST[isim]','$_POST[bilgi]','$_POST[mail]','$_POST[resim]','$_POST[resim2]') ");
		//header("location:ynt_home.php?s=ogr");
	}
	else
	{
	$sorgu1=mysql_query("SELECT * from ogr_elemanlari where id=$id");
	$sonuc1=mysql_fetch_array($sorgu1);
?>
	<form method="post" enctype="multipart/form-data">
		<input type="text" name="isim" value=" <?php echo $sonuc1['isim']; ?>">
		<textarea name="bilgi"><?php echo $sonuc1['bilgi']; ?></textarea>
		<input type="text" name="mail" value="<?php echo $sonuc1['mail']; ?>">
		Resim 1:<input type="file" name="resim1" >
		Resim 2:<input type="file" name="resim2" >
		<input type="submit" value="Kaydet">

	</form>
<?php
}
}
function sil($id)
{

}
switch ($_GET['y']) {
	case 'duzenle':
		duzenle($_GET['d']);
		break;
	case 'sil':
		sil($_GET['d']);
		break;
	
	default:
		ogretim();
		break;
}

?>