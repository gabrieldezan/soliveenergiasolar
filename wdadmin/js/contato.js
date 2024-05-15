jQuery(function ($) {

    vsUrl = $("#vsUrl").val();

    /*MASCARAS*/
    $("#vsTelefone").mask("(99) 99999-9999");

    /*FORM*/
    $("#form_contato").on('submit', (function (e) {

        $('#botao_enviar_mensagem').html('<i class="fas fa-spinner fa-pulse"></i> Aguarde...');
        $("#botao_enviar_mensagem").prop("disabled", true);

        e.preventDefault();
        $.ajax({
            url: vsUrl + "wdadmin/controllers/SalvaDadosContatosRecebidos.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (vsReturn) {
                $("#botao_enviar_mensagem").html('Enviar');
                $("#botao_enviar_mensagem").prop("disabled", false);
                if (vsReturn == "1") {
                    LimpaForm();
                    Sucesso();
                } else {
                    Aviso();
                }
            },
            error: function (vsReturn) {
                $("#botao_enviar_mensagem").html('Enviar');
                $("#botao_enviar_mensagem").prop("disabled", false);
                alert('Erro: ' + vsReturn);
            }
        });
        return false;
    }));

    function LimpaForm() {
        $("#vsNome").val("");
        $("#vsEmail").val("");
        $("#vsTelefone").val("");
        $("#vsAssunto").val("");
        $("#vsMensagem").val("");
    }

});

function Sucesso() {
    swal("Parabéns!", "E-mail enviado com sucesso!", "success");
}

function Aviso() {
    swal("Aviso!", "Ocorreu um erro ao enviar o e-mail!", "warning");
}