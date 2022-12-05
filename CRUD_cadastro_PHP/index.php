<?php 
	@$url = @$_GET['url'];


	include('config.php');
    include('MySql.php');
	

	$autoload = function ($class){
		if (file_exists($class.'.php')){
			include($class.'.php');
		}
	};
	spl_autoload_register($autoload);


	//SISTEMA DE ROTAS ARCAICO.
	if (empty($url) || $url=='home'){
		$homeController = new \controllers\ViewController();
		$homeController->index('home');
	}  else {
        
		switch ($url) {
			case 'adicionar_usuario':
				\controllers\ViewController::index('new_user');
				break;

			case 'listar_usuario':
				\controllers\ViewController::index('show_users');
				break;
            
            case 'salvar';
                \controllers\Controller::saveUser();
                break;

			case 'editar';
				\controllers\ViewController::index('edit_user');
				break;

			case 'update';
				\controllers\Controller::updateUser();
				break;
			
			case 'excluir';
				\controllers\Controller::deleteUser();
				break;

			default:
				die('Pagina não existe');
				break;
		}
        
	}



?>