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
      <h1 align="center">Merhaba Admin!</h1>
      <div class="row">
        <div align="center" class="col-md-12">
          <h4>Okuma Sayfası</h4>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <?php require 'header.php'; ?>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12" align="center">
          <h3><a href="insert.php">Yazı Ekle</a></h3>
        </div>
      </div>
      <hr>
      <div class="row">
        <?php 
          if(!isset($_GET['yazi_id']) || empty($_GET['yazi_id'])){
            header('Location:listele.php');
            exit;
          }

          $sorgu = $db -> prepare('SELECT * FROM yazilar WHERE yazi_id=?');
          $sorgu->execute([
            $_GET['yazi_id']
          ]);
          $yazi = $sorgu->fetch(PDO::FETCH_ASSOC);
          if(!$yazi){
            header('Location:listele.php');
            exit;
          }
        ?>
	        <div class="col-md-4"><h5><?php  echo $yazi['yazi_baslik']; ?></h5><?php echo $yazi['yazi'] ?></div>
	        <div class="col-md-4"><h5><a href="kontrol.php?sayfa=update&yazi_id=<?php echo $yazi['yazi_id'] ?>">Yazıyı Güncelle</a></h5></div>
	        <div class="col-md-4"><h5><a href="kontrol.php?sayfa=delete&yazi_id=<?php echo $yazi['yazi_id'] ?>">Yazıyı Sil</a></h5></div>
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