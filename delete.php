<?php require_once("connect.php"); ?>
<?php
	$query = "DELETE FROM `products` WHERE `id` = {$_GET['id']}" ;
	$queryRun = mysqli_query($connection, $query);
	if(!$queryRun){
		die('Mysqlin Connect Error '. mysqli_error($connection));
	}else{
		header("location: admin.php");
	}
?>
