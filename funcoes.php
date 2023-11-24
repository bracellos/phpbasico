<?php

//funções nativas do php

$dias = [
    "domingo",
    "segunda",
    "terça",
    "quarta",
    "quinta",
    "sexta",
    "sábado"
];

//implode junta itens de um array com um separador
$listaDias = implode(" | ", $dias);

$dadosCsv = "Diego Bracellos;38;bracellos@gmail.com";
//explode transforma uma string em array baseado em um caractere separador
$csvArray = explode(";", $dadosCsv);

echo '<pre>';
print_r($csvArray);
echo '</pre>';

// cria hash md5
$senha = "ENTRA21EFODA";
$senhaHash = md5($senha);
// echo $senhaHash;

//TROCAR PEDAÇOS DE STRING
$texto = "O Fluminense é o melhor time do mundo, flamenguistas tem inveja.";

//troca uma string por outra
// $novoTexto = str_replace("é o melhor time", "é a melhor seleção",$texto);

//opção usando array
$novoTexto = str_replace(["o melhor", "time"], ["a melhor", "seleção"], $texto);
// echo $novoTexto;

//cortar um pedaço de string
$usuario  = "diego.bracellos";
$userBlock = substr($usuario, 5, 5);

// echo $userBlock."*****";

//formatar numeros
$numero = 155.5998;

$formata = number_format($numero, 2, ',');
echo $formata;

?>