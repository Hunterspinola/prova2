<?php
include('Conexao.php');
$id = $_POST['id'];
$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $sql = "UPDATE fluxo_caixa set data = '$data', tipo = '$tipo', valor = '$valor', historico = '$historico', cheque = '$cheque' where id = $id";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados editados com sucesso!<br>";
    else
        echo "Erro ao atualizar dados: " . $mysqli_error($con) . "!";
?>

<a href="index.php">MENU</a>
<a href="Listar_fluxo_caixa.php">Voltar</a>
</body>
</html>