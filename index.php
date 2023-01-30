<?php
include_once('php/viacep.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Cep</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="." method="post">
        <h1 class="title">Digite o cep para localizar o endereço</h1>
        <input type="text" placeholder="Digite o cep" maxlength="8" name="cep" value="<?php echo $address->cep ?>">
        <input type="text" placeholder="Rua" name="rua" value=" <?php echo $address->logradouro ?>" disabled>
        <input type=" text" placeholder="Bairro" name="bairro" value=" <?php echo $address->bairro ?>" disabled>
        <input type="text" placeholder="Estado" name="uf" value=" <?php echo $address->localidade ?>" disabled>
        <input class="btn" type="submit">
    </form>
</body>
</html>