<?php

require_once "../class/Dependentes.class.php";

$Dependentes = new Dependentes();

$Dependentes->setId_dependentes($_POST['inputIdDependentes']);
$Dependentes->setCodigo($_POST['inputIdAssociadosDependentes'] . "-" . $_POST['inputCodigoDependente']);
$Dependentes->setNome($_POST['inputNomeDependente']);
$Dependentes->setCpf($_POST['inputCpfDependente']);
$Dependentes->setRg($_POST['inputRgDependentes']);
$Dependentes->setData_nascimento($_POST['inputDataNascimentoDependentes']);
$Dependentes->setId_associados($_POST['inputIdAssociadosDependentes']);

if ($Dependentes->salva_dados()) {
    print $Dependentes->getRetorno_dados();
} else {
    print 0;
}