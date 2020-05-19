<?php 
    require ("config/database.php");
    include 'check_session.php';

    $db = mysqli_select_db($conn, "birthday") or die("Error " . mysqli_error());
    $sql = mysqli_query($conn, "SELECT * FROM birthday");
    while($row = mysqli_fetch_array($sql)) {
        $registers[] = $row;
     }

    if (count($registers) == 0 ) {
        $status = 'error';
    } else {
        $status = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Birthday CRUD - View registers</title>
</head>
<body>
    <header class="centeredTitle"> 
        <h1>BIRTHDAY CRUD - Registers</h1>
        <a class="btn btn-primary" href="insert.php" style="margin-bottom: 10px;">Inserir Registro</a>
        <p><?php echo $logado ?> - <a href="logout.php">SAIR</a></p>
    </header>

    <section class="container">
        <?php 
            if( $status == 'error'):
                echo '<div class="alert alert-danger" role="alert">Sem registros!</div>';
            endif;

            if (isset($_GET['status'] )) {
                if( $_GET['status'] == 'success'):
                    echo '<div class="alert alert-success" role="alert">Registro deletado com sucesso!</div>';
                endif;
            }
        ?>
        <ul class="list-group">
            <?php foreach($registers as $r): ?>
                <li class="list-group-item registers"> 
                    <h3><?php echo $r['firstname'].' '.$r['lastname'] ?></h3>
                    <h4><?php echo $r['obs']?></h4>
                    <p>Dia <?php echo $r['day'].'/'.$r['month'] ?></p>     
                    <div class="buttons-register">
                        <div>
                            <form action="crud/delete.php" method="post"> 
                                <input type="hidden" name="id" value=<?php echo $r['id']?>>  
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <section>
</body>
</html>