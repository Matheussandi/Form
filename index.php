<?php
    include('./config.php');
    Mysql::connect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">

    <title>Form</title>
</head>

<body>
    <form method="POST" name="form" class="container">
        <div class="row">

        <?php
            if(isset($_POST['action']) && $_POST['form'] == 'f_form') {
                $name = $_POST['fullName'];
                $user = $_POST['user'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                if($name == '') {
                    Form::alert('error', 'Nome em branco');
                } else if($user == '') {
                    Form::alert('error', 'Usuário em branco');
                } else if($email == '') {
                    Form::alert('error', 'Email vazio');
                } else if ($password == '') {
                    Form::alert('error', 'Senha em branco');
                } else {
                    $datenow = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
                    $date = date_format($datenow,"Y/m/d H:i:s");

                    Form::register($name, $user, $email, $password, $date);
                    Form::alert('success', 'Usuário ' .$user. 'castrado com sucesso');
                }
            }
        ?>

            <div class="form-group col-6">
                <img src="img/image.png" alt="image" class="img-responsive rounded float-left">
            </div>

            <div class="col mt-5">
                <h1 class="offset-md-3 mb-5">Faça login no <span style="color: #ff2ba3;">painel</span> </h1>

                <div class="form-group">
                    <div class="offset-md-3 mb-3">
                        <label>Nome de Completo</label>
                        <input type="text" name="fullName" class="form-control mt-2 form-control-lg"
                            placeholder="Digite seu nome completo">
                    </div>
                </div>

                <div class="form-group">
                    <div class="offset-md-3 mb-3">
                        <label>Usuário</label>
                        <input type="text" name="user" class="form-control mt-2 form-control-lg"
                            placeholder="Digite seu usuário">
                    </div>
                </div>

                <div class="form-group">
                    <div class="offset-md-3 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control mt-2 form-control-lg"
                            placeholder="Digite seu email">
                    </div>
                </div>

                <div>
                    <div class="offset-md-3 mb-3">
                        <label>Senha</label>
                        <input type="password" name="password" class="form-control mt-2 form-control-lg"
                            placeholder="Digite sua senha">
                    </div>
                </div>

<!--                 <div>
                    <button type="submit" name="action" value="register" class="offset-md-3 btn btn-primary color botao mt-3">Cadastrar</button>
                </div> -->

                <div>
                    <input type="submit" name="action" value="Cadastrar" class="offset-md-3 btn btn-primary color botao mt-3">
                </div>

                <div>
                    <input type="hidden" name="form" value="f_form">
                </div>
            </div>
        </div>
    </form>
</body>

</html>