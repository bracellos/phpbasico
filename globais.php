<?php
// $_GET pega tudo que esta sendo passado na URL
//$_GET['parametro'] pega o valor do parametro informado
// COMEÇA COM ?parametro=valor a partir do segundo parametro uso &

/**
 * $_POST pega todos os parametros em um array
 * $_POST['parametro'] traz o valor do parametro informado
 */

 /**
  * armazena informações de forma global
  */
//  $_GLOBALS['token'] = md5(13455);

// $_SERVER traz informações do ambiente

//$_SESSION grava informacões no servidor
session_start();
// $_SESSION['cadastro']['nome'] = "Diego";
// $_SESSION['cadastro']['sobrenome'] = "Bracellos";




echo "<pre>";
    print_r($_FILES);
echo "</pre>";