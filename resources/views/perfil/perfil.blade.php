@extends('layouts.template')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/evento.css')}}">
 <link rel="stylesheet" type="text/css" href="{{URL::asset('css/dados-pessoais.css')}}">

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/participando.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/perfil.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
@section('content')

<div class="col-sm-12 col-12 col-md-9 col-xl-10  col-lg-10">
    <div class="bloco-total">
        <div class="dados-pessoais-titulo">
            <h1>Artigo & Pesquisa</h1>
        </div>
        <!-- <div class="participando-inscricao-notificacao">
            <div class="participando-inscricao-notificacao-dentro">
                <h4>Antes de efetuar sua inscrição é necessário completar seus dados.</h4>
            </div>
        </div> -->
        @if (session()->has('success'))
        <div class="alert alert-success rem" id="rem" style="">
            <strong>Atenção !</strong> Termo enviado com sucesso!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!--Remove a mensagem de alteração após 5 segundos-->
        <script>
            function removeMensagem() {
                setTimeout(function () {
                    var msg = document.getElementById("rem");
                    msg.parentNode.removeChild(msg);
                }, 10000);
            }
            document.onreadystatechange = () => {
                if (document.readyState === 'complete') {
                    // toda vez que a página carregar, vai limpar a mensagem (se houver) após 5 segundos
                    removeMensagem();
                }
            };
        </script>
        @endif

        <style>
            .campos_form{
                padding: 5px;  
            }
            .info:hover{

            }
        </style>

