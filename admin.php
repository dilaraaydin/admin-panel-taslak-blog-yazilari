<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Blog Admin Paneli</title>
    <style type="text/css">
      div{
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 align="center">..Hoşgeldiniz..</h1>
      <div class="row">
        <div align="center" class="col-md-12">
          <h4>Site Hakkında</h4>
        </div>
      </div>
      <hr>
            <div class="row">
        <div class="col-md-12">
          <?php require 'header.php'; ?>
        </div>
      </div>
      <hr>
      <div align="center" class="col-md-12">
<?php
	include("ayar.php");
	session_start();
	if(!isset($_SESSION["login"])){
		echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
	}else{
		echo "Bu site blog yazarlarının yazılarını taslak olarak tutmalarına yarar.";
		echo "Yazılarınızı ekleyip okuyabilir,güncelleyebilir ve silebilirsiniz.";
	}
?>
	  </div>
      <hr>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      $('[data-toggle="tooltip"]').tooltip();
    </script>
  </body>
</html>