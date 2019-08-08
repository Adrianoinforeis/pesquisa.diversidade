
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
            <strong>Informaçao !</strong> alteração efetuada com sucesso !
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
                                <form action="{{('\aplicacao/sequencia6')}}" method="post" enctype="multipart/form-data" id="" name="frm_home5" data-toggle="validator" role="form"  onsubmit="return validaQuestao5();">
                                    {{ csrf_field()}}
                                        <div class="form-row" style="margin-top:1%;">
                                                <div class=" col-md-12">
                                                    <h3 class="edicao">*13. O banco já desenvolveu outras ações internas no campo da diversidade?</h3>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="nao" name="nao13" @if($parte5 != '') {{($parte5->nao13 == 'nao' ? 'checked="checked"' : '')}} @endif id="13nao" class="outreset"> Não</label>
                                                </div>
                                        </div>

                                        <div class="form-row">
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" id="13equidade" value="sim" name="equ13" @if($parte5 != '') {{($parte5->equ13 == 'sim' ? 'checked="checked"' : '')}} @endif class="13gov outreset"> Sim, Equidade racial:</label>
                                            </div>
                                        </div>

                                      



                                         <div class="form-row">
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="genero" id="13genero" name="g_gen13" @if($parte5 != '') {{($parte5->g_gen13 == 'genero' ? 'checked="checked"' : '')}} @endif class="13gov outreset"> Sim, Gênero</label>
                                            </div>
                                        </div>
                                          <!--13.3-->


                                        <div class="form-row">
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" id="13lgbt" value="lgbtqia13" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" name="lgbtqia13" @if($parte5 != '') {{($parte5->lgbtqia13 == 'lgbtqia13' ? 'checked="checked"' : '')}} @endif  class="13gov outreset"> Sim, LGBTQIA+</label>
                                            </div>
                                        </div>
                                         <!--13.5-->

                                         


                                        <div class="form-row">
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" id="13_deficiencia" value="pcd13" name="pcd13"  @if($parte5 != '') {{($parte5->pcd13 == 'pcd13' ? 'checked="checked"' : '')}} @endif class="13gov outreset"> Sim, Pessoa com deficiência</label>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" id="13_outras" value="outras13" name="outras13"  @if($parte5 != '') {{($parte5->outras13 == 'outras13' ? 'checked="checked"' : '')}} @endif class="13gov outro13ze"> Sim, Outras </label>
                                            </div>
                                        </div>
                                        @if($parte5 != '')
                                            @if($parte5->outras13 != '')
                                            <div class="form-row espec_13_out reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row espec_13_out reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row espec_13_out reset" style="margin-left: 3%; display:none;">
                                            @endif 
                                         
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="espe_out_3" id="espec_13_out" class="form-control campos_form" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->espe_out_3}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>
                                         <!--13.7-->
                                         <!--#################Equidade racial##############################################################-->
                                         
                                     

                                        
                                         @if($parte5 != '')
                                            @if($parte5->equ13 != '')
                                            <div class="form-row 13equidade" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13equidade" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13equidade" style="margin-left: 3%; display:none;">
                                            @endif 

                                        
                                                <h3 class="edicao">*13.. Equidade racial:</h3>
                                                <!-- <div class=" col-md-12">
                                                    <label><input type="checkbox" id="er13_id" value="e_rac13" name="e_rac13" @if($parte5 != '') {{($parte5->e_rac13 == 'e_rac13' ? 'checked="checked"' : '')}} @endif class="13_1gov 13limpa resetca 13gen"> Não foram realizadas ações específicas sobre equidade racial   </label>
                                                </div> -->
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="e_sen13" name="e_sen13" @if($parte5 != '') {{($parte5->e_sen13 == 'e_sen13' ? 'checked="checked"' : '')}} @endif class="13_1gov 13limpa resetca er13_id"> Sim, ações para sensibilizar todas as pessoas colaboradoras sobre a temática da equidade racial</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="e_aco13" name="e_aco13" @if($parte5 != '') {{($parte5->e_aco13 == 'e_aco13' ? 'checked="checked"' : '')}} @endif class="13_1gov 13limpa resetca er13_id"> Sim, ações para sensibilizar apenas a alta liderança sobre a temática da equidade racial</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="e_ape13" name="e_ape13" @if($parte5 != '') {{($parte5->e_ape13 == 'e_ape13' ? 'checked="checked"' : '')}} @endif class="13_1gov 13limpa resetca er13_id"> Sim, ações para sensibilizar apenas a gerência sobre a temática da equidade racial</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="e_eve13" name="e_eve13" @if($parte5 != '') {{($parte5->e_eve13 == 'e_eve13' ? 'checked="checked"' : '')}} @endif class="13_1gov 13limpa resetca er13_id"> Sim, eventos presenciais em data específicas como 20 de novembro, por exemplo</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="e_com13" name="e_com13" @if($parte5 != '') {{($parte5->e_com13 == 'e_com13' ? 'checked="checked"' : '')}} @endif class="13_1gov 13limpa resetca er13_id"> Sim, campanhas de comunicação interna em datas específicas como 20 de novembro, por exemplo</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="e_ou13" name="e_ou13" @if($parte5 != '') {{($parte5->e_ou13 == 'e_ou13' ? 'checked="checked"' : '')}} @endif id="13_1_equidade" class="13limpa resetca er13_id"> Outras ações internas relacionadas à equidade racial. Especifique (máximo 5 linhas).</label>
                                                </div>
                                        </div>

                                        @if($parte5 != '')
                                            @if($parte5->e_ou13 != '')
                                            <div class="form-row 13_1especifique reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13_1especifique reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13_1especifique reset" style="margin-left: 3%; display:none;">
                                            @endif 
                                         
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="e_espe13" id="13especifique" class="form-control campos_form" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->e_espe13}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>
                                        @if($parte5 != '')
                                            @if($parte5->e_ou13 != '')
                                            <div class="form-row 13equidade" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13equidade" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13equidade" style="margin-left: 3%; display:none;">
                                            @endif 

                                        
                                              <h3 class="edicao">*13.. O banco contou com o apoio de consultoria especializada para desenvolver as ações específicas sobre equidade racial? </h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="nao" name="e_cont13" @if($parte5 != '') {{($parte5->e_cont13 == 'nao' ? 'checked="checked"' : '')}} @endif class="13_2_ngov resetca 13limpa"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="sim" name="e_cont13" @if($parte5 != '') {{($parte5->e_cont13 == 'sim' ? 'checked="checked"' : '')}} @endif class="13_2_sgov resetca 13limpa"> Sim</label>
                                            </div>
                                        </div>
                                        

                                        @if($parte5 != '')
                                            @if($parte5->e_cont13 == 'sim')
                                            <div class="form-row 13_2especifique reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13_2especifique reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13_2especifique reset" style="margin-left: 3%; display:none;">
                                            @endif 

                                       
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="e_espec13" id="13_2especifique" class="form-control campos_form" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->e_espec13}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>

                                        <!--#################Equidade racial##############################################################-->


                                        <!--#################genero##############################################################-->
                                        
                                        @if($parte5 != '')
                                            @if($parte5->g_gen13 != '')
                                            <div class="form-row 13genero" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13genero" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13genero" style="margin-left: 3%; display:none;">
                                            @endif 

                                          
                                            <h3 class="edicao">*13.. Gênero:</h3>
                                                <!-- <div class=" col-md-12">
                                                    <label><input type="checkbox" value="g_real13" id="13gen_id" name="g_real13" @if($parte5 != '') {{($parte5->g_real13 == 'g_real13' ? 'checked="checked"' : '')}} @endif class="13_3gov 13_3limpa resetca 13gen_id_l"> Não foram realizadas ações específicas sobre equidade de gênero </label>
                                                </div> -->
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="g_pess13" name="g_pess13" @if($parte5 != '') {{($parte5->g_pess13 == 'g_pess13' ? 'checked="checked"' : '')}} @endif class="13_3gov 13_3limpa resetca 13gen_id"> Sim, ações para sensibilizar todas as pessoas colaboradoras sobre a temática da equidade de gênero</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="g_ac13" name="g_ac13" @if($parte5 != '') {{($parte5->g_ac13 == 'g_ac13' ? 'checked="checked"' : '')}} @endif class="13_3gov 13_3limpa resetca 13gen_id"> Sim, ações para sensibilizar apenas a alta liderança sobre a temática da equidade de gênero</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="g_sen13" name="g_sen13" @if($parte5 != '') {{($parte5->g_sen13 == 'g_sen13' ? 'checked="checked"' : '')}} @endif class="13_3gov 13_3limpa resetca 13gen_id"> Sim, ações para sensibilizar apenas a gerência sobre a temática da equidade de gênero</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="g_eve13" name="g_eve13" @if($parte5 != '') {{($parte5->g_eve13 == 'g_eve13' ? 'checked="checked"' : '')}} @endif class="13_3gov 13_3limpa resetca 13gen_id"> Sim, eventos presenciais em data específicas como 08 de março, por exemplo</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="g_camp13" name="g_camp13" @if($parte5 != '') {{($parte5->g_camp13 == 'g_camp13' ? 'checked="checked"' : '')}} @endif class="13_3gov 13_3limpa resetca 13gen_id"> Sim, campanhas de comunicação interna em datas específicas como 08 de março, por exemplo</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="g_out13" name="g_out13" @if($parte5 != '') {{($parte5->g_out13 == 'g_out13' ? 'checked="checked"' : '')}} @endif id="13_genero" class="13_3limpa resetca 13limpa 13gen_id"> Outras ações internas relacionadas à gênero</label>
                                                </div>
                                        </div>

                                            @if($parte5 != '')
                                            @if($parte5->g_out13 != '')
                                            <div class="form-row 13_genero_especifique reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13_genero_especifique reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13_genero_especifique reset" style="margin-left: 3%; display:none;">
                                            @endif 
                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="g_espe13" id="13_3gen_especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->g_espe13}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>
                                        <!--13.4-->

                                        @if($parte5 != '')
                                            @if($parte5->g_gen13 != '')
                                            <div class="form-row 13genero" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13genero" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13genero" style="margin-left: 3%; display:none;">
                                            @endif 

                                        
                                              <h3 class="edicao">*13.. O banco contou com o apoio de consultoria especializada para desenvolver as ações específicas sobre equidade de gênero?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="nao" name="g_banco13" @if($parte5 != '') {{($parte5->g_banco13 == 'nao' ? 'checked="checked"' : '')}} @endif class="13_4_ngov resetca 13limpa"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="sim" name="g_banco13" @if($parte5 != '') {{($parte5->g_banco13 == 'sim' ? 'checked="checked"' : '')}} @endif class="13_4_sgov resetca 13limpa"> Sim</label>
                                            </div>
                                        </div>

                                        @if($parte5 != '')
                                            @if($parte5->g_banco13 == 'sim')
                                            <div class="form-row 13_4especifique reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13_4especifique reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13_4especifique reset" style="margin-left: 3%; display:none;">
                                            @endif 

                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="g_esp13" id="13_4especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->g_esp13}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>
                                        <!--#################genero##############################################################-->




                                         <!--#################Sim, LGBTQIA+##############################################################-->
                                         @if($parte5 != '')
                                            @if($parte5->lgbtqia13 != '')
                                            <div class="form-row 13lgbt" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13lgbt" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13lgbt" style="margin-left: 3%; display:none;">
                                            @endif 
                                         
                                                <h3 class="edicao">*13.. LGBTQIA+:</h3>
                                                <!-- <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_for13" id="lgbt13_id" name="l_for13" @if($parte5 != '') {{($parte5->l_for13 == 'l_for13' ? 'checked="checked"' : '')}} @endif class="13_5gov 13_5limpa resetca  lgbt13_id_l"> Não foram realizadas ações específicas sobre a população LGBTQIA+</label>
                                                </div> -->
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_aco13" name="l_aco13" @if($parte5 != '') {{($parte5->l_aco13 == 'l_aco13' ? 'checked="checked"' : '')}} @endif class="13_5gov 13_5limpa resetca lgbt13_id"> Sim, ações para ampliar a presença de pessoas trans no quadro de pessoas colaboradoras</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_amp13" name="l_amp13" @if($parte5 != '') {{($parte5->l_amp13 == 'l_amp13' ? 'checked="checked"' : '')}} @endif class="13_5gov 13_5limpa resetca lgbt13_id"> Sim, ações para ampliar a presença de pessoas trans nos níveis de liderança</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_sen13" name="l_sen13" @if($parte5 != '') {{($parte5->l_sen13 == 'l_sen13' ? 'checked="checked"' : '')}} @endif class="13_5gov 13_5limpa resetca lgbt13_id"> Sim, ações para sensibilizar todas as pessoas colaboradoras sobre a inclusão de pessoas LGBTQIA+</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_lide13" name="l_lide13" @if($parte5 != '') {{($parte5->l_lide13 == 'l_lide13' ? 'checked="checked"' : '')}} @endif class="13_5gov 13_5limpa resetca lgbt13_id"> Sim, ações para sensibilizar apenas a alta liderança sobre a inclusão de pessoas LGBTQIA+</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_age13" name="l_age13" @if($parte5 != '') {{($parte5->l_age13 == 'l_age13' ? 'checked="checked"' : '')}} @endif class="13_5gov 13_5limpa resetca lgbt13_id"> Sim, ações para sensibilizar apenas a gerência sobre a inclusão de pessoas LGBTQIA+</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_eve13" name="l_eve13" @if($parte5 != '') {{($parte5->l_eve13 == 'l_eve13' ? 'checked="checked"' : '')}} @endif class="13_5gov 13_5limpa resetca lgbt13_id"> Sim, eventos presenciais em data específicas como 29 de janeiro ou 28 de junho, por exemplo</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_camp13" name="l_camp13" @if($parte5 != '') {{($parte5->l_camp13 == 'l_camp13' ? 'checked="checked"' : '')}} @endif class="13_5gov 13_5limpa resetca lgbt13_id"> Sim, campanhas de comunicação interna em datas específicas como 29 de janeiro ou 28 de junho, por exemplo</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="l_inte13" name="l_inte13" @if($parte5 != '') {{($parte5->l_inte13 == 'l_inte13' ? 'checked="checked"' : '')}} @endif id="13_5_lgbt" class="13_5limpa resetca 13limpa lgbt13_id"> Outras ações internas relacionadas à inclusão de pessoas LGBTQIA+.</label>
                                                </div>
                                        </div>

                                         @if($parte5 != '')
                                            @if($parte5->l_inte13 != '')
                                            <div class="form-row 13_lgbt reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13_lgbt reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13_lgbt reset" style="margin-left: 3%; display:none;">
                                            @endif 
                                         
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="l_esp13" id="13_3lgbt_especifique" class="form-control campos_form" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->l_esp13}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>


                                         <!--13.6-->

                                          @if($parte5 != '')
                                            @if($parte5->lgbtqia13 != '')
                                            <div class="form-row 13lgbt" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13lgbt" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13lgbt" style="margin-left: 3%; display:none;">
                                            @endif 
                                         
                                              <h3 class="edicao">*13.. O banco contou com o apoio de consultoria especializada para desenvolver as ações específicas sobre a população LGBTQIA+?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="nao" name="l_escolha13" @if($parte5 != '') {{($parte5->l_escolha13 == 'nao' ? 'checked="checked"' : '')}} @endif class="13_6_ngov resetca 13limpa"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="sim" name="l_escolha13"  @if($parte5 != '') {{($parte5->l_escolha13 == 'sim' ? 'checked="checked"' : '')}} @endif class="13_6_sgov resetca 13limpa"> Sim</label>
                                            </div>
                                        </div>


                                         @if($parte5 != '')
                                            @if($parte5->l_escolha13 == 'sim')
                                            <div class="form-row 13_6especifique reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13_6especifique reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13_6especifique reset" style="margin-left: 3%; display:none;">
                                            @endif 
                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="l_outr13" id="13_6especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->l_outr13}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>


                                          <!--#################Sim, LGBTQIA+##############################################################-->


                                           <!--#################Sim, Pessoa com deficiência##############################################################-->

                                            @if($parte5 != '')
                                            @if($parte5->pcd13 != '')
                                            <div class="form-row 13deficiencia" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13deficiencia" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13deficiencia" style="margin-left: 3%; display:none;">
                                            @endif 

                                         
                                                <h3 class="edicao">*13..	Pessoa com deficiência:</h3>
                                                <!-- <div class=" col-md-12">
                                                    <label><input type="checkbox" value="13_7_1" id="pcd13_id" name="p_real13" @if($parte5 != '') {{($parte5->p_real13 == '13_7_1' ? 'checked="checked"' : '')}} @endif class="13_7gov 13_7limpa resetca pcd13_id_l"> Não foram realizadas ações específicas sobre inclusão de profissionais com deficiência</label>
                                                </div> -->
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="13_7_2" name="p_aco13" @if($parte5 != '') {{($parte5->p_aco13 == '13_7_2' ? 'checked="checked"' : '')}} @endif class="13_7gov 13_7limpa resetca pcd13_id"> Sim, ações para sensibilizar todas as pessoas colaboradoras sobre a temática da inclusão de profissionais com deficiência</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="13_7_3" name="p_sen13" @if($parte5 != '') {{($parte5->p_sen13 == '13_7_3' ? 'checked="checked"' : '')}} @endif class="13_7gov 13_7limpa resetca pcd13_id"> Sim, ações para sensibilizar apenas a alta liderança sobre a inclusão de profissionais com deficiência</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="13_7_4" name="p_ger13" @if($parte5 != '') {{($parte5->p_ger13 == '13_7_4' ? 'checked="checked"' : '')}} @endif   class="13_7gov 13_7limpa resetca 13limpa pcd13_id"> Sim, ações para sensibilizar apenas a gerência sobre a inclusão de profissionais com deficiência</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="13_7_5" name="p_eve13" @if($parte5 != '') {{($parte5->p_eve13 == '13_7_5' ? 'checked="checked"' : '')}} @endif  class="13_7gov 13_7limpa resetca 13limpa pcd13_id"> Sim, eventos presenciais em data específicas como 03 de dezembro, por exemplo</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="13_7_6" name="p_acoe13" @if($parte5 != '') {{($parte5->p_acoe13 == '13_7_6' ? 'checked="checked"' : '')}} @endif  class="13_7gov 13_7limpa resetca pcd13_id"> Sim, ações de comunicação interna em datas específicas como 03 de dezembro, por exemplo</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="13_7_7" name="p_outr13" @if($parte5 != '') {{($parte5->p_outr13 == '13_7_7' ? 'checked="checked"' : '')}} @endif  id="13_pcd" class="13_7limpa resetca 13limpa pcd13_id"> Outras ações internas relacionadas à inclusão de profissionais com deficiência</label>
                                                </div>
                                        </div>

                                        @if($parte5 != '')
                                            @if($parte5->p_outr13 != '')
                                            <div class="form-row 13_pcd reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13_pcd reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13_pcd reset" style="margin-left: 3%; display:none;">
                                            @endif 

                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="p_espec13" id="13_pcd_especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve sre informado">@if($parte5 != '') {{$parte5->p_espec13}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>


                                        <!--13.8-->
                                        @if($parte5 != '')
                                            @if($parte5->pcd13 != '')
                                            <div class="form-row 13deficiencia" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13deficiencia" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13deficiencia" style="margin-left: 3%; display:none;">
                                            @endif 
                                        
                                              <h3 class="edicao">*13.. O banco contou com o apoio de consultoria especializada para desenvolver as ações específicas sobre inclusão de pessoas com deficiência? </h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="nao" name="p_esc13" @if($parte5 != '') {{($parte5->p_esc13 == 'nao' ? 'checked="checked"' : '')}} @endif  class="13_8_ngov resetca 13limpa"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="sim" name="p_esc13" @if($parte5 != '') {{($parte5->p_esc13 == 'sim' ? 'checked="checked"' : '')}} @endif  class="13_8_sgov resetca 13limpa"> Sim</label>
                                            </div>
                                        </div>

                                           @if($parte5 != '')
                                            @if($parte5->p_esc13 == 'sim')
                                            <div class="form-row 13_8especifique reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 13_8especifique reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 13_8especifique reset" style="margin-left: 3%; display:none;">
                                            @endif 
                                       
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="p_especif13" id="13_8especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->p_especif13}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>

                                    <!--#################Sim, Pessoa com deficiência##############################################################-->


                                        <!--13.9-->
                                       <!-- <div class="form-row reset 13especifique" style="margin-left: 3%; display:none;">
                                                <h3 class="edicao">*13.9. Foram realizadas ações internas realizadas para outros grupos? Quais? </h3>
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <textarea name="13_9outroes" id="" class="form-control campos_form" data-error="Esse campo deve ser informado"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>-->

                                        <!--14-->
                                        <div class="form-row">
                                              <h3 class="edicao">*14. O banco já desenvolveu treinamento específico sobre viés inconsciente?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="sim" name="banco14" @if($parte5 != '') {{($parte5->banco14 == 'sim' ? 'checked="checked"' : '')}} @endif class="" required> Sim</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="nao" name="banco14" @if($parte5 != '') {{($parte5->banco14 == 'nao' ? 'checked="checked"' : '')}} @endif class="" required> Não</label>
                                            </div>
                                        </div>

                                         <!--15-->
                                         <div class="form-row">
                                              <h3 class="edicao">*15.	O banco possui um canal de denúncia?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="0" name="banco15" @if($parte5 != '') {{($parte5->banco15 == '0' ? 'checked="checked"' : '')}} @endif  class="15_ngov resetca"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="1" name="banco15" @if($parte5 != '') {{($parte5->banco15 == '1' ? 'checked="checked"' : '')}} @endif class="15_ngov resetca"> Sim, o canal de denúncia é sigiloso e terceirizado</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="2" name="banco15" @if($parte5 != '') {{($parte5->banco15 == '2' ? 'checked="checked"' : '')}} @endif  class="15_ngov resetca"> Sim, o canal de denúncia é sigiloso e não é terceirizado</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="3" name="banco15" @if($parte5 != '') {{($parte5->banco15 == '3' ? 'checked="checked"' : '')}} @endif  class="15_banco resetca"> Outro</label>
                                            </div>
                                        </div>

                                         @if($parte5 != '')
                                            @if($parte5->banco15 == '3')
                                            <div class="form-row 15especifique reset" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 15especifique reset" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 15especifique reset" style="margin-left: 3%; display:none;">
                                            @endif 
                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="outroes15" id="15especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte5 != '') {{$parte5->outroes15}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>

                                         <!--14-->
                                         <div class="form-row">
                                              <h3 class="edicao">*16.	O banco tem um comitê de conduta?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="1" name="banco16" @if($parte5 != '') {{($parte5->banco16 == '1' ? 'checked="checked"' : '')}} @endif  class=""> Sim</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="0" name="banco16" @if($parte5 != '') {{($parte5->banco16 == '0' ? 'checked="checked"' : '')}} @endif  class=""> Não</label>
                                            </div>
                                        </div>



















                                        <br />
                                        <div class="form-row">
                                            <div class="form-grupo form-group">                                               
                                                <a title="...Voltar" href="{{('\aplicacao/sequencia4')}}" class="btn  btn-participar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
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
        $(document).on("input", "#11_12especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes11]").val();
            $("textarea[name=outroes11]").val(comentario.substr(0, limite));
            $(".ca_outroes11").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes11").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#11_13especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes_11]").val();
            $("textarea[name=outroes_11]").val(comentario.substr(0, limite));
            $(".ca_outroes_11").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes_11").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#11_14especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=l_outroes11]").val();
            $("textarea[name=l_outroes11]").val(comentario.substr(0, limite));
            $(".ca_l_outroes11").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_l_outroes11").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });

    $(document).on("input", "#11_15especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes_pcd11]").val();
            $("textarea[name=outroes_pcd11]").val(comentario.substr(0, limite));
            $(".ca_outroes_pcd11").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes_pcd11").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#11_16especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes_11outro]").val();
            $("textarea[name=outroes_11outro]").val(comentario.substr(0, limite));
            $(".ca_outroes_11outro").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes_11outro").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#12_12especifique", function() {
        var limite = 3000;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=pes_negras12]").val();
            $("textarea[name=pes_negras12]").val(comentario.substr(0, limite));
            $(".ca_pes_negras12").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_pes_negras12").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
