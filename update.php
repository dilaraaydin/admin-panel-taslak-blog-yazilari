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
          <h4>Yazı Güncelleme Sayfası</h4>
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
          <h4>Yazınız için bir başlık ve metninizi giriniz.</h4>
        </div>
      </div>
      <hr>
       <div class="col-md-12">
        <?php 
        	if(!isset($_GET['yazi_id']) || empty($_GET['yazi_id'])){
        		header('Location:listele.php');
        		exit;
        	}
        	$sorgu=$db->prepare('SELECT * FROM yazilar WHERE yazi_id=?');
        	$sorgu->execute([ $_GET['yazi_id'] ]);
        	$yazis=$sorgu->fetch(PDO::FETCH_ASSOC);
        	if(!$yazis){
        		header('Location:listele.php');
        		exit;
        	}
        	if(isset($_POST['submit'])){
        		$yazi_baslik = isset($_POST['yazi_baslik']) ? $_POST['yazi_baslik'] : $yazis['yazi_baslik'];
        		$yazi = isset($_POST['yazi']) ? $_POST['yazi'] : $yazis['yazi'];
          		if(!$yazi_baslik || !$yazi) {
          			echo 'Tüm alanları doldurunuz..';
          		}else{
        			$sorgu = $db->prepare('UPDATE yazilar SET yazi_baslik=? , yazi=?
        				WHERE yazi_id=?');
        			$update = $sorgu->execute([ $yazi_baslik, $yazi, $yazis['yazi_id'] ]);
          			if ($update) {
          				header('Location:kontrol.php?sayfa=oku&yazi_id='.$yazis['yazi_id']);
          			}else{
          				echo 'Güncelleme işlemi başarısız oldu..'; }
        		  }
        	}
        ?>
  	    <form action="" method="post">
  	 	 	Yazı Başlığı: <br>
  		 	<input type="text" value="<?php echo isset($_POST['yazi_baslik']) ? $_POST['yazi_baslik'] : $yazis['yazi_baslik'] ?>" name="yazi_baslik"> <br> <br>
  		 	Yazı: <br>
  		 	<textarea type="text" value="<?php echo isset($_POST['yazi']) ? $_POST['yazi'] : $yazis['yazi'] ?>" name="yazi"></textarea> <br> <br>
  		 	<input type="hidden" name="submit" value="1">
  		 	<button class="btn btn-success" type="submit">Güncelle</button> 
  		</form>
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