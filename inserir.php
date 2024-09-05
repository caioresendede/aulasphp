<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
    <link rel="stylesheet" href="style.css">

    <style>

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            background-color: purple;
            color: white;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: orange;
        }




    </style>

</head>
<body>           
            <?php 
              include "conecta.php"; 
               $sql = "INSERT INTO usuario(nome, senha, email) VALUES ('Testando', 'Teste', 'Teste')";
               $resultado = mysqli_query($conexao, $sql);
               if ($resultado > 0) {
                echo "Cadastrado com sucesso!";
               } else {
                echo "Erro!";
               }
            ?>

        </div>
    </main>
</body>
</html>