<script>
    /*
    var acesso = '<?php //echo Auth::user()->nivel?>';

    $(document).ready(function(){
        if(acesso == '1'){
            $("input, select, textarea").each(function(key, item){
                $(item).attr("disabled", "disabled");
            });
            $("#btn_cad_com_modal").hide();
            $("#btn_cad_s_modal").hide();
        }

    });
*/
</script>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="bloco">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="conteudo-bloco">
                            <div class="conteudo-texto">
                                    <span class="campo-obrigatorio">Os campos com * são obrigatórios</span>
                                </div>

                            <div class="row">
                            <!-- <div class="form-grupo col-md-4" style="margin-bottom: 2%;">
                                    <label for="nome" class="control-label">Instituição:</label>
                                    <input  name="cliente" value="" class="form-control campos_form" readonly>
                                </div> -->
                                <!-- <div class="form-grupo col-md-1">
                                    <label for="nome" class="control-label">Funcionários:</label>
                                    <input  name="func" value="" class="form-control campos_form" readonly>
                                    </div> -->
                            </div>
                                <form action="{{('\portal/perfil_add')}}" method="POST" enctype="multipart/form-data" id="" name="" data-toggle="validator" role="form">
                                    {{ csrf_field()}}
                                    <h3 class="edicao">Dados Pessoais:</h3>
                                          <div class="form-row">
                                            <div class="form-grupo col-md-6">
                                                <label for="obs" class="control-label">*Nome</label>
                                                <input value="@if($user != '') {{$user->name}}  @endif" placeholder="Nome" name="nome" id="nome" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo col-xl-3 col-lg-6">
                                                <label class="control-label">* Qual sua identidade de gênero? <i title="Refere-se ao gênero que a pessoa se identifica" class="fa fa-info-circle info" aria-hidden="true"></i></label>
                                                <select class="form-control campos_form" id="sexo" name="sexo" required="">
                                                    <option value="">--</option>
                                                    <option value="Homem" @if($perfil != '')  {{($perfil->sexo == 'Homem' ? 'selected=""' : '')}} @endif>Homem</option> 
                                                    <option value="Mulher" @if($perfil != '')  {{($perfil->sexo == 'Mulher' ? 'selected=""' : '')}} @endif>Mulher</option> 
                                                    <option value="Travesti" @if($perfil != '')  {{($perfil->sexo == 'Travesti' ? 'selected=""' : '')}} @endif>Travesti</option> 
                                                    <option value="Homem trans" @if($perfil != '')  {{($perfil->sexo == 'Homem trans' ? 'selected=""' : '')}} @endif>Homem trans</option>
                                                    <option value="Mulher trans" @if($perfil != '')  {{($perfil->sexo == 'Mulher trans' ? 'selected=""' : '')}} @endif>Mulher trans</option>
                                                </select>
                                            </div>
                                            <div class="form-grupo col-xl-3 col-lg-6 col-md-6">
                                                <label>* Raça/Cor</label>
                                                <select name="raca_cor" id="raca_cor" class="form-control campos_form" required="">
                                                    <option value="">--</option>
                                                    <option value="Branca" @if($perfil != '') {{($perfil->raca_cor == 'Branca' ? 'selected=""' : '')}} @endif>Branca</option>
                                                    <option value="Preta" @if($perfil != '') {{($perfil->raca_cor == 'Preta' ? 'selected=""' : '')}} @endif>Preta</option>
                                                    <option value="Amarela" @if($perfil != '') {{($perfil->raca_cor == 'Amarela' ? 'selected=""' : '')}} @endif>Amarela</option>
                                                    <option value="Parda" @if($perfil != '')  {{($perfil->raca_cor == 'Parda' ? 'selected=""' : '')}} @endif>Parda</option>
                                                    <option value="Indígena" @if($perfil != '') {{($perfil->raca_cor == 'Indígena' ? 'selected=""' : '')}} @endif>Indígena</option>
                                                </select>
                                            </div>

                                            <div class="form-grupo form-group col-xl-3 col-lg-6 col-md-6 col-12" id="ocup_6">
                                                <label for="nome" class="control-label">* Ocupação</label>
                                                <select name="ocupacao" onchange="verificaoption()" id="ocupacao_6" class="form-control campos_form" required=""> 
                                                    <option  value="">--</option>
                                                    <option  value="Gestor(a)" @if($perfil != '') {{($perfil->ocupacao == 'Gestor(a)' ? 'selected=""' : '')}} @endif >Gestor(a)</option>
                                                    <option  value="Professor(a)" @if($perfil != '') {{($perfil->ocupacao == 'Professor(a)' ? 'selected=""' : '')}} @endif >Professor(a)</option>
                                                    <option  value="Assistente Social" @if($perfil != '') {{($perfil->ocupacao == 'Assistente Social' ? 'selected=""' : '')}} @endif >Assistente Social</option>
                                                    <option  value="Advogado(a)" @if($perfil != '') {{($perfil->ocupacao == 'Advogado(a)' ? 'selected=""' : '')}} @endif >Advogado(a)</option>
                                                     <option  value="Enfermeira(o)" @if($perfil != '') {{($perfil->ocupacao == 'Enfermeira(o)' ? 'selected=""' : '')}} @endif >Enfermeira(o)</option>
                                                     <option  value="Nutricionista" @if($perfil != '') {{($perfil->ocupacao == 'Nutricionista' ? 'selected=""' : '')}} @endif >Nutricionista</option>
                                                     <option  value="Fisioterapeuta" @if($perfil != '') {{($perfil->ocupacao == 'Fisioterapeuta' ? 'selected=""' : '')}} @endif >Fisioterapeuta</option>
                                                     <option  value="Médico(a)" @if($perfil != '') {{($perfil->ocupacao == 'Médico(a)' ? 'selected=""' : '')}} @endif >Médico(a)</option>
                                                     <option  value="Psicólogo(a)" @if($perfil != '') {{($perfil->ocupacao == 'Psicólogo(a)' ? 'selected=""' : '')}} @endif >Psicólogo(a)</option>
                                                     <option  value="Sociólogo(a)" @if($perfil != '') {{($perfil->ocupacao == 'Sociólogo(a)' ? 'selected=""' : '')}} @endif >Sociólogo(a)</option>
                                                     <option  value="Terceiro setor" @if($perfil != '') {{($perfil->ocupacao == 'Terceiro setor' ? 'selected=""' : '')}} @endif >Terceiro setor</option>
                                                     <option  value="Agente Comunitário(a) de Saúde" @if($perfil != '') {{($perfil->ocupacao == 'Agente Comunitário(a) de Saúde' ? 'selected=""' : '')}} @endif >Agente Comunitário(a) de Saúde </option>
                                                     <option  value="Auxiliar de Enfermagem" @if($perfil != '') {{($perfil->ocupacao == 'Auxiliar de Enfermagem' ? 'selected=""' : '')}} @endif >Auxiliar de Enfermagem </option>
                                                     <option  value="Outro" @if($perfil != '') {{($perfil->ocupacao == 'Outro' ? 'selected=""' : '')}} @endif >Outro</option>
                                                </select>
                                            </div>
                                           
                                            <div class="form-grupo form-group col-xl-2 col-lg-6 col-md-6" id="class_out_ocupacao">
                                                    <label class="control-label">Outro</label>
                                                    <input value=" @if($perfil != '') {{($perfil->out_ocupacao)}}  @endif " id="out_ocupacao" type="text" name="out_ocupacao" class="form-control campos_form">
                                            </div> 

                                            <div class="form-grupo form-group col-xl-2 col-lg-4 col-md-4">
                                                <label class="control-label">* Dta Nasc.</label>
                                                <input autocomplete="off" placeholder="00/00/0000" value="@if($perfil != '') @if($perfil->dtaNascimento != null && $perfil->dtaNascimento != '') {{date('d/m/Y', strtotime($perfil->dtaNascimento))}} @endif @endif" required="" maxlength="10"   type="text" id="dtaNascimento" name="dtaNascimento" class="form-control campos_form">
                                            </div>

                                            @php
                                            if($perfil != ''){
                                            if ($perfil->dtaNascimento != null && $perfil->dtaNascimento != '' && $perfil->dtaNascimento != '0000-00-00') {
                                                $data_nasc = $perfil->dtaNascimento;
                                                $dataP = explode('-', $data_nasc);
                                            } else {

                                                $data_nasc = date("d/m/Y");
                                                $dataP = explode('/', $data_nasc);
                                            }
                                       
                                            $dataNoFormatoParaOBranco = $dataP[2] . '-' . $dataP[1] . '-' . $dataP[0];
                                            $nascido = $dataNoFormatoParaOBranco . date(" H:i:s");

                                            $data_hora = date("Y-m-d H:i:s");
                                            $data1 = new DateTime($data_hora);
                                            $data2 = new DateTime($nascido);
                                            //Calcula a diferença
                                            $intervalo = $data1->diff($data2);
                                            $anos = ($intervalo->y);
                                            $meses = ($intervalo->m);
                                            $dias_d = ($intervalo->d);
                                            $multiplicames = ($meses * 30);
                                            $transformandomesemdias = ($multiplicames + $dias_d);
                                            $tempo_em_aberto = "Dias: $transformandomesemdias / Horas: &nbsp;{$intervalo->h}:{$intervalo->i}:{$intervalo->s}";
                                            }
                                            @endphp

                                            <div class="form-grupo col-xl-1 col-lg-2 col-md-2">
                                                <label class="control-label">Idade</label>
                                                <input readonly="" id="res" type="text" name="" class="form-control campos_form" value="@if($perfil != '') {{($anos)}} @endif">
                                            </div>

                                            <div class="form-grupo col-xl-4 col-lg-6 col-md-6">
                                                <label>* Instituição</label>
                                                <input name="instituicao" id="" value="@if($perfil != '') {{($perfil->instituicao)}} @endif" class="form-control campos_form" required="">
                                            </div>

                                            <div class="form-grupo col-xl-2 col-lg-6 col-md-6">
                                                <label>* Telefone</label>
                                                <input name="telefone" id="telefone" value="@if($perfil != '') {{($perfil->telefone)}} @endif" class="form-control campos_form" required="">
                                            </div>
                                            <div class="form-grupo col-xl-2 col-lg-6 col-md-6">
                                                <label>* Celular</label>
                                                <input name="celular" id="celular" value="@if($perfil != '') {{($perfil->celular)}} @endif" class="form-control campos_form" required="">
                                            </div>

                                            <div class="form-grupo col-xl-3 col-lg-6 col-md-6">
                                                <label>* E-mail</label>
                                                <input type="email" name="email" id="" value="@if($user != '') {{($user->email)}} @endif" class="form-control campos_form" readonly="">
                                            </div>

                                            <div class="form-grupo col-xl-2 col-lg-6 col-md-6">
                                                <label for="cep" id="resposta" class="control-label">* CPF</label>
                                                <input autocomplete="off" required="" onkeyup="maskNumeroc(this);
                                                limitarInput(this);" onclick="maskNumeroc(this)" onkeypress="maskNumeroc(this)" value="@if($perfil != '') {{($perfil->cpf)}} @endif" id="cpf_pes" type="text" maxlength="11" class="form-control campos_form" name="cpf">
                                            </div>
                                        

                                        
                                            <div class="form-grupo col-xl-2 col-lg-6 col-md-6">
                                                <label for="cep" class="control-label"> RG</label>
                                                <input autocomplete="off" value="@if($perfil != '') {{($perfil->rg)}} @endif" id="cpf" type="text" maxlength="11" class="form-control campos_form" name="rg">
                                            </div>

                                            <div class="form-grupo col-xl-1 col-lg-4 col-md-4">
                                                <label for="cep" class="control-label">* CEP</label> 
                                                <input autocomplete="off" required="" value="@if($perfil != '') {{($perfil->cep)}} @endif" id="cep" type="tel" maxlength="8" class="form-control campos_form" name="cep">
                                            </div>
                                            <div class="form-grupo col-xl-4 col-lg-8 col-md-8">
                                                <label for="endereco" class="control-label">Rua</label>
                                                <input value="@if($perfil != '') {{($perfil->rua)}} @endif" readonly="" type="text" onkeyup="maiuscula(this)" name="rua" id="rua" class="form-control campos_form" required="">
                                            </div>
                                            <div class="form-grupo col-xl-3 col-lg-6 col-md-6">
                                                <label for="endereco" class="control-label">Bairro</label>
                                                <input value="@if($perfil != '') {{($perfil->bairro)}} @endif" type="text" readonly="" onkeyup="maiuscula(this)" name="bairro" id="bairro" class="form-control campos_form">
                                            </div>
                                    

                                    
                                            <div class="form-grupo col-xl-2 col-lg-6 col-md-6">
                                                <label for="" class="control-label">Cidade</label>
                                                <input value="@if($perfil != '') {{($perfil->cidade)}} @endif" readonly="" type="text" onkeyup="maiuscula(this)" class="form-control campos_form" name="cidade" id="cidade">
                                            </div>

                                            <div class="form-grupo col-xl-2 col-lg-2 col-md-3">
                                                <label for="uf" class="control-label">UF: </label>
                                                <select readonly="" class="form-control campos_form" id="uf" name="uf">
                                                    <option value="@if($perfil != '') {{($perfil->uf)}} @endif">@if($perfil != '') {{($perfil->uf)}} @endif</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="RS">RS</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>
                                            <div class="form-grupo col-xl-1 col-lg-2 col-md-2">
                                                <label for="endereco" class="control-label">Número</label>
                                                <input value="@if($perfil != '') {{($perfil->numero)}} @endif" readonly="" type="text" name="numero" id="numero" class="form-control campos_form">
                                            </div>

                                            <div class="form-grupo col-xl-12 col-lg-6 col-md-6">
                                                <label for="obs" class="control-label">Observação</label>
                                                <textarea name="observacao" id="" class="form-control campos_form" data-error="">@if($perfil != '') {{($perfil->obs)}} @endif</textarea>
                                            </div>

                                            <div class="form-grupo col-xl-12 col-lg-6 col-md-6" style="margin-top:10px;">      
                                                <button type="button" style="float: left" title="Inserir Pessoas" class="btn  btn-warning">Inserir  Participantes<i class="fa fa-chevron-right" aria-hidden="true"></i></button>                                     
                                                <button style="float: right" title="Continuar..." id="btn_cad_s_modal" name="btn_abcham" class="btn  btn-participar">Continuar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                            </div>
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
</div>
@php
if($perfil != ''){
    $ecupacao = $perfil->ocupacao;
}else{
    $ecupacao = '';  
}

