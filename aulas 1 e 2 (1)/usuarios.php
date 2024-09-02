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
    <header>
        <nav>
            <ul>
                <p>logo</p>
                <li><a href="">home</a></li>
                <li><a href="">sobre</a></li>
                <li><a href="">contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <img src="images.png" alt="" srcset="">
        </div>

        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                </tr>        
            
            <?php 
              include "conecta.php"; 
               echo "<br><br>";
               $sql = "SELECT id, nome, senha, email FROM usuario";
               $resultado = mysqli_query($conexao, $sql);
               if (mysqli_num_rows($resultado) > 0) {
                while($registro = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $registro ["id"] . "       " . "</td>";
                    echo "<td>" . $registro ["nome"] . "      " . "</td>";
                    echo "<td>" . $registro ["email"] . "      " . "</td>";
                    echo "<br>";
               } }

            ?>

        </div>
    </main>
</body>
</html>