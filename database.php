<?php 
$bag = mysql_connect("localhost","root","");
		if (!$bag)
 		 {
 			 die('Baðlantý hatasý: ' . mysql_error());
		 }
 		 mysql_select_db("santas", $bag);
?>