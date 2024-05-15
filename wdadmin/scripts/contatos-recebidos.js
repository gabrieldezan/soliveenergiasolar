$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    $(this).attr("title", "WD Admin - Contatos Recebidos");

    $('#div_tabela').hide();
    $('#div_aviso').hide();

    $("#botao_pesquisa_contatos_recebidos").click(function () {
        Loading();
        carrega_contatos_recebidos();
    });

    $('#tabela_contatos_recebidos').DataTable();

    $('#modal_visualizar_contato').on('hidden.bs.modal', function (e) {
        carrega_contatos_recebidos();
    });

    carrega_contatos_recebidos();

});

/*PESQUISA OS PRODUTOS*/
function carrega_contatos_recebidos() {

    $.ajax({
        url: vsUrl + "controllers/RetornaContatosRecebidos.php",
        type: "POST",
        dataType: "json",
        async: false,
        success: function (data) {
            if (data !== 0) {
                $("#tabela_contatos_recebidos tbody").html("");
                $('#tabela_contatos_recebidos').DataTable().destroy();
                var table = $('#tabela_contatos_recebidos').DataTable({
                    "language": {
                        "url": vsUrl + "assets/plugins/datatables/Portuguese-Brasil.json"
                    },
                    "lengthMenu": [[10, 25, 50, 100, 250, -1], [10, 25, 50, 100, 250, "Todos"]],
                    dom: 'Blfrtip',
                    buttons: [
                        {
                            extend: 'copy',
                            text: '<i class="far fa-copy fa-fw"></i> Copiar',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                }
                            }
                        },
                        {
                            extend: 'excel',
                            text: '<i class="far fa-file-excel fa-fw"></i> Excel',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                }
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="far fa-file-pdf fa-fw"></i> PDF',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                }
                            },
                            orientation: 'landscape',
                            pageSize: 'LEGAL'
                        },
                        {
                            extend: 'print',
                            text: '<i class="far fas fa-print fa-fw"></i> Imprimir',
                            exportOptions: {
                                modifier: {
                                    page: 'current'
                                }
                            },
                            orientation: 'landscape',
                            pageSize: 'LEGAL'
                        }
                    ],
                    fixedHeader: false,
                    colReorder: false,
                    responsive: false,
                    "processing": true,
                    data: data,
                    "columns": [
                        {"data": "id_contatos_recebidos"},
                        {"data": "nome"},
                        {"data": "data_recebimento_formatado"},
                        {
                            "render": function (data, type, row) {
                                return "<span class=\"label label-" + row.status_class + "\">" + row.status + "</span>";
                            }
                        },
                        {
                            "render": function (data, type, row) {
                                return "<button class=\"btn btn-sm btn-outline-secondary\" onclick=\"abre_modal_visualizar_contato(" + row.id_contatos_recebidos + ", '" + row.data_recebimento_formatado + "', '" + row.nome + "', '" + row.email + "', '" + row.telefone + "', '" + row.mensagem + "')\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Visualizar contato de " + row.nome + "\"><i class=\"far fa-eye fa-fw\" aria-hidden=\"true\"></i></button>";
                            }
                        }
                    ],
                    'columnDefs': [
                        {
                            "targets": 0,
                            "className": "text-center"
                        },
                        {
                            "targets": 2,
                            "className": "text-center"
                        },
                        {
                            "targets": 3,
                            "className": "text-center"
                        },
                        {
                            "targets": 4,
                            "className": "text-center"
                        }
                    ],
                    "drawCallback": function (settings) {
                        $('[data-toggle="tooltip"]').tooltip();
                    },
                    "order": [[0, "desc"]]
                });
                $('#div_aviso').hide();
                $('#div_tabela').show();
            } else {
                $('#div_tabela').hide();
                $('#div_aviso').show();
            }
            CloseLoading();
        },
        error: function () {
            $("#tabela_contatos_recebidos tbody").html("");
            CloseLoading();
            Erro();
        }
    });
}

/*ATUALIZA STATUS CONTATOS RECEBIDOS*/
function atualiza_status_contatos_recebidos(viIdContatosRecebidos) {

    $.ajax({
        url: vsUrl + "controllers/AtualizaStatusContatosRecebidos.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdContatosRecebidos: viIdContatosRecebidos
        }),
        success: function (data) {
            if (data == 0) {
                AvisoPersonalizado("Status não atualizado!");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}

/*ABRE MODAL VISUALIZAR CONTATO*/
function abre_modal_visualizar_contato(viIdContatosRecebidos, vsDataRecebimento, vsNome, vsEmail, vsTelefone, vsAssunto, vsMensagem) {
    $("#vsDataRecebimento").html(vsDataRecebimento);
    $("#vsNome").html(vsNome);
    $("#vsEmail").html(vsEmail);
    $("#vsTelefone").html(vsTelefone);
    $("#vsAssunto").html(vsAssunto);
    $("#vsMensagem").html(vsMensagem);
    atualiza_status_contatos_recebidos(viIdContatosRecebidos);
    $("#modal_visualizar_contato").modal("show");
}