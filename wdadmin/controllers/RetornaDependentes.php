<?php

require_once "../class/Dependentes.class.php";

$Dependentes = new Dependentes();

$Dependentes->setId_associados($_POST['viIdAssociado']);

if ($Dependentes->consulta_dados()):
    print $Dependentes->getRetorno_dados();
else:
    print 0;
endif;