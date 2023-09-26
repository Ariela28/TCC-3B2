<?php
$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$crm = $_POST['crm'];
$cpf = $_POST['cpf'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

include_once("conexao.php");

$stmt = "update tbmedicos set nome = '$nome', especialidade = '$especialidade',  crm = '$crm', contato = '$contato', email = '$email', endereco = '$endereco' where cpf = $cpf;";
if(mysqli_query($conn,$stmt)){
    header('Location: ../FrontEnd/telaadministrador.php');
}else{
    echo "Erro ao alterar dados do médico.<br>".myslqli_error($conn);
    echo "<br><a href='../FrontEnd/telaadministrador.php'>Voltar</a>";
}
mysqli_close($conn);
?>