</script>
 <script>
       //13.0
       $("#13nao").click(function(){
         if($("#13nao").is(':checked') ){
            $(".13gov").attr('checked', false); 
            $(".13limpa").attr('checked', false);
            $("#13especifique").val('');
            $(".13equidade").fadeOut(200);
            $(".13_1especifique").fadeOut(200); 
            
            
            
            //13.2
            $(".13_2especifique").fadeOut(200);
            $("#13_2especifique").attr('required', false);
            $("#13_2especifique").val('');

             //13.3
             $(".13genero").fadeOut(200);
             $("#13_3gen_especifique").val('');
             $(".13_genero_especifique").fadeOut(200);

             //13.4
             $(".13_4especifique").fadeOut(200);
            $("#13_4especifique").attr('required', false);
            $("#13_4especifique").val('');

            //lgbt
            $(".13lgbt").fadeOut(200); 
            $("#13_3lgbt_especifique").val('');
            $(".13_lgbt").fadeOut(200);
            $(".13_6especifique").fadeOut(200);

            //pcd
            $(".13deficiencia").fadeOut(200);
             $("#13deficiencia").val('');
             $(".13_pcd").fadeOut(200);
             $("#13_pcd_especifique").val('');
            $(".13_8especifique").fadeOut(200);
            $("#13_8especifique").val('');
           // $('#esp13_id').fadeOut(200);

            //Outros 13
            $(".espec_13_out").fadeOut(200);
            $("#espec_13_out").val('');
            $("#espec_13_out").attr('required', false);

         }else{

           }
       });

