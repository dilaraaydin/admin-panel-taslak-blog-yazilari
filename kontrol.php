<?php 
	require_once 'connection.php';

	if(!isset($_GET['sayfa'])){
		$_GET['sayfa'] = 'kontrol';
	}
	Switch($_GET['sayfa']){

		case 'kontrol':
			require_once 'index.php';
		break;

		case 'insert':
			require_once 'insert.php';
		break;

		case 'update':
			require_once 'update.php';
		break;

		case 'delete':
			require_once 'delete.php';
		break;

		case 'oku':
			require_once 'oku.php';
		break;

		case 'admin':
			require_once 'admin.php';
		break;
	}
?>