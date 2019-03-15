<?php
	session_start();
?>
<html>
<head>
<title>Inserir Dados</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
</head>
	<body>
		<h1 align="center">Cadastre os dados abaixo</h1>
		<div class="container-fluid" >
		<form  action="inserirBanco.php" method="post">
		  <div class="form-group">
		    <label for="nome">Nome</label>
		    <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Seu nome" name="nome">
		  </div>
		  <div class="form-group">
		    <label for="Valor">Valor</label>
		    <input type="text" class="form-control" id="valor" placeholder="Digite o preço" name="valor">
		  </div>
		  <div class="form-group">
		    <label for="Data">Data</label>
		    <input type="date" class="form-control" id="data" name="data">
		  </div>
		  <div class="form-group">
		    <label for="Cpf">CPF</label>
		    <input type="text" class="form-control" id="cpf" name="cpf">
		  </div>
		  <div class="form-group">
		    <label for="Data">Hora</label>
		    <input type="time" class="form-control" id="hora" name="hora">
		  </div>
		  <div class="form-group">
		    <label for="Cupom">Cupom</label>
		    <input type="text" class="form-control" id="cupom" name="cupom">
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>
		</div>

	</body>
	<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/funcoes.js"></script>
</html>