//######################## Equidade Racial #########################################
          $( "#13equidade" ).click(function(){
         if($("#13equidade").is(':checked') ){
            $(".13equidade").fadeIn(300);
            $("#13nao").attr('checked', false); 
           // $(".outro13ze").attr('checked', false);
            //$(".espec_13_out").fadeOut(200);
            // $("#espec_13_out").val(''); 
         }else{
             $(".13equidade").fadeOut(200);
             $("#13especifique").val('');
             $(".13_1especifique").fadeOut(200);
             $(".13limpa").attr('checked', false); 
             $(".13_2especifique").fadeOut(200);
             $("#13especifique").attr('required', false);
             

           }
       });
//reset
        //13.1
        $( "#13_1_equidade" ).click(function(){
         if($("#13_1_equidade").is(':checked') ){
            $(".13_1especifique").fadeIn(300);
            $("#13especifique").attr('required', true);
         }else{
             $(".13_1especifique").fadeOut(200);
             $("#13especifique").attr('required', false);
             $("#13especifique").val('');
           }
       });
   //13.2
        $('.13_2_sgov').click(function(){
        $(".13_2especifique").fadeIn(300);
        $("#13_2especifique").attr('required', true);
        });

        $('.13_2_ngov').click(function(){
        $(".13_2especifique").fadeOut(200);
        $("#13_2especifique").attr('required', false);
        $("#13_2especifique").val('');
        });


