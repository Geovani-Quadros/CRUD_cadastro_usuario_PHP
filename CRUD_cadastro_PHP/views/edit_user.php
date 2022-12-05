<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <section class="container">
        <h1>Editar Usuário</h1>
        <?php 


            $sql = \MySql::conectar()->prepare("SELECT * FROM usuarios WHERE id=".$_REQUEST['id']."");
            $sql->execute();
            $res = $sql->fetchAll();

        ?>
        <form action="<?php echo INCLUDE_PATH; ?>update" method="post">
            <input type="hidden" name="id" value="<?php echo $res[0]['id']; ?>">
            <div class="mb-3">
                <label for="name">Nome</label>
                <input class="form-control" type="text" name="name" value="<?php echo $res[0]['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" value="<?php echo $res[0]['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="password">Senha</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="birthday">Data de Aniversário</label>
                <input class="form-control" type="date" name="birthday" value="<?php echo $res[0]['birthday']; ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Editar</button>
            </div>

        </form>
    </section>
    
    <script src="js/bootstrap.bundle.min.js"></script>    
</body>
</html>
