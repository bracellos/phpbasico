<?php
session_start();

if(!empty($_POST['nome']) || !empty($_POST['sobrenome'])){
    if(isset($_SESSION['CADASTROS'])){
        $inc = count($_SESSION['CADASTROS']);
    }else{
        $inc = 0;
    }
    $_SESSION['CADASTROS'][$inc + 1]['nome'] = $_POST['nome'];
    $_SESSION['CADASTROS'][$inc + 1]['sobrenome'] = $_POST['sobrenome'];
    header("Location:index.php");
}