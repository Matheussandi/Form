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
    <form method="post" name="form" class="container" action="./form.php">
        <div class="row">
            <div class="form-group col-6">
                <img src="img/image.png" alt="image" class="img-responsive rounded float-left">
            </div>

            <div class="col mt-5">
                <h1 class="offset-md-3 mb-5">Faça login no <span style="color: #ff2ba3;">painel</span> </h1>

                <div class="form-group">
                    <div class="offset-md-3 mb-3">
                        <label>Nome de usuário ou endereço de email</label>
                        <input type="text" name="login" class="form-control mt-2 form-control-lg"
                            placeholder="Digite o seu usuário ou email">
                    </div>
                </div>

                <div>
                    <div class="offset-md-3 mb-3">
                        <label>Senha</label>
                        <input type="password" name="password" class="form-control mt-2 form-control-lg"
                            placeholder="Digite o sua senha">
                    </div>
                </div>

                <div>
                    <div class="offset-md-3 mb-4">
                        <input type="checkbox">
                        <label>Matenha-me conectado</label>


                        <div class="row">
                            <a href="#" style="text-decoration:none">Esqueceu a senha?</a>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="offset-md-3 btn btn-primary color botao">Entrar</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>