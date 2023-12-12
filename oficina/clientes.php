<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Oficina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="veiculos.php">Veiculos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a class="nav-link" href="sobre.php">Sobre</a>
            </span>
            </div>
        </div>
    </nav>

    <center>
        <br>
        <h1>Listagem de Clientes</h1>
        <br>
        <br>
        <a href="clientes_formulario.php" class="btn btn-primary" role="button">Cadastrar Clientes</a>
    </center>

    <?php

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

    $consulta = "SELECT * FROM `clientes`";
    $result = $conn->query($consulta);

    if ($result->num_rows > 0) {
?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Rua</th>
            </tr>
        </thead>
        <tbody>


<?php
        while($row = $result->fetch_assoc()) {
            //echo $row["id"]. " - " . $row["nome"] . " <a href=\"excluir_curso.php?id=". $row["id"] ."\">Excluir</a> <br>";
            
            echo "<tr>";
            echo "<th scope=\"row\">". $row["id"] ."</th>";
            echo "<td>". $row["nome"] ."</td>";
            echo "<td>". $row["email"] ."</td>";
            echo "<td>". $row["telefone"] ."</td>";
            echo "<td>". $row["rua"] ."</td>";
            echo "<td><a href=\"clientes_exclui.php?id=". $row["id_cliente"] ."\">Excluir</a></td>";
            echo "</tr>";
        }
?>

        </tbody>
    </table>

<?php
    } else {
        echo "0 itens";
    }
    $conn->close();


    ?>
       

    
</body>
</html>