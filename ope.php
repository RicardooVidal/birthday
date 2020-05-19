<?php 
    include 'config/database.php';

    // session_start inicia a sessão
    session_start();
    // as variáveis login e senha recebem os dados digitados na página anterior
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
    $db = mysqli_select_db($conn, "birthday") or die("Sem acesso ao DB, Entre em contato com o Administrador, contato@ricardovidal.xyz");

    $result = mysqli_query($conn, "SELECT * FROM users 
    WHERE username = '$login' AND password= '$senha'");

    /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
    bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
    será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
    resultado ele redirecionará para a página site.php ou retornara  para a página 
    do formulário inicial para que se possa tentar novamente realizar o login */
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