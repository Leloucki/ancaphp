<?php
include('conexao.php');
if(empty($_POST['emailR'])){
  echo 'Nenhum usuario inserido!';
  exit();
}

if(empty($_POST['passwordR'])){
  echo 'Nenhuma senha inserida!';
  exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['emailR']);
$user = mysqli_real_escape_string($conexao, $_POST['userR']);
$password = mysqli_real_escape_string($conexao, $_POST['passwordR']);

$query_register = 'INSERT INTO users (email, user, password) VALUES("'.$email.'", "'.$user.'", md5("'.$password.'"))';

$result = mysqli_query($conexao, $query_register);

if ($result === TRUE) {
    echo "New record created successfully"; 
  } else {
    echo "Error: " . $result . "<br>";
}