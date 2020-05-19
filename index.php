<?php 
    include 'config/database.php';
    session_start();
    if((isset ($_SESSION['login']) == true) and (isset ($_SESSION['senha']) == true))
    {
        header('location:insert.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Birthday CRUD - Login</title>
</head>
<body>
    <header class="centeredTitle"> 
        <h1>BIRTHDAY CRUD - Login</h1>
    </header>

    <section class="container area-login">
        <?php 
            if (isset($_GET['status'] )) {
                if( $_GET['status'] == 'error'):
                    echo '<div class="alert alert-danger" role="alert">Usuário ou senha incorretos!</div>';
                endif;
            }
        ?>
        <form id="formLogin"action="ope.php" method="POST">
            <li class="list-group-item">
                <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" class="form-control" id="flogin" name="login" placeholder="Usuário" autocomplete="off">
                    <label for="sobrenome">Senha:</label>
                    <input type="password" class="form-control" id="fsenha" name="senha" placeholder="Senha" autocomplete="off"><br/>
                    <input type="submit" class="btn btn-primary" value="Entrar">
                </div>
            </li>
        </form>
    <section>
</body>
</html>