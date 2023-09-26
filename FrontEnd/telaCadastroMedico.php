<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="post" action="../BackEnd/cadastromedico.php">
                <h1>Cadastro de Medico</h1>
                <div class="form-group">
                    <label for="email">Nome</label>
                    <input id="nome" name="nome" placeholder="Informe seu nome completo" type="text" required="required"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="nome">CPF</label>
                    <input id="cpf" name="cpf" placeholder="Informe seu CPF" type="text" required="required"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="nome">CRM</label>
                    <input id="crm" name="crm" placeholder="Informe seu CRM" type="text" required="required"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="nome">Especialidade</label>
                    <input id="especialidade" name="especialidade" placeholder="Informe seu CRM" type="text" required="required"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="contato">Contato</label>
                    <input id="contato" name="contato" placeholder="Informe seu numero de contato" type="text" required="required"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" placeholder="Informe seu numero de contato" type="text" required="required"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="nome">endereco</label>
                    <input id="endereco" name="endereco" placeholder="Informe seu numero de contato" type="text" required="required"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <div class="input-group">
                        <input id="senha" name="senha" type="password" required="required" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                               <i class="fa fa-eye-slash" id="olho"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>

        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>