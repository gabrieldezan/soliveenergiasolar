<?php

require_once "../class/Dependentes.class.php";

$Dependentes = new Dependentes();
$Dependentes->setId_dependentes($_POST['viIdDependentes']);

if ($Dependentes->edita_dados()):
    print $Dependentes->getRetorno_dados();
else:
    print 0;
endif;