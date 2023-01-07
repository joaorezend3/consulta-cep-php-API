<?php

/* passando o endereço > objeto*/
$address = (object)[
    'cep' => "",
    'logradouro' => "",
    'bairro' => "",
    'uf' => "",

];
/* se o endereço existe, cira a função */
if (isset($_POST['cep'])) {
    $cep = $_POST['cep'];


    /* caso o form seja pre preenchido com algum caractere
    $cep = str_replace('_', '', $cep);
    $cep = str_replace('+', '', $cep);
    $cep = str_replace(' ', '', $cep);
    $cep = str_replace('.', '', $cep);
    */


    $url = "https://viacep.com.br/ws/{$cep}/json/";

    $address = json_decode(file_get_contents($url));
}
