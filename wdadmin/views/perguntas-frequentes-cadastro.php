<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Cadastro de Perguntas Frequentes</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/inicio">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/perguntas-frequentes">Perguntas Frequentes</a></li>
            <li class="breadcrumb-item active">Cadastro</li>
        </ol>
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#cadastro" role="tab">
                                <span class="hidden-sm-up"><i class="far fa-edit" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="far fa-edit" aria-hidden="true"></i>&nbsp;Cadastro</span>
                            </a>
                        </li>
                        <li class="botao_novo">
                            <a class="btn btn-info btn-sm" href="<?php echo URL ?>wdadmin/perguntas-frequentes/cadastro">
                                <span class="hidden-sm-up"><i class="fas fa-plus" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Novo</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <!--PAINEL CADASTRO-->
                        <div class="tab-pane p-20 active" id="cadastro" role="tabpanel">
                            <form id="form_perguntas_frequentes" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="inputIdPerguntasFrequentes" name="inputIdPerguntasFrequentes" value="<?php echo $id ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Número/Pergunta *</label>
                                    <div class="col-sm-1">
                                        <input type="number" class="form-control form-control-sm" id="inputNumero" name="inputNumero" placeholder="#" required />
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="inputPergunta" name="inputPergunta" placeholder="Informe a pergunta" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Resposta *</label>
                                    <div class="col-sm-8">
                                        <textarea name="inputResposta" id="inputResposta" class="form-control form-control-sm" rows="5" placeholder="Informe a resposta aqui..." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm text-right">Serviços *</label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-sm" id="inputIdServicos" name="inputIdServicos"></select>
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-11">
                                        <button id="botao_salvar" type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo URL ?>wdadmin/scripts/perguntas-frequentes-cadastro.js"></script>