<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$cnh = $_POST['cnh'];
$nome = $_POST['nome'];
$cartao = $_POST['cartao'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO Cliente(CNH, Nome, Cartao, Telefone)
VALUES ('$cnh', '$nome', '$cartao', '$telefone')";

if ($conn->query($sql) === TRUE) {
  echo "Cliente inserido com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>