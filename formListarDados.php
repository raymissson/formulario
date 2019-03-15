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
	<h1 align="center">Resultado da pesquisa</h1>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "teste";
		//cria conexão com primeiro banco
		$conn = new mysqli($servername, $username, $password, $dbname);
		// verifica conexão 
		if ($conn->connect_error) {
		    die("Connection failed: ".$conn->connect_error);
		}
		// variáveis que recebem as datas
		$data01=$_POST["data01"];
		$data02=$_POST["data02"];
		$cpf=$_POST["cpf"];
		$sql = "SELECT valor_compra, Data, nome, Cpf 
				FROM clientes 
				WHERE Cpf='$cpf' AND Data
				BETWEEN '$data01' AND '$data02'
				ORDER BY Data";  
		$result = $conn->query($sql);
		$total=0;
		$resultado = 0;
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
				$total=$total+$row["valor_compra"];
				if($total >= 99){
					$fixo = 0.02 * 160;
					$resultado = $resultado+$fixo;
				}else{
					echo "sem desconto<br>";
				}
			}
		}else{
			echo "nenhum resultado p/ essa data";
		}
		$conn->close();

	?>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "teste02";

		// //cria conexão com primeiro banco
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		// pega o valor do cpf
		$cpf=$_POST["cpf"];
		// se existir atualiza
		$sql = "UPDATE clientes SET desconto='$resultado' WHERE cpf='$cpf'";

		if ($conn->query($sql) === TRUE) {
		    echo "Desconto de: ".$resultado." reais<br>";
		} else {
			// se não existir não atualiza
		    echo "Error updating record: " . $conn->error;
		}

		$conn->close();
	?>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/funcoes.js"></script>
</html>