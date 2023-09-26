<?php

$cpf = $_GET['cpf'];
include_once("conexao.php");
$stmt = "delete from tbmedicos where cpf = '$cpf';";

if(mysqli_query($conn,$stmt)){
    header("Location: ../FrontEnd/telaadministrador.php");
} else{
    echo "Erro ao apagar Médico.<br>".mysqli_error($conn);
    echo "<br><a href='../FrontEnd/telaadministrador.php'>Voltar</a>";
}
mysqli_close($conn);
?>