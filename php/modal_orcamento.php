<div class="solar_quote">
    <div class="modal fade" id="ModalOrcamento" tabindex="-1" role="dialog" aria-labelledby="ModalOrcamentoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalOrcamentoLabel">Orçamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact_form">
                        <form id="form-orcamento" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="vsUrl" name="vsUrl" value="<?php echo URL ?>">
                            <input type="hidden" id="email-contato" name="email-contato" value="<?php echo EMAIL_CONTATO ?>">
                            <div class="form-group">
                                <input name="orcamento-nome" id="orcamento-nome" type="text" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="form-group">
                                <input name="orcamento-email" id="orcamento-email" type="email" class="form-control" placeholder="E-Mail" required>
                            </div>
                            <div class="form-group">
                                <input name="orcamento-telefone" id="orcamento-telefone" type="tel" class="form-control" placeholder="Telefone" required>
                            </div>
                            <div class="form-group">
                                <input name="orcamento-cidade" id="orcamento-cidade" type="text" class="form-control" placeholder="Cidade-UF" required>
                            </div>
                            <div class="form-group">
                                <input name="orcamento-gasto" id="orcamento-gasto" type="text" class="form-control" placeholder="Gasto médio mensal em eletricidade (R$)">
                            </div>
                            <p>Para que possamos dimensionar corretamente seu sistema é importante que você anexe a fatura da sua conta de energia.</p>
                            <div class="form-group">
                                <input name="orcamento-anexo" id="orcamento-anexo" type="file" class="form-control-file" aria-describedby="fileHelp" accept=".pdf, .png, .jpg, .jpeg">
                            </div>
                            <div class="form-group">
                                <textarea name="orcamento-mensagem" id="orcamento-mensagem" class="form-control" rows="3" placeholder="Mensagem..."></textarea>
                            </div>
                            <button id="botao-enviar-orcamento" type="submit" class="white_btn">Enviar</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</div>