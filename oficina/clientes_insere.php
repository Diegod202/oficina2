<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "oficina";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

$consulta = "INSERT INTO `clientes`(`id_cliente`, `nome`, `email`, `telefone`, `rua`) VALUES (NULL, ' $nome.','$email.','$telefone.','$rua.');";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/phpoficina/oficina/clientes.php');


?>