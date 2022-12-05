<?php 

    namespace controllers;

    class Controller
    {
        public static function saveUser()
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $birthday = $_POST['birthday'];

            \models\CreateUser::index($name, $email, $password, $birthday);

        }

        public static function updateUser()
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $birthday = $_POST['birthday'];

            \models\EditUser::index($id, $name, $email, $password, $birthday);

        }

        public static function deleteUser()
        {

            \models\DeleteUser::index();

        }
        
    }

?>
