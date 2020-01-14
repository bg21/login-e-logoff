<?php
    include('config.php');
    if($_SESSION['login'] != true){
        header('Location: index.php');
        die();
    }
    echo '<h2>Bom dia '.$_SESSION['usuario'].'.</h2>';   
    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    }
?>
<h2><a href="?sair">Sair</a></h2>