//############################# Genero #############################
          $( "#13genero" ).click(function(){
         if($("#13genero").is(':checked') ){
            $(".13genero").fadeIn(300);
            $("#13nao").attr('checked', false); 
           // $(".outro13ze").attr('checked', false);
           // $(".espec_13_out").fadeOut(200);
            // $("#espec_13_out").val(''); 
         }else{
             $(".13genero").fadeOut(200);
             $("#13_3gen_especifique").val('');
             $("#resetca").attr('checked', false); 

             $(".13_genero_especifique").fadeOut(200);
             $(".13_4especifique").fadeOut(200);
             $("#espec_13_out").val(''); 
             $("#espec_13_out").attr('required', false);
             $("#13_3gen_especifique").val(''); 
             $("#13_3gen_especifique").attr('required', false);
           }
       });

        //13.1
        $( "#13_genero" ).click(function(){
         if($("#13_genero").is(':checked') ){
            $(".13_genero_especifique").fadeIn(300);
            $("#13_3gen_especifique").attr('required', true);
         }else{
             $(".13_genero_especifique").fadeOut(200);
             $("#13_3gen_especifique").attr('required', false);
             $("#13_3gen_especifique").val('');
           }
       });
       
        //13.4
        $('.13_4_sgov').click(function(){
         $(".13_4especifique").fadeIn(300);
         $("#13_4especifique").attr('required', true);
         });

        $('.13_4_ngov').click(function(){
         $(".13_4especifique").fadeOut(200);
         $("#13_4especifique").attr('required', false);
         $("#13_4especifique").val('');
        });

