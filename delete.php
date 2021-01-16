<?php 
	if(!isset($_GET['yazi_id']) || empty($_GET['yazi_id'])){
		header('Location:listele.php');
		exit;
	}

	$sorgu = $db->prepare('DELETE FROM yazilar WHERE yazi_id = ?');
	$sorgu->execute([
		$_GET['yazi_id']
	]);
	header('Location:listele.php');
?>