<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <section class="container">
        <form action="<?php echo INCLUDE_PATH; ?>salvar" method="post">
            <div class="mb-3">
                <label for="name">Nome</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="mb-3">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password">Senha</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="mb-3">
                <label for="birthday">Data de Aniversário</label>
                <input class="form-control" type="date" name="birthday">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>

        </form>
    </section>
    
    <script src="js/bootstrap.bundle.min.js"></script>    
</body>
</html>