@endphp
<script>
$(document).ready(function(){
  var valoption = "<?php echo  $ecupacao; ?>";
   if(valoption == "Outro"){
    $('#out_ocupacao').removeAttr('disabled');
    $('#out_ocupacao').attr('required', 'required'); 
   }else{
    $('#out_ocupacao').attr("disabled", "true");
     document.getElementById('out_ocupacao').value = "";
     $('#out_ocupacao').removeAttr('required');
  }
});
function verificaoption(){
 option6 =   $('#ocupacao_6').val(); 
 if(option6 == 'Outro'){
    $('#out_ocupacao').removeAttr('disabled');
    document.getElementById("out_ocupacao").focus();
    $('#out_ocupacao').attr('required', 'required');   
 }else{
    $('#out_ocupacao').attr("disabled", "true");
    $('#out_ocupacao').removeAttr('required');
    document.getElementById('out_ocupacao').value = "";    
 }

}
</script>
<script type="text/javascript">
        $(document).on("input", "#diversidade1", function() {
        var limite = 3500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=diversidade1]").val();
            $("textarea[name=diversidade1]").val(comentario.substr(0, limite));
            $(".ca_diversidade1").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_diversidade1").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#inclusao1", function() {
        var limite = 3500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=inclusao1]").val();
            $("textarea[name=inclusao1]").val(comentario.substr(0, limite));
            $(".ca_inclusao1").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_inclusao1").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#equidade1", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=equidade1]").val();
            $("textarea[name=equidade1]").val(comentario.substr(0, limite));
            $(".ca_equidade1").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_equidade1").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#especifique", function() {
        var limite = 3500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if(caracteresRestantes <= 0){
            var comentario = $("textarea[name=outroes1]").val();
            $("textarea[name=outroes1]").val(comentario.substr(0, limite));
            $(".ca_outroes1").text("(" + "0 " + informativo + ")");
        }else{
            $(".ca_outroes1").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
</script>

 <script> 
 /*
        $( "#verificaemail" ).blur(function() {
                var email = $('#verificaemail').val();
                 $.ajax({

                url: "/Intranet/verificaemailexistente",
                type: "POST",
                cache: false,
                processData: true,
                dateType:'json',
                data: {"email": email,
                "_token":"{{csrf_token()}}" },
                success: function(result){
                    if(result.success[0].id){
                    alert('Atenção esse e-mail já está cadastrado');
                    $('#verificaemail').val('');
                    }
                  }
                
                });
            });
   */
</script> 

<script>
    function apenasNumeros(num) {
        //aceita somente números no input
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
            campo.value = "";
        }
    }
// INICIO FUNÇÃO DE MASCARA MAIUSCULA
    function maiuscula(z) {
        v = z.value.toUpperCase();
        z.value = v;
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        //$("#idade").mask("99/99/9999");
        $("#telefone").mask("(00) 0000-0000");
        $("#celular").mask("(00) 0 0000-0000");
        $("#cep").mask("00000000");
        $("#dtaNascimento").mask("00/00/0000")
        // $('#telefone').mask("(00) 0000-00000");
        // $("#cpf").mask("00.000.000-00");
        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
            $("#ibge").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep").blur(function () {
            //focus no número
            //document.getElementById("numero").focus();

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#ibge").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro.toUpperCase());
                            $("#bairro").val(dados.bairro.toUpperCase());
                            $("#cidade").val(dados.localidade.toUpperCase());
                            $("#uf").val(dados.uf.toUpperCase());
                            $("#ibge").val(dados.ibge);
                            document.getElementById('numero').focus();

                            $("#rua").removeAttr('readonly');
                            $("#bairro").removeAttr('readonly');
                            $("#cidade").removeAttr('readonly');
                            $("#uf").removeAttr('readonly');
                            $("#ibge").removeAttr('readonly');
                            $("#numero").removeAttr('readonly');
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });

    });
