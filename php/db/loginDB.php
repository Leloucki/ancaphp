<?php
session_start();
include('conexao.php');
if(empty($_POST['email'])){
    echo 'Nenhum usuario inserido!';
    exit();
}

if(empty($_POST['password'])){
    echo 'Nenhuma senha inserida!';
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query_login = 'SELECT id, user FROM users WHERE email = "'.$email.'" AND password = md5("'.$password.'")';

$result = mysqli_query($conexao, $query_login);

if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $_SESSION['usuario'] = $row['user'];
    echo 'sucesso';
} else {
    echo '<p>Usuário inválido!</p>';
}
exit();
