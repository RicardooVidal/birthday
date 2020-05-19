<?php 
    include '../config/database.php';
    include '../check_session.php';
    if ($_SESSION['login'] != 'admin') {
        header('location:/birthday/index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <title>Birthday CRUD - Insert Users</title>
</head>
<body>
    <header class="centeredTitle"> 
        <h1>BIRTHDAY CRUD - Insert Users</h1>
        <a class="btn btn-primary" href="view.php" style="margin-bottom: 10px;">Visualizar Registros</a>
        <p><a href="../logout.php">SAIR</a></p>
    </header>

    <section class="container">
        <?php 
            if (isset($_GET['status'] )) {
                if( $_GET['status'] == 'error'):
                    echo '<div class="alert alert-danger" role="alert">Usuário ou senha incorretos!</div>';
                endif;
            }
        ?>
        <form id="formLogin"action="crud/insert.php" method="POST">
            <li class="list-group-item">
                <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" class="form-control" id="flogin" name="login" placeholder="Usuário" autocomplete="off">
                    <label for="sobrenome">Senha:</label>
                    <input type="password" class="form-control" id="fsenha" name="senha" placeholder="Senha" autocomplete="off">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="fnome" name="nome" placeholder="Nome" autocomplete="off"><br/>
                    <label for="nome">BotID:</label>
                    <input type="text" class="form-control" id="fbotid" name="botID" placeholder="Bot ID" autocomplete="off"><br/>
                    <label for="nome">Chat ID:</label>
                    <input type="text" class="form-control" id="fchatid" name="chatID" placeholder="Chat ID" autocomplete="off"><br/>
                    <label for="nome">Default Token:</label>
                    <input type="text" class="form-control" id="fdefaulttoken" name="defaultToken" placeholder="Default Token" autocomplete="off"><br/>
                    <input type="submit" class="btn btn-primary" value="Salvar">
                </div>
            </li>
        </form>
    <section>
</body>
</html>