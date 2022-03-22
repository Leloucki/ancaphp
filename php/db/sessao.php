<?php
function sessao(){
    session_start();
    if(empty($_SESSION['usuario'])){
        return '';
        exit();
    } else {
        return 'Olá, '.$_SESSION['usuario'].'!';
        exit();
    }
}

function logOut(){
    session_destroy();
}

?>