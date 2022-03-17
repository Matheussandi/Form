<?php
    class Form {
        public static function alert($type, $message) {
            if($type == 'error') {
                // Alerta não ficou muito agradável
                /* echo '<div style="font-size: 2rem">' .$message. '</div>'; */
                return false;
            } else if($type == 'success') {
                /* echo '<div style="font-size: 2rem>' .$message. '</div>'; */
                return true;
            }
        }

        public static function register($name, $user, $email, $password, $date) {
            $sql = Mysql::connect()->prepare("INSERT INTO `formulario` VALUES (null, ?, ?, ?, ?, ?)");
            $sql->execute(array($name, $user, $email, $password, $date));
        }
    }
?>