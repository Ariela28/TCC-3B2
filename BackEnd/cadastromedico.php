<?php
$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$crm = $_POST['crm'];
$cpf = $_POST['cpf'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$senha = trim(password_hash ($_POST['senha'], PASSWORD_DEFAULT));

include_once("conexao.php");
$stmt = "insert into tbmedicos values ('$nome','$especialidade', '$crm', '$contato', '$email', '$endereco', '$senha', '$cpf');";

if(mysqli_query($conn,$stmt)){
    header("location:../FrontEnd/telaadministrador.php");
}else{
    header("location:../FrontEnd/telacadastromedico.php");
}

?>
