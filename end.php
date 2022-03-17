<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
        $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Final</title>
</head>
<body>
    <div class="d-flex flex-row-reverse bd-highlight">
        <a href="exit.php" class="btn btn-danger p-2 bd-highlight me-4 mt-2 position-absolute">Sair</a>
    </div>

    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-auto">
            <?php
                echo "<h1>Seja bem-vindo $logado</h1>";
            ?>
         </div>
    </div>
</body>
</html>