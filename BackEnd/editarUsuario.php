<?php
$cpf = $_GET['cpf'];
$nome = $_GET['nome'];
$contato = $_GET['contato'];
$tipo = $_GET['tipo'];
$ativo= $_GET['ativo'];

include_once("conexao.php");

$stmt = "update tbusuarios set nome = '$nome', contato = '$contato', tipo = '$tipo', ativo = '$ativo' where cpf = $cpf;";
if(mysqli_query($conn,$stmt)){
    header('Location: ../FrontEnd/telaadministrador.php');
}else{
    echo "Erro ao alterar dados do Usuário.<br>".myslqli_error($conn);
    echo "<br><a href='../FrontEnd/telaadministrador.php'>Voltar</a>";
}
mysqli_close($conn);
?>