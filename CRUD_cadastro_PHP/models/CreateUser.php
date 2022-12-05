<?php

    
    namespace models;

    class CreateUser
    {
        public static function index($name, $email, $password, $birthday)
        {   
            $sql = \MySql::conectar()->prepare("INSERT INTO `usuarios` VALUES(null,?,?,?,?)");
			$sql->execute(array($name, $email, $password, $birthday));

            if ($sql){
                echo "<script>alert('Usuário cadastrado com sucesso!');</script>";    
                echo "<script>location.href='http://localhost/CRUD_CADASTRO_PHP/listar_usuario';</script>";
            } else {
                echo "<script>alert('FALHOU EM CADASTRAR O USUÁRIO!');</script>";    
                echo "<script>location.href='http://localhost/CRUD_CADASTRO_PHP/listar_usuario';</script>";
            }
            
        }   
    }