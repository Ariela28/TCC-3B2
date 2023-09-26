<?php
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$senha = trim(password_hash ($_POST['senha'], PASSWORD_DEFAULT));

include_once("conexao.php");
$stmt = "insert into tbusuarios values ('$cpf','$nome','$contato', '$senha', 'u', 's');";

if(mysqli_query($conn,$stmt)){
    header("location:../FrontEnd/telalogin.php");
}else{
    header("location:../FrontEnd/telacadastrousuario.php");
}

?>
