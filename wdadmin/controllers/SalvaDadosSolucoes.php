<?php

require_once "../class/Arquivos.class.php";
require_once "../class/Solucoes.class.php";

include 'MontaUrlAmigavel.php';

$Arquivos = new Arquivos();
$Solucoes = new Solucoes();

$Solucoes->setId_solucoes($_POST['inputIdSolucoes']);
$Solucoes->setId_servicos($_POST['hiddenIdServicos']);
$Solucoes->setTitulo($_POST['inputTituloSolucoes']);
$Solucoes->setTexto($_POST['inputTextoSolucoes']);
$Solucoes->setIcone($_POST['inputIconeSolucoes']);

$Arquivos->setArquivo_atual($_POST['inputImagemSolucoesAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputImagemSolucoes']);
$Arquivos->setNome_amigavel(url_amigavel($_POST['inputTituloSolucoes']));
$Arquivos->setPasta("solucoes");
$Arquivos->insere_arquivo();
$Solucoes->setImagem($Arquivos->getRetorno_arquivo());

if ($Solucoes->salva_dados()) {
    print $Solucoes->getRetorno_dados();
} else {
    print 0;
}