<?php 
    include 'config/database.php';

    // session_start inicia a sess�o
    session_start();
    // as vari�veis login e senha recebem os dados digitados na p�gina anterior
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    // as pr�ximas 3 linhas s�o respons�veis em se conectar com o bando de dados.
    $db = mysqli_select_db($conn, "birthday") or die("Sem acesso ao DB, Entre em contato com o Administrador, contato@ricardovidal.xyz");

    $result = mysqli_query($conn, "SELECT * FROM users 
    WHERE username = '$login' AND password= '$senha'");

    /* Logo abaixo temos um bloco com if e else, verificando se a vari�vel $result foi 
    bem sucedida, ou seja se ela estiver encontrado algum registro id�ntico o seu valor
    ser� igual a 1, se n�o, se n�o tiver registros seu valor ser� 0. Dependendo do 
    resultado ele redirecionar� para a p�gina site.php ou retornara  para a p�gina 
    do formul�rio inicial para que se possa tentar novamente realizar o login */
    $array = array();
    if(mysqli_num_rows ($result) > 0 )
    {
        while($row = mysqli_fetch_array($result)) {
            $array['name'] = $row;
         }

        foreach($array as $a):
            $name = $a['name'];
        endforeach;

        $_SESSION['name'] = $name;
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:insert.php');
    }
    else{
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('location:index.php?status=error');
    }
?>