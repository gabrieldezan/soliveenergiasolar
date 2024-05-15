<section class="ss_section_footer">
    <div class="container-fluid">	
        <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="ss_foot_sec">
                    <a href="<?php echo URL ?>"><img class="img-fluid" src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" title="<?php echo $voResultadoConfiguracoes->titulo ?>" alt="<?php echo "logo" . $voResultadoConfiguracoes->titulo ?>" /></a>
                    <?php
                    $vsSqlTxtRodape = "SELECT resumo_texto FROM sobre";
                    $vrsExecutaTxtRodape = mysqli_query($Conexao, $vsSqlTxtRodape) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                    while ($voResultadoTxtRodape = mysqli_fetch_object($vrsExecutaTxtRodape)) {
                        ?>
                        <p><?php echo $voResultadoTxtRodape->resumo_texto ?>...</p>
                        <?php
                    }
                    ?>
                    <ul class="social_share">
                        <li>
                            <a target="blank" href="<?php echo "https://api.whatsapp.com/send?phone=55" . str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <?php
                        $vsSqlRedesSociais = "SELECT link, icone FROM redes_sociais";
                        $vrsExecutaRedesSociais = mysqli_query($Conexao, $vsSqlRedesSociais) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoRedesSociais = mysqli_fetch_object($vrsExecutaRedesSociais)) {
                            ?>
                            <li>
                                <a target="blank" href="<?php echo $voResultadoRedesSociais->link ?>">
                                    <i class="<?php echo $voResultadoRedesSociais->icone ?>"></i>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head">Contato</h2>
                    <ul class="contatos-footer">
                        <?php
                        $vsSqlContato = "SELECT endereco, cidade, estado, mapa, telefone FROM enderecos";
                        $vrsExecutaContato = mysqli_query($Conexao, $vsSqlContato) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoContato = mysqli_fetch_object($vrsExecutaContato)) {
                            ?>
                            <li><a href="<?php echo $voResultadoContato->mapa ?>" target="blank"><i class="fas fa-map-marker-alt"></i> <?php echo $voResultadoContato->endereco . " - " . $voResultadoContato->cidade . " - " . $voResultadoContato->estado ?></a></li>
                            <li><a href="<?php echo "mailto:" . $voResultadoConfiguracoes->email ?>"><i class="fas fa-envelope"></i> <?php echo $voResultadoConfiguracoes->email ?></a></li>
                            <li><a href="<?php echo "tel:55" . str_replace(array("(", ")", "-", " "), "", $voResultadoContato->telefone) ?>" target="blank"><i class="fas fa-phone"></i> <?php echo $voResultadoContato->telefone ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="ss_foot_sec">
                    <h2 class="ss_foot_head">Links</h2>
                    <ul>
                        <li><a href="<?php echo URL . "#quem-somos" ?>"><i class="fas fa-circle"></i> Quem Somos</a></li>
                        <li><a href="<?php echo URL . "#como-funciona" ?>"><i class="fas fa-circle"></i> Como Funciona</a></li>
                        <li><a href="<?php echo URL . "#etapas" ?>"><i class="fas fa-circle"></i> Etapas</a></li>
                        <?php /*
                          <li><a href="<?php echo URL . "projetos" ?>"><i class="fas fa-circle"></i> Projetos</a></li>
                          <li><a href="<?php echo URL . "#parceiros" ?>"><i class="fas fa-circle"></i> Parceiros</a></li>
                         */ ?>
                        <li><a href="<?php echo URL . "#contato" ?>"><i class="fas fa-circle"></i> Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<div class="ss_copywrite">
    <div class="container-fluid">
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <p><a href="<?php echo URL ?>"><?php echo $voResultadoConfiguracoes->titulo ?></a>. Todos direitos reservados</p>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 logo-wd">
            <a href="https://webdezan.com.br" target="blank"><img src="<?php echo URL . "assets/images/logo-wd.png" ?>"></a>
        </div>
    </div>
</div>