<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <span class="navbar-brand">Crud Cadastro</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo INCLUDE_PATH; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo INCLUDE_PATH; ?>adicionar_usuario">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo INCLUDE_PATH; ?>listar_usuario">Listar Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <script src="js/bootstrap.bundle.min.js"></script>    
</body>
</html>
