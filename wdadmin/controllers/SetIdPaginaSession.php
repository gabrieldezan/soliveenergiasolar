<?php

session_start();

$_SESSION['id_conteudo_personalizado'] = $_POST['id'];
$_SESSION['titulo_conteudo_personalizado'] = $_POST['titulo'];