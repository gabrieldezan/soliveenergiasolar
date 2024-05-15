$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Serviços");
    
     /*VALIDA TAMANHO E DIMENSÃO DAS IMAGENS DAS SOLUÇÕES*/
    $("#inputImagem").change(function () {

        if (this.files[0].size > 2000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 2MB de tamanho.");
            $("#botao_salvar").attr("disabled", true);
        } else {
            var fr = new FileReader;

            fr.onload = function () {
                var img = new Image;

                img.onload = function () {
                    if (img.width > 1000 && this.height > 1000) {
                        AvisoPersonalizado("A imagem não pode ser maior que 1000x1000 pixels de dimensão.");
                        $("#botao_salvar_solucao").attr("disabled", true);
                    } else {
                        $("#botao_salvar_solucao").removeAttr("disabled");
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        }
    });

    if ($("#inputDescricao").length > 0) {
        tinymce.init({
            selector: "textarea#inputDescricao",
            language: 'pt_BR',
            language_url: vsUrl + '/js/pt_BR.js',
            theme: "modern",
            height: 370,
            width: '100%',
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

        });
    }

    $("#inputImagem").change(function () {

        if (this.files[0].size > 2000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 2MB de tamanho.");
            $("#botao_salvar").attr("disabled", true);
        } else {
            var fr = new FileReader;

            fr.onload = function () {
                var img = new Image;

                img.onload = function () {
                    if (img.width > 1920 && this.height > 1080) {
                        AvisoPersonalizado("A imagem não pode ser maior que 1920x1080 pixels de dimensão.");
                        $("#botao_salvar").attr("disabled", true);
                    } else {
                        $("#botao_salvar").removeAttr("disabled");
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        }
    });

    $("#form_servicos").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosServicos.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdServicos").val(data);
                    $("#hiddenIdServicos").val(data);
                    CloseLoading();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));
    
    /*BOTÃO NOVO*/
    $("#botao_nova_solucao").click(function (e) {
        limpa_form_solucoes();
    });
    
    /*SUBMETE FORM SOLUÇÕES*/
    $("#form_solucoes").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosSolucoes.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    limpa_form_solucoes();
                    consulta_solucoes();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*CHAMA FUNÇÃO PARA VERIFICAR EDIÇÃO OU CADASTRO*/
    verifica_edicao();

});

/*FUNÇÃO QUE VERIFICA SE EXISTE UM ID*/
function verifica_edicao() {

    /*PEGA ID*/
    var id = $("#hiddenIdServicos").val();

    /*LIMPA AREA DE IMAGEM*/
    $(".dropify-clear").click();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_servicos(id);
        consulta_solucoes();
        $('ul li a[href="#solucoes"]').removeClass("disabled");
    } else {
        $('ul li a[href="#solucoes"]').addClass("disabled");
        $("#botao_visualizar_manual").addClass('disabled');
        CloseLoading();
    }
}

/*CARREGA DADOS DO SERVIÇO SELECIONADO*/
function edita_servicos(viIdServicos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaServicosSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdServicos: viIdServicos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputTitulo").val(data[0].titulo);
                $("#inputResumo").val(data[0].resumo);
                $("#inputDescricao").val(data[0].descricao);
                $("#inputIcone").val(data[0].icone);
                $("#inputImagemAtual").val(data[0].imagem);
                $("#imgImagemAtual").attr("src", vsUrl + "uploads/servicos/" + data[0].imagem);
                $("#inputStatus").val(data[0].status);
                CloseLoading();
            } else {
                $("#inputIdServicos").val("");
                CloseLoading();
                AvisoPersonalizado("Dados não encontrados!");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA CORES DA SOLUÇÃO*/
function consulta_solucoes() {

    var viIdServicos = $("#hiddenIdServicos").val();

    $.ajax({
        url: vsUrl + "controllers/RetornaSolucoes.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdServicos: viIdServicos
        }),
        success: function (data) {
            if (data != 0) {

                $("#tabela_solucoes tbody").html("");
                for (i = 0; i < data.length; i++) {
                    $("#tabela_solucoes tbody").append(
                            "<tr>" +
                            "<td>" + data[i].titulo + "</td>" +
                            "<td>" + data[i].texto + "</td>" +
                            "<td>" + data[i].icone + "</td>" +
                            "<td><img src='" + vsUrl + "uploads/solucoes/" + data[i].imagem + "' class='img-fluid' style='height:35px'></td>" +
                            "<td align=\"center\">" +
                            "<button type=\"button\" class=\"btn btn-secondary btn-sm\" onclick=\"edita_dados(" + data[i].id_solucoes + ")\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Editar solução " + data[i].titulo + "\"><i class=\"far fa-edit fa-fw\" aria-hidden=\"true\"></i></button>&nbsp;" +
                            "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"confirma_exclusao_registro(" + data[i].id_solucoes + ", 'solucoes', 'solucoes', '" + data[i].imagem + "', '', '', '', '');\" data-toggle=\"tooltip\" title=\"Remover " + data[i].titulo + "\"><i class=\"far fa-trash-alt fa-fw\" aria-hidden=\"true\"></i></button>" +
                            "</td>" +
                            "</tr>"
                            );
                    $('[data-toggle="tooltip"]').tooltip();
                    CloseLoading();
                }
            } else {
                $("#tabela_solucoes tbody").html("");
                $("#tabela_solucoes tbody").append(
                        "<tr>" +
                        "<td align=\"center\" colspan=\"10\">Nenhuma solução encontrada!</td>" +
                        "</tr>"
                        );
                CloseLoading();
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*CARREGA DADOS DA SOLUÇÃO SELECIONADA*/
function edita_dados(viIdSolucoes) {

    Loading();

    $.ajax({
        url: vsUrl + "controllers/RetornaSolucoesSelecionado.php",
        type: "POST",
        dataType: "json",
        data: ({
            viIdSolucoes: viIdSolucoes
        }),
        success: function (data) {
            limpa_form_solucoes();
            $("#inputIdSolucoes").val(viIdSolucoes);
            $("#inputTituloSolucoes").val(data[0].titulo);
            $("#inputTextoSolucoes").val(data[0].texto);
            $("#inputIconeSolucoes").val(data[0].icone);
            $("#inputImagemSolucoesAtual").val(data[0].imagem);
            $("#imgImagemSolucoesAtual").attr("src", vsUrl + "uploads/solucoes/" + data[0].imagem);
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*LIMPA FORMULÁRIO SOLUÇÕES*/
function limpa_form_solucoes() {
    $(".dropify-clear").click();
    $("#inputIdSolucoes").val("");
    $("#inputTituloSolucoes").val("");
    $("#inputTextoSolucoes").val("");
    $("#inputIconeSolucoes").val("");
    $("#inputImagemSolucoesAtual").val("");
    $("#imgImagemSolucoesAtual").attr("src", "");
    $("#inputImagemSolucoes").val("");
}