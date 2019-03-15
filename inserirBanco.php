<?php
    session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste";
//cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// verifica conexão 
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} 
// dados do formulário
$nome=$_POST["nome"];
$valor=$_POST["valor"];
$data=$_POST["data"];
$cpf=$_POST["cpf"];
$hora=$_POST["hora"];
$cupom=$_POST["cupom"];

//inserir dados
$sql = "INSERT INTO clientes (nome, valor_compra, Data, Cpf, Horario, Cumpom_compra)
VALUES ('$nome', '$valor', '$data', '$cpf', '$hora', '$cupom')";

if ($conn->query($sql) === TRUE) {
    echo "dados inseridos com sucesso";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>