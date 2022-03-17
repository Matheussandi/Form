<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM formulario WHERE email = '$email' OR usuario = '$email' AND senha = '$password'";

        $result = $connection->query($sql);
        
        if(mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: index.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $password;
            header('Location: end.php');
        }
        
    } else {
        header('Location: index.php');
    }
?>