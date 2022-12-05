<?php

    
    namespace models;

    class DeleteUser
    {
        public static function index()
        {   
            $id = $_REQUEST['id'];
            $sql = \MySql::conectar()->prepare("DELETE FROM usuarios WHERE id=$id");
			$sql->execute();

            if ($sql){
                echo "<script>alert('Usuário excluido com sucesso!');</script>";    
                echo "<script>location.href='http://localhost/CRUD_CADASTRO_PHP/listar_usuario';</script>";
            } else {
                echo "<script>alert('FALHOU AO EXCLUIR O USUÁRIO!');</script>";    
                echo "<script>location.href='http://localhost/CRUD_CADASTRO_PHP/listar_usuario';</script>";
            }
            
        }   
    }