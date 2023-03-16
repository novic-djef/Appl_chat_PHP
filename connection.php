<?php
// $con=mysql_connect("localhost","root","");
// if (!$con) 
// 	{
// 		die ("Could not connect" . mysql_error());
// 	}
// $data=mysql_select_db("CTS_DSWD_FO2",$con);
// if (!$data) 
// 	{
// 		die ("Could not connect" . mysql_error());
// 	}
try {
	$access=new pdo("mysql:host=localhost;dbname=reseau;charset=utf8", "root", "");
	
	$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
   $e->getMessage();
}
?>