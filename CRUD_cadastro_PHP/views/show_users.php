<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Usuário</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo INCLUDE_PATH; ?>">Home</a>
                    </li>
                </ul>
            </div>
        </nav>

        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data Nascimento</th>
                <th>Ações</th>
            </tr>

            
        <?php 
            $users = \models\ShowUser::index();
            //print_r($users);
            foreach ($users as $key => $value) {                 
        ?>
            <tr>
				<td><?php echo $value['id']; ?> </td>
				<td><?php echo $value['name']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><?php echo $value['birthday']; ?></td>
                <td><button class="btn btn-success"><a href="<?php echo INCLUDE_PATH; ?>editar?id=<?php echo $value['id']; ?>">
                            Editar</a></button>
                <button class="btn btn-danger"><a href="<?php echo INCLUDE_PATH; ?>excluir?id=<?php echo $value['id']; ?>">
                            Excluir</a></button></td>
            </tr>				
        <?php
	        }            
        ?>

        </table>
    </section>
    
    <script src="js/bootstrap.bundle.min.js"></script>    
</body>
</html>
