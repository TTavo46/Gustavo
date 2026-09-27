<?php
$texto = $_GET['texto'];
$idusuario = $_SESSION['idusuario'];

$sql = "INSERT INTO postagem (nome, idusuario) VALUES ('$nome', '$idusuario')";
require_once "conexao.php";
mysqli_query($conexao, $sql);

header('Location: index.php');
?>