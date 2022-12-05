<?php

    
    namespace models;

    class EditUser
    {
        public static function index($id, $name, $email, $password, $birthday)
        {   
            //echo $id, $name, $email, $password, $birthday;
            
            $sql = \MySql::conectar()->prepare("UPDATE usuarios SET name=?,email=?,password=?,birthday=? WHERE id=?");
			$sql->execute(array($name, $email, $password, $birthday, $id));
            
            if ($sql){
                echo "<script>alert('Usuário editado com sucesso!');</script>";    
                echo "<script>location.href='http://localhost/CRUD_CADASTRO_PHP/listar_usuario';</script>";
            } else {
                echo "<script>alert('FALHOU EM EDITAR O USUÁRIO!');</script>";    
                echo "<script>location.href='http://localhost/CRUD_CADASTRO_PHP/listar_usuario';</script>";
            }
            
            
        }   
    }
