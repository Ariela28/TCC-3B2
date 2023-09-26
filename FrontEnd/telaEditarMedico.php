<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Edição de  Médicos</title>
</head>



<body>
    <div class="container">
       

        

        <!-- COLOCAR AQUI OS CODIGOS PHP PARA BUSCAR OS DADOS DO PRODUTO -->
       
        <?php
            $cpf = $_GET['cpf'];

            $stmt = "select * from tbmedicos where cpf = $cpf;";
            include_once("conexao.php");
            $result = mysqli_query($conn,$stmt);
            $medico = mysqli_fetch_assoc($result);
        ?>



        <!-- FORMULÁRIO DE EDIÇÃO -->
        <p></p>
        <h4>EDIÇÃO DE MÉDICOS</H4>
        <form method="get" action="../BackEnd/editarMedico.php">
        <div class="form-group">
            <div>
                <label for="cpf">CPF:</label>
                <input id="cpf" name="cpf" type="text" required="required" class="form-control" readonly 
                value="<?php echo $cpf ?>"> <!-- <--COLOCAR O CÓDIGO PHP PARA EXIBIR O CODPROD DA TABELA -->
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" placeholder="Informe o nome do médico!!" type="text" required="required" class="form-control" 
                value="<?php echo $medico['nome']; ?>"> <!-- <--COLOCAR O CÓDIGO PHP PARA EXIBIR A DESCRICAO DA TABELA -->
            </div>
            <div class="form-group">
                <label for="contato">Contato</label>
                <input id="contato" name="contato" placeholder="Informe o contato do médico!!" type="text" required="required" class="form-control" 
                value="<?php echo $medico['contato']; ?>"> <!-- <--COLOCAR O CÓDIGO PHP PARA EXIBIR A QUANTIDADE DA TABELA -->
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input id="email" name="email" placeholder="Informe o email do médico!!" type="text" required="required" class="form-control" 
                value="<?php echo $medico['email']; ?>"> <!-- <--COLOCAR O CÓDIGO PHP PARA EXIBIR O PRECO DA TABELA -->
            </div>
            <div class="form-group">
                <label for="endereco">Endereco</label>
                <input id="endereco" name="endereco" placeholder="Informe o endereço do médico!!" type="text" required="required" class="form-control" 
                value="<?php echo $medico['endereco']; ?>"> <!-- <--COLOCAR O CÓDIGO PHP PARA EXIBIR O PRECO DA TABELA -->
            </div>
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>

    </div>

</body>

</html>