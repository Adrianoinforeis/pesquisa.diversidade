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
            <h1>@if(Auth::user()->escolha == 1)Artigo @else Pesquisa  @endif<a href="{{url("portal/escolha")}}" title="Alterar" class="btn  btn-participar" style="background-color: #17a2b8;">Alterar <i class="fa fa-check" aria-hidden="true"></i></a></h1>
        </div>
        <!-- <div class="participando-inscricao-notificacao">
            <div class="participando-inscricao-notificacao-dentro">
                <h4>Antes de efetuar sua inscrição é necessário completar seus dados.</h4>
            </div>
        </div> -->
        @if (session()->has('success'))
        <div class="alert alert-success rem" id="rem" style="">
            <strong>Atenção !</strong> Dados enviado com sucesso!
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

        <script type="text/javascript">
            $(document).ready(function () {
                $("input.dinheiro").maskMoney({showSymbol: true, symbol: "", decimal: ",", thousands: "."});
            });
        </script>
<script>
    var acesso = '<?php echo Auth::user()->nivel?>';

    $(document).ready(function(){
        if(acesso == '1'){
            $("input, select, textarea").each(function(key, item){
                $(item).attr("disabled", "disabled");
            });
            $("#btn_cad_com_modal").hide();
            $("#btn_cad_s_modal").hide();
        }

    });
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
                                <form action="{{('\portal/sequencia2')}}" method="POST" enctype="multipart/form-data" id="" name="" data-toggle="validator" role="form">
                                    {{ csrf_field()}}
                                    <h3 class="edicao">Formação e Dados Profissionais:</h3>
                                          <div class="form-row">
                                            <div class="form-grupo form-group col-md-2">
                                                <label for="obs" class="control-label">*Número do projeto </label>
                                                <input value="@if($parte1 != '') {{$parte1->id_social}}  @endif"  class="form-control campos_form" readonly>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-6">
                                                <label for="obs" class="control-label">*Autor principal</label>
                                                <input readonly value="@if($parte1 != '') {{$parte1->autor}}  @endif" placeholder="Autor principal" name="autor" id="inclusao1" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-4">
                                             <label>* Escolaridade</label>
                                                <select onblur="mudabtn()" name="escolaridade" id="escolaridade"  class="form-control campos_form" required="">
                                                    <option value="">--</option>
                                                    <option value="Sem escolaridade" @if($parte1 != '')  {{($parte1->escolaridade == 'Sem escolaridade' ? 'selected=""' : '')}} @endif >Sem escolaridade</option>
                                                    <option value="Fundamental - Incompleto" @if($parte1 != '')  {{($parte1->escolaridade == 'Fundamental - Incompleto' ? 'selected=""' : '')}} @endif >Fundamental - Incompleto</option>
                                                    <option value="Fundamental - Completo" @if($parte1 != '')  {{($parte1->escolaridade == 'Fundamental - Completo' ? 'selected=""' : '')}} @endif >Fundamental - Completo</option>
                                                    <option value="Médio - Incompleto" @if($parte1 != '')  {{($parte1->escolaridade == 'Médio - Incompleto' ? 'selected=""' : '')}}  @endif >Médio - Incompleto</option>
                                                    <option value="Médio - Completo" @if($parte1 != '')  {{($parte1->escolaridade == 'Médio - Completo' ? 'selected=""' : '')}} @endif >Médio - Completo</option> 
                                                    <option value="Superior - Incompleto" @if($parte1 != '') {{($parte1->escolaridade == 'Superior - Incompleto' ? 'selected=""' : '')}} @endif >Superior - Incompleto</option>
                                                    <option value="Superior - Completo" @if($parte1 != '') {{($parte1->escolaridade == 'Superior - Completo' ? 'selected=""' : '')}} @endif >Superior - Completo</option>
                                                    <option value="Pós-graduação completo" @if($parte1 != '') {{($parte1->escolaridade == 'Pós-graduação completo' ? 'selected=""' : '')}} @endif >Pós-graduação completo</option>
                                                    <option value="Pós-graduação incompleta" @if($parte1 != '') {{($parte1->escolaridade == 'Pós-graduação incompleta' ? 'selected=""' : '')}} @endif >Pós-graduação incompleta</option>
                                                    <option value="Mestrado completo" @if($parte1 != '') {{($parte1->escolaridade == 'Mestrado completo' ? 'selected=""' : '')}} @endif >Mestrado completo</option>
                                                    <option value="Mestrado incompleto" @if($parte1 != '') {{($parte1->escolaridade == 'Mestrado incompleto' ? 'selected=""' : '')}} @endif >Mestrado incompleto</option>
                                                    <option value="Doutorado completo" @if($parte1 != '') {{($parte1->escolaridade == 'Doutorado completo' ? 'selected=""' : '')}} @endif >Doutorado completo</option>
                                                    <option value="Doutorado incompleto" @if($parte1 != '') {{($parte1->escolaridade == 'Doutorado incompleto' ? 'selected=""' : '')}} @endif >Doutorado incompleto</option>
                                                    <option value="Pós-doutorado completo" @if($parte1 != '') {{($parte1->escolaridade == 'Pós-doutorado completo' ? 'selected=""' : '')}} @endif >Pós-doutorado completo</option>
                                                    <option value="Pós-doutorado incompleto" @if($parte1 != '') {{($parte1->escolaridade == 'Pós-doutorado incompleto' ? 'selected=""' : '')}} @endif >Pós-doutorado incompleto</option>
                                                </select>
                                                </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">*Especialização <small class="ca_equidade1" style="color: #E74C3C"></small> </label>
                                                <textarea rows="3" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres"  name="especializacao" id="equidade1" class="form-control campos_form" data-error="Esse campo deve ser informado" required>@if($parte1 != '') {{$parte1->especializacao}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-3">
                                                <label for="obs" class="control-label">*Instituição </label>
                                                <input value="@if($parte1 != '') {{$parte1->instituicao}}  @endif" placeholder="Instituição" name="instituicao" id="" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                             <div class="form-grupo form-group col-md-4">
                                                <label for="obs" class="control-label">*Atividade principal </label>
                                                <input value="@if($parte1 != '') {{$parte1->at_principal}}  @endif" placeholder="Atividade principal" name="at_principal" id="inclusao1" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-2">
                                             <label>* Possui vínculo institucional</label>
                                                <select name="vi_inst" id=""  class="form-control campos_form" required="">
                                                    <option value="Sim" @if($parte1 != '') {{($parte1->vi_inset == 'Sim' ? 'selected=""' : '')}} @endif>Sim</option>
                                                    <option value="Não" @if($parte1 != '') {{($parte1->vi_inset == 'Não' ? 'selected=""' : '')}} @endif>Não</option>
                                                </select>
                                            </div>

                                            <div class="form-grupo form-group col-md-3">
                                                <label for="obs" class="control-label">*Faculdade/Programa/Departamento/Setor</label>
                                                <input value="@if($parte1 != '') {{$parte1->faculdade}}  @endif" placeholder="Faculdade" name="faculdade" id="" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>



                                        <h3 class="edicao">Identificação do projeto:</h3>
                                            <div class="form-row">   
                                                <div class="form-grupo form-group col-md-8">
                                                    <label for="obs" class="control-label">*Título do projeto</label>
                                                    <input value="@if($parte1 != '') {{$parte1->titulo_proj}}  @endif" placeholder="Número do projeto" name="titulo_proj" id="titulo_proj" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-grupo form-group col-md-4">
                                                    <label for="obs" class="control-label">*Palavra chave</label>
                                                    <input value="@if($parte1 != '') {{$parte1->palavra_cha}}  @endif" placeholder="Autor principal" name="palavra_cha" id="" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>



                                            <h3 class="edicao">Instituições parceiras:</h3> 
                                            <div class="form-row">  
                                                <div class="form-grupo form-group col-md-3">
                                                    <label for="obs" class="control-label">*Instituição</label>
                                                    <input value="@if($parte1 != '') {{$parte1->titulo_proj}}  @endif" placeholder="Número do projeto" name="" id="titulo_proj" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-grupo form-group col-md-3">
                                                    <label for="obs" class="control-label">*Nome do contato do(a) responsável pela parceria</label>
                                                    <input value="@if($parte1 != '') {{$parte1->palavra_cha}}  @endif" placeholder="Autor principal" name="" id="" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-grupo form-group col-md-6">
                                                    <label for="obs" class="control-label">*Endereço do(a) responsável pela parceria</label>
                                                    <input value="@if($parte1 != '') {{$parte1->palavra_cha}}  @endif" placeholder="Autor principal" name="" id="" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-grupo form-group col-md-3">
                                                    <label for="obs" class="control-label">*Endereço do(a) responsável pela parceria</label>
                                                    <input value="@if($parte1 != '') {{$parte1->palavra_cha}}  @endif" placeholder="Autor principal" name="" id="" class="form-control campos_form" data-error="Esse campo deve ser informado" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>


                                            </div>
                                   
                                        <div class="form-row">
                                            <div class="form-grupo col-xl-5 col-lg-6">                                               
                                                <button title="Continuar..." id="btn_cad_s_modal" name="btn_abcham" class="btn  btn-participar">Continuar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="form-grupo col-xl-5 col-lg-6"> 
                                            <a href="{{url("portal/perfil_editar")}}" title="Dados Pessoais" class="btn  btn-participar">1</a>
                                                <a href="#" title="Home" class="btn  btn-secondary disabled">2</a>
                                                <a href="#" title="Home" class="btn  btn-secondary disabled">3</a>
                                            </div>
                                            <div class="form-grupo col-xl-2 col-lg-6"> 
                                                <button title="Continuar..." id="btn_cad_s_modal" name="btn_salvar_cont" value="salvar" class="btn  btn-participar" style="background-color: #17a2b8;">Salvar e continuar depois <i class="fa fa-check" aria-hidden="true"></i></button>
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
<style>
.disabled {
pointer-events: none;
cursor: default;
opacity: 0.6;
}
</style>
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
    


    
//});
      /*
                $('#sair_btn').click(function(e) {
                            var id_user = '<?php echo Auth::user()->id; ?>';
                            var data = {
                                "_token": "{{ csrf_token() }}",
                                "id_logado" : id_user
                            }
                            var url = "/Intranet/sair";
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: data,
                            });
                });
                */
        $( "#verificaemail" ).blur(function() {
                var email = $('#verificaemail').val();
                /*
                var info = {
                    "_token": "{{ csrf_token() }}",
                    "email" : email
                }
                var url = "/Intranet/verificaemailexistente";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: info,
                }); 
                */

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
   
</script> 
@endsection