<?php
include_once('viacep.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Cep</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ms+Madi&display=swap" rel="stylesheet">
</head>

<body>
    <form action="." method="post">
        <h1 class="title">Digite o cep para localizar o endereço</h1>
        <input class="btn" type="submit">
        <input type="text" placeholder="Digite o cep" maxlength="8" name="cep" value="<?php echo $address->cep ?>">
        <input type="text" placeholder="Rua" name="rua" value=" <?php echo $address->logradouro ?>" disabled>
        <input type=" text" placeholder="Bairro" name="bairro" value=" <?php echo $address->bairro ?>" disabled>
        <input type="text" placeholder="Estado" name="uf" value=" <?php echo $address->localidade ?>" disabled>
    </form>
</body>

</html>