<?php
include "../database.php";
function ogretim()
{
	?>
<table>
<tr><td><a href="ynt_home.php?s=ynt&y=ekle">Ekle</a></td>
<?php

$a=1;
$sorgu=mysql_query("SELECT * from ynt_elemanlari");
while($sonuc=mysql_fetch_array($sorgu))
{
echo "<tr>";
echo "<td>".$sonuc['unvan']."</td>";
echo "<td>".$sonuc['isim']."</td>";
echo "<td>".$sonuc['mail']."</td>";
echo "<td>".$sonuc['telefon']."</td>";
echo "<td><a href='ynt_home.php?s=ynt&y=duzenle&d=".$sonuc['id']."'>Düzenle</a></td>";
echo "<td><a href='ynt_home.php?s=ynt&y=sil&d=".$sonuc['id']."'>Sil</a></td>";
echo "</tr>";

	$a++;
}
?></table>

<?php
}
function duzenle($id)
{
	if ($_POST['isim']) {
		mysql_query(" UPDATE ynt_elemanlari SET unvan='".$_POST['unvan']."', isim='".$_POST['isim']."', mail='".$_POST['mail']."', telefon='".$_POST['telefon']."'  WHERE id=$id ");
		header("location:ynt_home.php?s=ynt");
	}
	else
	{
	$sorgu1=mysql_query("SELECT * from ogr_elemanlari where id=$id");
	$sonuc1=mysql_fetch_array($sorgu1);
?>
	<form method="post" enctype="multipart/form-data">

		<input type="text" name="unvan" value=" <?php echo $sonuc1['unvan']; ?>">
		<input type="text" name="isim" value=" <?php echo $sonuc1['isim']; ?>">
		<input type="text" name="mail" value="<?php echo $sonuc1['mail']; ?>">
		<input type="text" name="telefon" value=" <?php echo $sonuc1['telefon']; ?>">
		<input type="submit" value="Kaydet">

	</form>
<?php
}
}
function sil($id)
{
	mysql_query("delete  from ynt_elemanlari where id=$id");
	header("location:ynt_home.php?s=ynt");
}
function ekle()
{
	if ($_POST['isim']) {
		mysql_query("insert into  ynt_elemanlari (unvan,isim,mail,telefon) values ('".$_POST['unvan']."','".$_POST['isim']."','".$_POST['mail']."','".$_POST['telefon']."')  ");
		header("location:ynt_home.php?s=ynt");
	}
	else
	{
		?>
	<form method="post" enctype="multipart/form-data">
		Ünvan:<input type="text" name="unvan" >
		İsim:<input type="text" name="isim" >
		E-mail:<input type="text" name="mail" >
		Telefon:<input type="text" name="telefon" >
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