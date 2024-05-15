<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Contatos Recebidos</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio">Home</a></li>
            <li class="breadcrumb-item active">Contatos Recebidos</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="div_tabela" class="table-responsive">
                        <table id="tabela_contatos_recebidos" class="table table-sm table-hover table-striped table-bordered" cellspacing="0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Data Recebimento</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <div id="div_aviso" class="row">
                        <div class="col-sm">
                            <div class="alert alert-warning" role="alert">
                                <center>
                                    Nenhum resultado encontrado!
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MODAL VISUALIZAR CONTATO-->
<div class="modal fade" id="modal_visualizar_contato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="far fa-eye fa-fw"></i> Visualizar Contato</h5>
            </div>
            <div class="modal-body">
                <p><small>Recebido em <span id="vsDataRecebimento"></span></small></p>
                <p><b>Nome: </b> <span id="vsNome"></span></p>
                <p><b>E-mail: </b> <span id="vsEmail"></span></p>
                <p><b>Telefone: </b> <span id="vsTelefone"></span></p>
                <p><b>Assunto: </b> <span id="vsAssunto"></span></p>
                <p><b>Mensagem: </b><br/><span id="vsMensagem"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo URL ?>wdadmin/scripts/contatos-recebidos.js"></script>