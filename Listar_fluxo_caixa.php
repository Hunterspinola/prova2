<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Listar_fluxo_caixa.css">
    <title>Listagem de fluxo de caixat</title>
</head>
<body>
   
    <?php
        include('Conexao.php');
        $sql = "select * from fluxo_caixa";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Listar fluxo de caixa</h1>
    <table align="center" border="1" width="60%">
        <tr>
        <th>Código</th>
        <th>Data</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>Histórico</th>
        <th>Cheque</th>
        <th>Alterar</th>
        <th>Excluir</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['tipo']."</td>";
                echo "<td>".$row['valor']."</td>";
                echo "<td>".$row['historico']."</td>";
                echo "<td>".$row['cheque']."</td>";
                echo "<td><a href='Altera_fluxo_caixa.php?id=" .$row['id']."'>Alterar</a> </td>";
                echo "<td><a href='Excluir_fluxo_caixa.php?id=" .$row['id']."'>Excluir</a> </td>";
                echo "</tr>";
            }
                    
        ?>
    </table>
    <a  href="Cadastro_fluxo_caixa.html">Cadastrar novo fluxo</a>

</body>
</html>