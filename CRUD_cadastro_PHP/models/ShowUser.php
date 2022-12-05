<?php

    namespace models;

    class ShowUser
    {
        public static function index(){
            $selectUsers = \MySql::conectar()->prepare("SELECT * FROM `usuarios`");
			$selectUsers->execute();
			$users = $selectUsers->fetchAll();

            return $users;
        }
    }

?>