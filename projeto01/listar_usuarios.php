<?php

    include('conexao.php');
    $sql = 'SELECT * FROM usuario';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    $row = mysqli_fetch_array($result);

    //printr($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Usuários</title>
</head>
<body>
    <h1>Listagem de Usuários</h1>
    <table align="center" border="1" width=500>

        <!-- tr>th*quantidade desejada de colunas -->
        <tr>
            <th>CODIGO</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
        </tr>
    
    <!-- Criação dinâmica de linhas e colunas -->
    <?php
        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' .$row['id_usuario'] .'</td>';
            echo "<td><a href='altera_usuario.php?id_usuario=".$row['id_usuario']."'>".$row['nome_usuario']."</a></td>";
            echo '<td>' .$row['email_usuario'] .'</td>';
            echo '<td>' .$row['telefone_usuario'] .'</td>';
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>