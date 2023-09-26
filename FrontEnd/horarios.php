<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/cssAdmin.css">
    <title>Horários</title>
</head>
<body>
    
    <?php
    include_once("../BackEnd/validarhorario.php");
    ?>
   
   <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Horarios</a>
    <form class="d-flex" role="search">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Tabelas
        </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="telaadministrador.php">Usuários</a></li>
            <li><a class="dropdown-item" href="../medico/telaadministrador.php">Médicos</a></li>
            <li><a class="dropdown-item" href="horarios.php">Horário</a></li>
            </ul>
        </div>
            <a class="btn btn-outline-danger" href="../BackEnd/logout.php">Sair</a>
        </form>
    </div>
    </nav>
   
</body>
</html>