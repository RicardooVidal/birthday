<?php 
    require 'config/database.php';
    include 'check_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Birthday CRUD</title>
</head>
<body>
    <header class="centeredTitle"> 
        <h1>BIRTHDAY CRUD</h1>
        <a class="btn btn-primary" href="view.php" style="margin-bottom: 10px;">Visualizar Registros</a>
        <p><?php echo $logado ?> - <a href="logout.php">SAIR</a></p>
    </header>

    <section class="container">
        <?php 
            if (isset($_GET['status'] )) {
                if( $_GET['status'] == 'success'):
                    echo '<div class="alert alert-success" role="alert">Registro inserido com sucesso!</div>';
                endif;
            }
        ?>
        <form id="formPeople"action="crud/insert.php" method="POST">
            <li class="list-group-item">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="fnome" name="nome" placeholder="Nome" autocomplete="off" required>
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" class="form-control" id="fsobrenome" name="sobrenome" placeholder="Sobrenome" autocomplete="off" required>
                    <label for="observacao">Observação:</label>
                    <input type="text" class="form-control" id="fobservacao" name="observacao" placeholder="Qualquer observação aqui" autocomplete="off" > 
                    <label for="dia">Idade Atual:</label>
                    <input type="number" class="form-control" id="fidade" name="idade" placeholder="Idade atual " autocomplete="off" required>
                    <label for="dia">Dia:</label>
                    <input type="number" class="form-control" id="fdia" name="dia" placeholder="Dia que nasceu" autocomplete="off" required>
                    <label for="mes">Mês:</label>
                    <input type="number" class="form-control" id="fmes" name="mes" placeholder="Mês que nasceu" autocomplete="off" required><br/>
                    <input type="submit" class="btn btn-primary" value="Salvar">
                </div>
            </li>
        </form>
    <section>
</body>
</html>