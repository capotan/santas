<?php
include "../database.php";
function ogretim()
{
	?>
<table>
<tr><td><a href="ynt_home.php?s=ogr&y=ekle">Ekle</a></td>
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
		mysql_query(" UPDATE ogr_elemanlari SET isim='".$_POST['isim']."', bilgi='".$_POST['bilgi']."', mail='".$_POST['mail']."'  WHERE id=$id ");
		header("location:ynt_home.php?s=ogr");
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
	mysql_query("delete  from ogr_elemanlari where id=$id");
	header("location:ynt_home.php?s=ogr");
}
function ekle()
{
	if ($_POST['isim']) {
		mysql_query("insert into  ogr_elemanlari (isim,bilgi,mail) values ('".$_POST['isim']."','".$_POST['bilgi']."','".$_POST['mail']."')  ");
		header("location:ynt_home.php?s=ogr");
	}
	else
	{
		?>
	<form method="post" enctype="multipart/form-data">
		İsim:<input type="text" name="isim" >
		Bilgi:<textarea name="bilgi"></textarea>
		E-mail:<input type="text" name="mail" >
		Resim 1:<input type="file" name="resim1" >
		Resim 2:<input type="file" name="resim2" >
		<input type="submit" value="Kaydet">

	</form>
<?php
}
}
switch ($_GET['y']) {
	case 'duzenle':
		duzenle($_GET['d']);
		break;
	case 'sil':
		sil($_GET['d']);
		break;
	case 'ekle':
		ekle();
		break;
	
	default:
		ogretim();
		break;
}

?>