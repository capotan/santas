<?php
error_reporting(0);
require "database.php";
$a=1;
$sorgu=mysql_query("SELECT * from ogr_elemanlari");
while($sonuc=mysql_fetch_array($sorgu))
{
	$hocalar[$a]=array($sonuc['isim'],$sonuc['bilgi'],$sonuc['mail'],$sonuc['resim'],$sonuc['resim2']);
	$a++;
}
?>
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
 
$(document).ready(function(){
	    sakla();
});

function openList(g,i) {
	    sakla();
$(g).toggle();

var resim="#"+i;
$(resim).css({"background":"url(resim/hhe.png)","background-size":"cover"});
}
function sakla()
{
	for (var j = 0; j <12; j++) {
	var hiddendiv="#kadro"+j+"_hidden";
	var res="#"+j;
	$(hiddendiv).hide();
$(res).css({"background":"url(resim/hhe_s.png)","background-size":"cover"});
};
}

</script>

<div class="left" id="kadro" >
Akademik Kadro
<ul>
<?php 
for($i=1;$i<$a;$i++)
{  
$gizli_div="kadro".$i."_hidden";

	?>
<li><div id="kadro1" onclick = "openList(<?php echo $gizli_div.",".$i;?>)"> <?php echo $hocalar[$i][0]; ?></div></li>
<li>
<div id="<?php echo $gizli_div;?>"><?php echo $hocalar[$i][1]."<br>".$hocalar[$i][2];  ?></div>
</li>
<?php  
} ?>
</ul>
</div>

<div class="left" id="kadro_resim_c">
<div class="kadro_resim left" id="1" style="background:url(<?php echo $hocalar[$i][1];?>);background-size:cover;"></div>
<div class="kadro_resim left" id="2"></div>
<div class="kadro_resim left" id="3"></div>
<div class="kadro_resim left" id="4"></div>
<div class="kadro_resim left" id="5"></div>
<div class="kadro_resim left" id="6"></div>
<div class="kadro_resim left" id="7"></div>
<div class="kadro_resim left" id="8"></div>
<div class="kadro_resim left" id="9"></div>
<div class="kadro_resim left" id="10"></div>
<div class="kadro_resim left" id="11"></div>
<div class="kadro_resim left" id="12"></div>

</div>


