<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="inserir.css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    include "conecta.php";
    $sql = "INSERT INTO usuario(nome, senha, email) values ('$nome', '$senha', '$email')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado > 0){
        echo "Cadastrado com Sucesso!";
    }

?>
    
</body>
</html>