//############################# LGBT #############################
         $( "#13lgbt" ).click(function(){
         if($("#13lgbt").is(':checked') ){
            $(".13lgbt").fadeIn(300);
            $("#13nao").attr('checked', false); 
            //$(".outro13ze").attr('checked', false);
            //$(".espec_13_out").fadeOut(200);
            // $("#espec_13_out").val(''); 
         }else{
            $("#13_3lgbt_especifique").attr('required', false);
             $("#13_6especifique").attr('required', false);
             $(".13lgbt").fadeOut(200);
             $("#13_3lgbt_especifique").val('');
             $("#13_6especifique").val('');
             $(".13_6especifique").fadeOut(200);
             $(".13_lgbt").fadeOut(200);
          
             

              
           }
       });

        //13.1
        $( "#13_5_lgbt" ).click(function(){
         if($("#13_5_lgbt").is(':checked') ){
            $(".13_lgbt").fadeIn(300);
            $("#13_3lgbt_especifique").attr('required', true);
         }else{
             $(".13_lgbt").fadeOut(200);
             $("#13_3lgbt_especifique").attr('required', false);
             $("#13_3lgbt_especifique").val('');
           }
       });
       //13.6
        $('.13_6_sgov').click(function(){
         $(".13_6especifique").fadeIn(300);
         $("#13_6especifique").attr('required', true);
         });

        $('.13_6_ngov').click(function(){
         $(".13_6especifique").fadeOut(200);
         $("#13_6especifique").attr('required', false);
         $("#13_6especifique").val('');
        });
 

          //Deficiencia #############################
          $("#13_deficiencia" ).click(function(){
         if($("#13_deficiencia").is(':checked') ){
            $(".13deficiencia").fadeIn(300);
            $("#13nao").attr('checked', false); 
            //$(".outro13ze").attr('checked', false);
           // $(".espec_13_out").fadeOut(200);
            // $("#espec_13_out").val(''); 
             
         }else{
            $(".resetca").attr('checked', false);
            $(".13_8_sgov").attr('checked', false);
             
             
            $("#13_pcd_especifique").attr('required', false);
            $("#13_8especifique").attr('required', false);

             $(".13deficiencia").fadeOut(200);
             $("#13deficiencia").val('');
             $(".13_pcd").fadeOut(200);
             $(".13_8especifique").fadeOut(200);

             
            // $("#13_6especifique").val('');
           }
       });
        //13.1
        $( "#13_pcd" ).click(function(){
         if($("#13_pcd").is(':checked') ){
            $(".13_pcd").fadeIn(300);
            $("#13_pcd_especifique").attr('required', true);
         }else{
             $(".13_pcd").fadeOut(200);
             $("#13_pcd_especifique").attr('required', false);
             $("#13_pcd_especifique").val('');
           }
       });

        //13.8
        $('.13_8_sgov').click(function(){
         $(".13_8especifique").fadeIn(300);
		 $("#13_8especifique").attr('required', true);
         });

        $('.13_8_ngov').click(function(){
         $(".13_8especifique").fadeOut(200);
         $("#13_8especifique").attr('required', false);
         $("#13_8especifique").val('');
        });

          //15
        $('.15_banco').click(function(){
         $(".15especifique").fadeIn(300);
		 $("#15especifique").attr('required', true);
         });

        $('.15_ngov').click(function(){
         $(".15especifique").fadeOut(200);
         $("#15especifique").attr('required', false);
         $("#15especifique").val('');
        });




