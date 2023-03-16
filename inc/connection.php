<?php
    // $dsn = 'pgsql:host=localhost;dbname=reseau';
    // $username = 'root';
    // $password = '';

    // try {
    //     $con = new PDO($dsn, $username, $password);
    // } catch (PDOException $e) {
    //     $error_message = $e->getMessage();
    //     include('../errors/err.php');
    //     exit();
    // }
?>

<?php

try {
	 $access=new pdo("mysql:host=localhost;dbname=reseau;charset=utf8", "root", "");
     
     $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
    
     


?>