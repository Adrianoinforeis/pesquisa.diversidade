
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
            <h1>Instrumento de coleta de práticas de diversidade nos bancos</h1>
        </div>
        <!-- <div class="participando-inscricao-notificacao">
            <div class="participando-inscricao-notificacao-dentro">
                <h4>Antes de efetuar sua inscrição é necessário completar seus dados.</h4>
            </div>
        </div> -->
        @if (session()->has('success'))
        <div class="alert alert-success rem" id="rem" style="">
            <strong>Informaçao !</strong>  alteração efetuada com sucesso !
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
                            <div class="form-grupo col-md-4" style="margin-bottom: 2%;">
                                    <label for="nome" class="control-label">Instituição:</label>
                                    <input  name="cliente" value="{{$cliente[0]->cli_nome}}" class="form-control campos_form" readonly>
                                </div>
                                <!-- <div class="form-grupo col-md-1">
                                    <label for="nome" class="control-label">Funcionários:</label>
                                    <input  name="func" value="{{$cliente[0]->cli_qtdFuncionarios}}" class="form-control campos_form" readonly>
                                </div> -->
                            </div>
                                <form action="{{('\aplicacao/sequencia4')}}" method="post" enctype="multipart/form-data" id="" name="frm_home3" data-toggle="validator" role="form"  onsubmit="return validaQuestao();">
                                    {{ csrf_field()}}
                                        <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*7. O banco tem grupos de afinidade?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="nao" id="nao7" name="nao7" @if($parte3 != '') {{($parte3->nao7 == 'nao' ? 'checked="checked"' : '')}} @endif class="7gov"> Não</label>
                                            </div>
                                             <div class=" col-md-12">
                                                <label><input type="checkbox" value="Sim, equidade racial" name="a_aqui7" @if($parte3 != '') {{($parte3->a_aqui7 == 'Sim, equidade racial' ? 'checked="checked"' : '')}} @endif class="7gov zero"> Sim, equidade racial</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Sim, equidade de gênero" name="a_gen7" @if($parte3 != '') {{($parte3->a_gen7 == 'Sim, equidade de gênero' ? 'checked="checked"' : '')}} @endif class="7gov zero"> Sim, equidade de gênero</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Sim, LGBTQIA+" name="a_lgbt7" @if($parte3 != '') {{($parte3->a_lgbt7 == 'Sim, LGBTQIA+' ? 'checked="checked"' : '')}} @endif class="7gov zero"> Sim, LGBTQIA+</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Sim, inclusão de profissionais com deficiência" name="a_incl7" @if($parte3 != '') {{($parte3->a_incl7 == 'Sim, inclusão de profissionais com deficiência' ? 'checked="checked"' : '')}} @endif class="7gov zero" > Sim, inclusão de profissionais com deficiência </label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" id="7outras" value="Sim, outros grupos" name="a_outros7" @if($parte3 != '') {{($parte3->a_outros7 == 'Sim, outros grupos' ? 'checked="checked"' : '')}} @endif class="zero"> Sim, outros grupos</label>
                                            </div>
                                        </div>

                                           @if($parte3 != '')
                                            @if($parte3->afinidade7 == 'Sim, outros grupos')
                                            <div class="form-row 7especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 7especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 7especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                       
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes7" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="outroes7" id="7especifiqueout" maxlength="3500" placeholder="Você pode digitar até 3500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte3 != '') {{$parte3->outroes7}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>


                                        <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*8. O banco tem orçamento específico destinado às ações internas de diversidade (recrutamento e seleção,<br> treinamento e desenvolvimento, comunicação interna etc.) ?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Sim, entre R$ 10.000 e R$ 50.000 por ano" name="orcamento8" @if($parte3 != '') {{($parte3->orcamento8 == 'Sim, entre R$ 10.000 e R$ 50.000 por ano' ? 'checked="checked"' : '')}} @endif class="" required> Sim, entre R$ 10.000 e R$ 50.000 por ano</label>
                                            </div>
                                             <div class=" col-md-12">
                                                <label><input type="radio" value="Sim, entre R$ R$ 51.000 e R$ 100.000 por ano" name="orcamento8" @if($parte3 != '') {{($parte3->orcamento8 == 'Sim, entre R$ R$ 51.000 e R$ 100.000 por ano' ? 'checked="checked"' : '')}} @endif  class="" required> Sim, entre R$ R$ 51.000 e R$ 100.000 por ano</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Sim, entre R$ 101.000 e R$ 300.000 por ano" name="orcamento8" @if($parte3 != '') {{($parte3->orcamento8 == 'Sim, entre R$ 101.000 e R$ 300.000 por ano' ? 'checked="checked"' : '')}} @endif  class="" required> Sim, entre R$ 101.000 e R$ 300.000 por ano </label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Sim, entre R$ 301.000 e R$ 500.000 por ano" name="orcamento8" @if($parte3 != '') {{($parte3->orcamento8 == 'Sim, entre R$ 301.000 e R$ 500.000 por ano' ? 'checked="checked"' : '')}} @endif  class="" required> Sim, entre R$ 301.000 e R$ 500.000 por ano</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Sim, entre R$ 501.000 e R$ 1.000.000 por ano" name="orcamento8" @if($parte3 != '') {{($parte3->orcamento8 == 'Sim, entre R$ 501.000 e R$ 1.000.000 por ano' ? 'checked="checked"' : '')}} @endif  class="" required> Sim, entre R$ 501.000 e R$ 1.000.000 por ano</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Sim, acima de R$ 1.000.000 por ano" name="orcamento8" @if($parte3 != '') {{($parte3->orcamento8 == 'Sim, acima de R$ 1.000.000 por ano' ? 'checked="checked"' : '')}} @endif  class="" required> Sim, acima de R$ 1.000.000 por ano</label>
                                            </div>
                                        </div>

                                          <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*9. O programa de diversidade do banco é realizado:</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Apenas na sede do banco" name="diversidade9" @if($parte3 != '') {{($parte3->diversidade9 == 'Apenas na sede do banco' ? 'checked="checked"' : '')}} @endif class="9gov" required> Apenas na sede do banco</label>
                                            </div>
                                             <div class=" col-md-12">
                                                <label><input type="radio" value="Na sede e nos principais escritórios" name="diversidade9" @if($parte3 != '') {{($parte3->diversidade9 == 'Na sede e nos principais escritórios' ? 'checked="checked"' : '')}} @endif class="9gov" required> Na sede e nos principais escritórios</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Estendido para todas as agências" name="diversidade9" @if($parte3 != '') {{($parte3->diversidade9 == 'Estendido para todas as agências' ? 'checked="checked"' : '')}} @endif  class="9gov" required> Estendido para todas as agências </label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" id="9outras" value="Outros9" name="diversidade9" @if($parte3 != '') {{($parte3->diversidade9 == 'Outros9' ? 'checked="checked"' : '')}} @endif class="" required> Outros</label>
                                            </div>
                                        </div>

                                            @if($parte3 != '')
                                            @if($parte3->diversidade9 == 'Outros9')
                                            <div class="form-row 9especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 9especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 9especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                    
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes9" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="outroes9" id="9especifique" class="form-control campos_form" maxlength="3000" placeholder="Você pode digitar até 3000 caracteres" data-error="Esse campo deve ser informado">@if($parte3 != '') {{$parte3->outroes9}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>


                                        <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*10.	O banco aderiu formalmente:</h3>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Coalizão Empresarial para Equidade Racial e de Gênero" name="diversidade10_1" @if($parte3 != '') {{($parte3->diversidade10_1 == 'Coalizão Empresarial para Equidade Racial e de Gênero' ? 'checked="checked"' : '')}} @endif class="10gov"> Coalizão Empresarial para Equidade Racial e de Gênero</label>
                                            </div>
                                             <div class=" col-md-12">
                                                <label><input type="checkbox" value="Pacto Global" name="diversidade10_2" @if($parte3 != '') {{($parte3->diversidade10_2 == 'Pacto Global' ? 'checked="checked"' : '')}} @endif class="10gov"> Pacto Global</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Programa Pró-Equidade de Gênero e Raça" name="diversidade10_3" @if($parte3 != '') {{($parte3->diversidade10_3 == 'Programa Pró-Equidade de Gênero e Raça' ? 'checked="checked"' : '')}} @endif class="10gov"> Programa Pró-Equidade de Gênero e Raça</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Padrões de Conduta para Empresas" name="diversidade10_4" @if($parte3 != '') {{($parte3->diversidade10_4 == 'Padrões de Conduta para Empresas' ? 'checked="checked"' : '')}} @endif class="10gov"> Padrões de Conduta para Empresas</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Princípios de Empoderamento das Mulheres/He for She (ONU)" name="diversidade10_5" @if($parte3 != '') {{($parte3->diversidade10_5 == 'Princípios de Empoderamento das Mulheres/He for She (ONU)' ? 'checked="checked"' : '')}} @endif class="10gov"> Princípios de Empoderamento das Mulheres/He for She (ONU)</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Fórum de Empresas e Direitos LGBTI+" name="diversidade10_6" @if($parte3 != '') {{($parte3->diversidade10_6 == 'Fórum de Empresas e Direitos LGBTI+' ? 'checked="checked"' : '')}} @endif class="10gov"> Fórum de Empresas e Direitos LGBTI+</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Mulher 360" name="diversidade10_7" @if($parte3 != '') {{($parte3->diversidade10_7 == 'Mulher 360' ? 'checked="checked"' : '')}} @endif class="10gov"> Mulher 360</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Iniciativa Empresarial pela Igualdade Racial" name="diversidade10_8" @if($parte3 != '') {{($parte3->diversidade10_8 == 'Iniciativa Empresarial pela Igualdade Racial' ? 'checked="checked"' : '')}} @endif class="10gov"> Iniciativa Empresarial pela Igualdade Racial</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="Nenhuma adesão" id="nenhuma10" name="diversidade10_9" @if($parte3 != '') {{($parte3->diversidade10_9 == 'Nenhuma adesão' ? 'checked="checked"' : '')}} @endif class=" nenhuma"> Nenhuma adesão</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" id="10outras" value="Outro10" name="diversidade10_10" @if($parte3 != '') {{($parte3->diversidade10_10 == 'Outro10' ? 'checked="checked"' : '')}} @endif class=""> Outro</label>
                                            </div>
                                        </div>


                                            @if($parte3 != '')
                                            @if($parte3->diversidade10_10 == 'Outro10')
                                            <div class="form-row 10especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 10especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 10especifique" style="margin-left: 3%; display:none;">
                                            @endif 
                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes10" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="outroes10" id="10especifique" class="form-control campos_form"  maxlength="3000" placeholder="Você pode digitar até 3000 caracteres" data-error="Esse campo deve ser informado">@if($parte3 != '') {{$parte3->outroes10}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>



                                       
                                        <br />
                                        <div class="form-row">
                                            <div class="form-grupo form-group ">                                               
                                                <a title="...Voltar" href="{{('\aplicacao/sequencia2')}}" class="btn  btn-participar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                                <!-- <button style="display:none;" title="Cadastrar" data-toggle="modal" data-target="#idModal" id="btn_cad_com_modal" name="btn_abcham" class="btn  btn-participar">Salvar</button> -->
                                            </div>
                                            <div class="form-grupo form-group btn_continuar">                                               
                                                <button title="Continuar..." id="btn_cad_s_modal" name="btn_abcham" class="btn  btn-participar">Continuar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                                </div>
                                                <div class="form-grupo btn_salvar">  
                                                <button title="Continuar..." id="btn_cad_s_modal" name="btn_salvar_cont" value="salvar" class="btn  btn-participar" style="background-color: #17a2b8;">Salvar e continuar depois <i class="fa fa-check" aria-hidden="true"></i></button>
                                            </div>
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
 <script type="text/javascript">
        $(document).on("input", "#7especifiqueout", function() {
        var limite = 3500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes7]").val();
            $("textarea[name=outroes7]").val(comentario.substr(0, limite));
            $(".ca_outroes7").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes7").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#9especifique", function() {
        var limite = 3000;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes9]").val();
            $("textarea[name=outroes9]").val(comentario.substr(0, limite));
            $(".ca_outroes9").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes9").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#10especifique", function() {
        var limite = 3000;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes10]").val();
            $("textarea[name=outroes10]").val(comentario.substr(0, limite));
            $(".ca_outroes10").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes10").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
</script>
<script>
  $("#nao7").click(function(){
             if($("#nao7").is(':checked') ){
                 //$("#7especifique").fadeOut(300);
                 $(".zero").attr('checked', false);  //limpa os checks
                 $(".7especifique").fadeOut(200);
                 $("#7especifiqueout").val('');
                 
             }else{
               // $(".10especifique").fadeOut(200);
               //  $("#10especifique").attr('required', false);
                // $("#10especifique").val('');
             }
        });

          $('.zero').click(function(){
            $("#nao7").attr('checked', false);  //limpa os checks
         });


        $("#7outras").click(function(){
             if($("#7outras").is(':checked') ){
                 $(".7especifique").fadeIn(300);
                 $("#7especifique").attr('required', true);
             }else{
             $(".7especifique").fadeOut(200);
            $("#7especifique").attr('required', false);
            $("#7especifiqueout").val('');
             }
        });


         $('#7outras').click(function(){
        // $(".7especifique").fadeIn(300);
        // $("#7especifique").attr('required', true);
         });

        $('.7gov').click(function(){
        // $(".7especifique").fadeOut(200);
         //$("#7especifique").attr('required', false);
        // $("#7especifique").val('');
        });


         $('#9outras').click(function(){
         $(".9especifique").fadeIn(300);
         $("#9especifique").attr('required', true);
         });

        $('.9gov').click(function(){
         $(".9especifique").fadeOut(200);
         $("#9especifique").attr('required', false);
         $("#9especifique").val('');
        });


       $("#10outras").click(function(){
             if($("#10outras").is(':checked') ){
                 $(".10especifique").fadeIn(300);
                  $("#10especifique").attr('required', true);
                 // $(".10gov").attr('checked', false);  //limpa os checks

                  $(".nenhuma").attr('checked', false); 
                  
           
             }else{
                $(".10especifique").fadeOut(200);
                 $("#10especifique").attr('required', false);
                 $("#10especifique").val('');
             }
        });

        $(".10gov").click(function(){
             if($(".10gov").is(':checked') ){
                $("#10outras").attr('checked', false);  //limpa os checks
                $(".nenhuma").attr('checked', false); 
                $(".10especifique").fadeOut(200);
                 $("#10especifique").attr('required', false);
                 $("#10especifique").val('');
           
             }else{

             }
        });

        //
        $("#nenhuma10").click(function(){
             if($("#nenhuma10").is(':checked') ){

                $(".10gov").attr('checked', false);  //limpa os checks
                $("#10outras").attr('checked', false);  //limpa os checks
                $(".10especifique").fadeOut(200);
                $("#10especifique").attr('required', false);
                $("#10especifique").val('');
           
             }else{

             }
        });




</script> 

<script>
function validaquestao() {
	
	nomeDoFormulario = document.frm_home3;
	
	if ( nomeDoFormulario.diversidade10_1.checked == false && 
        nomeDoFormulario.diversidade10_2.checked == false && 
        nomeDoFormulario.diversidade10_3.checked == false && 
        nomeDoFormulario.diversidade10_4.checked == false && 
        nomeDoFormulario.diversidade10_5.checked == false && 
        nomeDoFormulario.diversidade10_6.checked == false && 
        nomeDoFormulario.diversidade10_7.checked == false && 
        nomeDoFormulario.diversidade10_8.checked == false && 
        nomeDoFormulario.diversidade10_9.checked == false && 
        nomeDoFormulario.diversidade10_1.checked == false)
	{
		alert("Pelo menos um item deve ser escolhido na questão 10");
		return false;
	}
	return true;	
}
</script>
@endsection