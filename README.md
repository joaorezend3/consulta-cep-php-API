# Consulta de CEP

## 🎥Gif Project:

![img]()

## Sobre o pojeto

Este projeto consiste em uma página web que permite ao usuário consultar informações de um endereço a partir do CEP. As informações são obtidas através da API ViaCEP (https://viacep.com.br/). A página foi desenvolvida utilizando as linguagens HTML, CSS e PHP.
___
## Como usar?

- Para executar um arquivo PHP, você precisa ter o ambiente de desenvolvimento web instalado em seu computador, como o XAMPP ou a instalação individual do PHP. Isso permitirá que você execute o código PHP e veja o resultado no navegador.

 
- clone o repositorio.

  `git clone https://github.com/joaorezend3/consulta-cep-php-API.git` 

- Abra o arquivo index.php em seu browser.

___

## Partes do Código
 
### PHP

>A lógica do projeto está contida no arquivo PHP. O código PHP verifica se o usuário enviou um CEP na requisição, constrói a URL da API ViaCEP, realiza a consulta e armazena as informações retornadas em um objeto.

```php
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
```
___
### HTML

>A interface da página é construída com HTML. Há um formulário que permite ao usuário inserir o CEP e exibe as informações do endereço retornadas pela consulta à API.
```html
<form action="." method="post">
    <h1 class="title">Digite o cep para localizar o endereço</h1>
    <input type="text" placeholder="Digite o cep" maxlength="8" name="cep" value="<?php echo $address->cep ?>">
    <input type="text" placeholder="Rua" name="rua" value=" <?php echo $address->logradouro ?>" disabled>
    <input type=" text" placeholder="Bairro" name="bairro" value=" <?php echo $address->bairro ?>" disabled>
    <input type="text" placeholder="Estado" name="uf" value=" <?php echo $address->uf ?>" disabled>
    <input class="btn" type="submit">
</form>
```
### Conclusão

>Este projeto é uma forma simples de apresentar como funciona uma consulta à API e como exibir as informações retornadas na tela. O código pode ser usado como base para outros projetos similares ou como referência.


## Tecnologias utilizadas:

- PHP
- HTML
- CSS

## Observação:

> Este projeto foi desenvolvido com uma API, o objetivo de ser simples e didático, por isso não foi utilizado nenhum framework ou biblioteca. Esse prpjeto foi feito em: 07/01/2022, 2022 e atualizado em 30/01/2023.

## Contato:

    Email: joaovitorezende45@gmail.com
    LinkedIn: https://www.linkedin.com/in/jo%C3%A3o-rezend3/
    
