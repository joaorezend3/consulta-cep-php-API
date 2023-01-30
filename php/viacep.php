<?php
$address = (object)[
    'cep' => "",
    'logradouro' => "",
    'bairro' => "",
    'uf' => "",

];
if (isset($_POST['cep'])) {
    $cep = $_POST['cep'];
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $address = json_decode(file_get_contents($url));
}