</script>
<script type="text/javascript">
    function vCampos(el, er)
    {
        var e = $(el).val().replace(er, '');
        $(el).val(e);
    }

    function num(el)
    {
        VCampos(el, /^0-9/g);
    }

    function maskNumeroc(el)
    {
        vCampos(el, /[^0-9\)\(\/]/g);
        var e = $(el).val();
        if (e.length == 11)
            $(el).val(e);
    }
    </script>
<script type="text/javascript">
    function CPF() {
        "user_strict";
        function r(r) {
            for (var t = null, n = 0; 9 > n; ++n)
                t += r.toString().charAt(n) * (10 - n);
            var i = t % 11;
            return i = 2 > i ? 0 : 11 - i
        }
        function t(r) {
            for (var t = null, n = 0; 10 > n; ++n)
                t += r.toString().charAt(n) * (11 - n);
            var i = t % 11;
            return i = 2 > i ? 0 : 11 - i
        }
        var n = "CPF Inválido", i = "CPF Válido";
        this.gera = function () {
            for (var n = "", i = 0; 9 > i; ++i)
                n += Math.floor(9 * Math.random()) + "";
            var o = r(n), a = n + "-" + o + t(n + "" + o);
            return a
        }, this.valida = function (o) {
            for (var a = o.replace(/\D/g, ""), u = a.substring(0, 9), f = a.substring(9, 11), v = 0; 10 > v; v++)
                if ("" + u + f == "" + v + v + v + v + v + v + v + v + v + v + v)
                    return n;
            var c = r(u), e = t(u + "" + c);
            return f.toString() === c.toString() + e.toString() ? i : n
        }
    }

    var CPF = new CPF();

    $(document).ready(function () {
        $("#cpf_pes").keyup(function () {
            var teste = CPF.valida($(this).val());                 
            $("#resposta").html(teste);
            if (teste == "CPF Válido") {
                document.getElementById('resposta').style.color = 'green';
               // document.getElementById("btn_cad_s_modal").style.display = "block"; 
               // document.getElementById("btn_cad_com_modal").style.display = "block";
                $("#btn_cad_com_modal").removeAttr("disabled");
               // $("#btn_cad_s_modal").removeAttr("disabled");
            } else {
                document.getElementById('resposta').style.color = 'red';
                document.getElementById("btn_cad_com_modal").style.display = "none";
                $("#btn_cad_com_modal").attr("disabled", "true");
                $("#btn_cad_s_modal").attr("disabled", "true");
            }
        });

        $("#cpf_pes").blur(function () {
            var teste = CPF.valida($(this).val());
            $("#resposta").html(teste);
            if (teste == "CPF Válido") {
                document.getElementById('resposta').style.color = 'green';
                $("#btn_cad_com_modal").removeAttr("disabled");
                $("#btn_cad_s_modal").removeAttr("disabled");
                //document.getElementById("btn_cad_com_modal").style.display = "block";
            } else {
                document.getElementById("btn_cad_com_modal").style.display = "none";
                document.getElementById('resposta').style.color = 'red';
                $("#btn_cad_com_modal").attr("disabled", "true");
                $("#btn_cad_s_modal").attr("disabled", "true");
               
            }
        });

    });
    //controla a quantidade de dígitos no campo CPf
    function limitarInput(obj) {
        obj.value = obj.value.substring(0, 11); //Aqui eu pego o valor e só deixo o os 10 primeiros caracteres de valor no input
    }
    </script>
<script type="text/javascript">

    $("#dtaNascimento").blur(function () {
        var data = $(this).val();
        var d = new Date,
                ano_atual = d.getFullYear(),
                mes_atual = d.getMonth() + 1,
                dia_atual = d.getDate(),
                split = data.split('/'),
                novadata = split[1] + "/" + split[0] + "/" + split[2],
                data_americana = new Date(novadata),
                vAno = data_americana.getFullYear(),
                vMes = data_americana.getMonth() + 1,
                vDia = data_americana.getDate(),
                ano_aniversario = +vAno,
                mes_aniversario = +vMes,
                dia_aniversario = +vDia,
                quantos_anos = ano_atual - ano_aniversario;
        if (mes_atual < mes_aniversario || mes_atual == mes_aniversario && dia_atual < dia_aniversario) {
            quantos_anos--;
        }
        $("#res").val(quantos_anos);
        // return quantos_anos < 0 ? 0 : quantos_anos;
        //alert(quantos_anos);
    });
</script>
@endsection