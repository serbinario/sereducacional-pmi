
//Evento do click para matricular
$(document).on('click', '#consultarFrequencia', function (event) {


    //Recuperando os valores dos campos do fomulário
    var turma    = idTurma;
    idProfessor  = $('#professor').val();
    idDisciplina = $('#disciplina').val();
    dataInicio   = $('#data_inicio').val();

    // Verificando se os campos de preenchimento obrigatório foram preenchidos
    if (!idDisciplina && !dataInicio) {
        swal("Oops...", "Há campos obrigatórios que não foram preenchidos!", "error");
        return false;
    }

    //Setando o o json para envio
    var dados = {
        'turma' : turma,
        'professor' : idProfessor,
        'disciplina' : idDisciplina,
        'dataInicio' : dataInicio
    };

    // Requisição Ajax
    jQuery.ajax({
        type: 'POST',
        url: laroute.route('turma.frequencia.consultar'),
        data: dados,
        datatype: 'json'
    }).done(function (json) {

        if(json['return']) {

            var html = "";

            // início - thead
            html += "<thead>";
            html += "<tr>";
            html += "<th>ALUNOS</th>";

            $.each( json['aulas'], function( key, value ) {
                html += "<th>"+ key +"</th>";
            });

            html += "</tr></thead>";
            // fim - thead

            // início - tbody
            html += "<tbody>";

            // Varre os alunos
            $.each( json['alunos'], function( keyAluno, valueAluno ) {
                html += "<tr>";
                html += "<td>"+ valueAluno['nome'] + "</td>";

                // Varre os dias da semana contido no registro de cada alunos
                $.each( valueAluno['aulas'], function( keyDia, valueDia ) {
                    html += "<td>";

                    // Varre as aulas contidas em cada registro de dia de cada aluno
                    $.each( valueDia, function( key, value ) {
                        if(value['falta'] == '1') {
                            html += "<label for='horario_"+ valueAluno['id'] +"_"+ keyDia +"_"+ value['id'] +"' class='checkbox checkbox-inline m-r-20'>";
                            html += "<input disabled type='checkbox' checked id='horario_"+ valueAluno['id'] +"_"+ keyDia +"_"+ value['id'] +"'  name='horario_"+ valueAluno['id'] +"_"+ keyDia +"_"+ value['id'] +"'>";
                            html += "<i class='input-helper'></i>";
                            html += value['nome'] + "</label>";
                        } else {
                            html += "<label for='horario_"+ valueAluno['id'] +"_"+ keyDia +"_"+ value['id'] +"' class='checkbox checkbox-inline m-r-20'>";
                            html += "<input type='checkbox' id='horario_"+ valueAluno['id'] +"_"+ keyDia +"_"+ value['id'] +"'  name='horario_"+ valueAluno['id'] +"_"+ keyDia +"_"+ value['id'] +"'>";
                            html += "<i class='input-helper'></i>";
                            html += value['nome'] + "</label>";
                        }
                    });

                    html += "</td>";
                });

                html += "</tr>";
            });

            html += "</tbody>";
            // fim - tbody

            $('#table-frequencia thead').remove();
            $('#table-frequencia tbody').remove();
            $('#table-frequencia').append(html);
        } else {

            $('#table-frequencia thead').remove();
            $('#table-frequencia tbody').remove();

            swal("Oops...", json['msg'], "error");
        }

    });

});


//Evento do click para matricular
$(document).on('click', '#inserirNota', function (event) {

    //Recuperando os valores dos campos do fomulário
    var turma  = idTurma;

    // notas

    // Pegando a atividade 1
    var nota_atv1 = new Array();
    $('.1_ativ').each(function() {
        nota_atv1.push($(this).val());
    });

    // Pegando a atividade 2
    var nota_atv2 = new Array();
    $('.2_ativ').each(function() {
        nota_atv2.push($(this).val());
    });

    // Pegando a atividade 3
    var nota_atv3 = new Array();
    $('.3_ativ').each(function() {
        nota_atv3.push($(this).val());
    });

    // Pegando a verif. aprend.
    var verif_aprend = new Array();
    $('.verif_aprend').each(function() {
        verif_aprend.push($(this).val());
    });

    // Pegando a média
    var media = new Array();
    $('.media').each(function() {
        media.push($(this).val());
    });

    // Pegando a recup. paralela
    var recup_paralela = new Array();
    $('.recup_paralela').each(function() {
        recup_paralela.push($(this).val());
    });

    // Pegando a nota. recuper.
    var nota_recuper = new Array();
    $('.nota_recuper').each(function() {
        nota_recuper.push($(this).val());
    });

    // Pegando os ids da nota.
    var idNota = new Array();
    $('.idNota').each(function() {
        idNota.push($(this).val());
    });

    // Verificando se os campos de preenchimento obrigatório foram preenchidos
    if (!aluno && !periodo) {
        swal("Oops...", "Você deve selecionar um aluno um período e uma disciplina!", "error");
        return false;
    }

    // Setando o o json para envio
    var dados = {
        'turma' : turma,
        'aluno' : idAluno,
        'periodo' : idPeriodo,
        'disciplinas' : idsDisciplina,
        'idNota' : idNota,

        // Notas
        'nota_ativ1' : nota_atv1,
        'nota_ativ2' : nota_atv2,
        'nota_ativ3' : nota_atv3,
        'nota_verif_aprend' : verif_aprend,
        'media' : media,
        'recup_paralela' : recup_paralela,
        'nota_para_recup' : nota_recuper
    };

    // Requisição Ajax
    jQuery.ajax({
        type: 'POST',
        url: laroute.route('turma.nota.store'),
        data: dados,
        datatype: 'json'
    }).done(function (json) {

        if (json['return'].length > 0) {
            swal("Notas inseridas com sucesso!", "Click no botão abaixo!", "success");

            // Varrendo as notas existentes do aluno por disciplina
            for (var i = 0; i < json['return'].length; i++) {
                $(".1_ativ_" + json['return'][i]['disciplina_id']).val(json['return'][i]['nota_ativ1']);
                $(".2_ativ_" + json['return'][i]['disciplina_id']).val(json['return'][i]['nota_ativ2']);
                $(".3_ativ_" + json['return'][i]['disciplina_id']).val(json['return'][i]['nota_ativ3']);
                $(".verif_aprend_" + json['return'][i]['disciplina_id']).val(json['return'][i]['nota_verif_aprend']);
                $(".media_" + json['return'][i]['disciplina_id']).val(json['return'][i]['media']);
                $(".recup_paralela_" + json['return'][i]['disciplina_id']).val(json['return'][i]['recup_paralela']);
                $(".nota_recuper_" + json['return'][i]['disciplina_id']).val(json['return'][i]['nota_para_recup']);
                $(".idNota_" + json['return'][i]['disciplina_id']).val(json['return'][i]['id']);
            }

        } else {
            swal('Erro ao inserir a nota!', "Click no botão abaixo!", "error");
        }

    });

});
