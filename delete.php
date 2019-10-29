<?php
require_once 'config.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
	$sql = "SELECT location FROM upload WHERE id=" . $_GET['id'];
	$result = mysql_query($sql);
	$r = mysql_fetch_array($result);
	
	
	// xoa file tren host va csdl
	if(unlink($r['location'])){
		$delsql = "DELETE FROM upload WHERE id=" . $_GET['id'];
		if(mysql_query($delsql)){
			header("Location: viewfile.php"); // di chuyen den trang view.php
		}
	}
}else{
	header("Location: viewfile.php");

}

?>