<?php

require_once "../class/Enderecos.class.php";

include 'MontaUrlAmigavel.php';

$Enderecos = new Enderecos();
$Enderecos->setId_enderecos($_POST['inputIdEnderecos']);
$Enderecos->setTitulo($_POST['inputTitulo']);
$Enderecos->setEndereco($_POST['inputEndereco']);
$Enderecos->setCidade($_POST['inputCidade']);
$Enderecos->setEstado($_POST['inputEstado']);
$Enderecos->setMapa($_POST['inputMapa']);
$Enderecos->setHorario_atendimento($_POST['inputHorarioAtendimento']);
$Enderecos->setTelefone($_POST['inputTelefone']);
$Enderecos->setUrl_amigavel(url_amigavel($_POST['inputTitulo']));

if ($Enderecos->salva_dados()):
    print $Enderecos->getRetorno_dados();
else:
    print 0;
endif;