//############################# Outras 13 #############################
         $( "#13_outras" ).click(function(){
         if($("#13_outras").is(':checked') ){
            $(".espec_13_out").fadeIn(300); 

            //$("#13nao").attr('checked', false); 
            $("#espec_13_out").attr('required', true);  
            //$(".outreset").attr('checked', false); 

            
         }else{
             $(".espec_13_out").fadeOut(200);
             $("#espec_13_out").val('');    
             $("#espec_13_out").attr('required', false);        
            // $("#13_6especifique").val('');
            
           }
       });




 ///############################# Equidade racial #############################
         $("#er13_id").click(function(){
         if($("#er13_id").is(':checked') ){
            $(".er13_id").attr('checked', false); 
            $(".13_1especifique").fadeOut(200);
           $("#13especifique").val(''); 
         }else{

           }
       });

        $(".er13_id").click(function(){
         if($(".er13_id").is(':checked') ){
           $(".13gen").attr('checked', false); 
           // $(".13_1especifique").fadeOut(200);
          // $("#13especifique").val(''); 
         }else{

           }
       });

 ///############################# genero #############################
   $("#13gen_id").click(function(){
         if($("#13gen_id").is(':checked') ){
            $(".13gen_id").attr('checked', false); 
            $(".13_genero_especifique").fadeOut(200);
           $("#13_3gen_especifique").val(''); 
         }else{

           }
       });

        $(".13gen_id").click(function(){
         if($(".13gen_id").is(':checked') ){
           $(".13gen_id_l").attr('checked', false); 
           // $(".13_1especifique").fadeOut(200);
          // $("#13especifique").val(''); 
         }else{

           }
       });

       ///############################# lgbt #############################
   $("#lgbt13_id").click(function(){
         if($("#lgbt13_id").is(':checked') ){
            $(".lgbt13_id").attr('checked', false); 
            $(".13_lgbt").fadeOut(200);
           $("#13_3lgbt_especifique").val(''); 
         }else{

           }
       });

        $(".lgbt13_id").click(function(){
         if($(".lgbt13_id").is(':checked') ){
           $(".lgbt13_id_l").attr('checked', false); 
           // $(".13_1especifique").fadeOut(200);
          // $("#13especifique").val(''); 
         }else{

           }
       });


   ///############################# PCD #############################
   $("#pcd13_id").click(function(){
         if($("#pcd13_id").is(':checked') ){
            $(".pcd13_id").attr('checked', false); 
            $(".13_pcd").fadeOut(200);
           $("#13_pcd_especifique").val(''); 
         }else{

           }
       });

        $(".pcd13_id").click(function(){
         if($(".pcd13_id").is(':checked') ){
           $(".pcd13_id_l").attr('checked', false); 
           // $(".13_1especifique").fadeOut(200);
          // $("#13especifique").val(''); 
         }else{

           }
       });
</script> 


<script>
function validaQuestao5() {
	
	nomeDoFormulario = document.frm_home5;
	
	if (nomeDoFormulario.nao13.checked == false && 
        nomeDoFormulario.equ13.checked == false && 
        nomeDoFormulario.g_gen13.checked == false && 
        nomeDoFormulario.lgbtqia13.checked == false && 
        nomeDoFormulario.pcd13.checked == false &&
        nomeDoFormulario.outras13.checked == false)
	{
		alert("Pelo menos um item deve ser escolhido na questão 13");
		return false;
	}
	return true;	
}
</script>
@endsection