<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Pesquisa de datas</title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<body>

<div class="container-fluid">
  <h1 align="center">Pesquise o período Desejado</h1>
  	<form  action="formListarDados.php" method="post">
		  <div class="form-group">
		    <label for="Data">Período de</label>
		    <input type="date" class="form-control" id="data" name="data01">
		  </div>
		  <div class="form-group">
		    <label for="Data">Até</label>
		    <input type="date" class="form-control" id="data" name="data02">
		  </div>
		  <div class="form-group">
		    <label for="Cpf">Cpf:</label>
		    <input type="text" class="form-control" id="cpf" name="cpf">
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/funcoes.js"></script>
</html>