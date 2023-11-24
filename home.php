<?php session_start();
print_r($_SESSION['CADASTROS']);
?>
<table>
    <tr>
        <th>NOME</th>
        <th>SOBRENOME</th>
    </tr>
    <?php 
    foreach($_SESSION['CADASTROS'] as $cad){
            //heredoc
        echo <<<HTML
        <tr>
            <td>{$cad['nome']}</td>
            <td>{$cad['sobrenome']}</td>
        </tr>
        HTML;
    }
    ?>
</table>