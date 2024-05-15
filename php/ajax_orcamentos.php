<?php

header("Content-Type: text/html; charset=utf-8", true);
session_start();

include '../mail/class.WpSendMail.php';

$vsNome = $_POST["orcamento-nome"];
$vsEmail = $_POST["orcamento-email"];
$vsTelefone = $_POST["orcamento-telefone"];
$vsCidade = $_POST["orcamento-cidade"];
$vsGasto = $_POST["orcamento-gasto"];
$vsAnexo = $_FILES["orcamento-anexo"];
$vsConteudo = $_POST["orcamento-mensagem"] . "<br /><br /> ";
$vsEmailContato = $_POST["email-contato"];

$voEmail = new WpSendEmail();

print $voEmail->EnviaPedido($vsNome, $vsEmail, $vsTelefone, $vsCidade, $vsGasto, $vsAnexo, $vsConteudo, $vsEmailContato);
?>