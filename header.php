<!DOCTYPE html>
<html LANG="pt-br">
	<head>
		<title>Aula01 - Bootstrap</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="bootstrap/js/bootstrap.min.js"></script> 
	</head>

    <body>
        <nav class="navbar navbar-light bg-yellow">		
            <button class='navbar-toggler' role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class=''><?php require('php/db/sessao.php'); echo sessao();?></span>
            <img src="img/ancapicon.jpg" class="navbar-brand rounded-circle" width="100" height="100">		
                    
            <div class="dropdown-menu bg-yellow" aria-labelledby="navbarScrollingDropdown">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#quemsomos">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#parceiros">Parceiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#doacao">Doação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login/Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php" id='logout'>Log out</a>
                    </li>
                </ul>
            </div>
        </nav>