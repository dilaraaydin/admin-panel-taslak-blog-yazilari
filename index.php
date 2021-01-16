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
          <h4>Devam etmek için giriş yapınız..</h4>
        </div>
      </div>
      <hr>
      <div align="center" class="col-md-12">
      	<form action="login.php" method="POST">
		<table align="center">
		<tr>
		<td>Kullanıcı Adı</td>
		<td>:</td>
		<td><input type="text" name="username"></td>
		</tr>
		<tr>
		<td>Şifre</td>
		<td>:</td>
		<td><input type="password" name="password"></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><input type="hidden" name="submit" value="1">
		 	<button class="btn btn-success" type="submit">Giriş</button>
		</td>
		</tr>
		</table>
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