<?php
$texto = $_GET['texto'];
$data_hora = $_GET['data_hora'];

$sql = "INSERT INTO postagem (nome, data_hora ) VALUES ('$nome', '$data_hora')";
require_once "conexao.php";
mysqli_query($conexao, $sql);

header('Location: index.php');
?>