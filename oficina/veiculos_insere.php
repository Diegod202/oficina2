<?php

$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$marca = $_POST['marca'];
$placa = $_POST['placa'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "oficina";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

$consulta = "INSERT INTO `veiculos`( `ano`, `modelo`, `marca`, `placa`) VALUES ('$ano','$modelo','$marca','$placa')";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/phpoficina/oficina/veiculos.php');


?>