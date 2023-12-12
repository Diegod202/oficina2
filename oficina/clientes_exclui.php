<?php

$id = $_GET['id_cliente'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "oficina";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
} else {
    //echo "Conectado com o banco!";
}

$consulta = "DELETE FROM `clientes` WHERE `clientes`.`id_cliente` = " . $id;
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/phpoficina/oficina/clientes.php');

?>