<?php
session_start();
if(isset($_SESSION['usuarios'])){
    if($_SESSION['tipo']!="u"){
        $erro ="Você tentou acessar uma área não permitida.";
    }
}else{
    $erro = "Usuario não autenticado.";
}
if(isset($erro)){
    header("location:../FrontEnd/telalogin.php?erro=".$erro);
}
?>