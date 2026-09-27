<?php
$texto = $_GET['texto'];
$data_hora = $_GET['data_hora'];
$idusuario = $_SESSION['idusuario'];

$sql = "INSERT INTO postagem (nome, data_hora, idusuario) VALUES ('$nome', '$data_hora', '$idusuario')";
require_once "conexao.php";
mysqli_query($conexao, $sql);

header('Location: index.php');
?>