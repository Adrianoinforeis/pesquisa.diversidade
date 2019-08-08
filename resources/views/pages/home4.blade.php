
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
                                <form action="{{('\aplicacao/sequencia5')}}" method="post" enctype="multipart/form-data" id="" name="frm_home4" data-toggle="validator" role="form"  onsubmit="return validaChecks();">
                                    {{ csrf_field()}}
                                        <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*11. O banco tem algum programa específico de recrutamento e seleção, a fim de ampliar a diversidade, considerando os grupos:</h3>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="11_1" value="Pessoas negras" name="p_negras11" @if($parte4 != '') {{($parte4->p_negras11 == 'Pessoas negras' ? 'checked="checked"' : '')}} @endif class="11_gov"> Pessoas negras  </label>
                                                </div>
                                        </div>

                                         

                                            @if($parte4 != '')
                                            @if($parte4->p_negras11 != '')
                                            <div class="form-row 11_1especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 11_1especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 11_1especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Jovem aprendiz" name="j_apren11"  @if($parte4 != '') {{($parte4->j_apren11 == 'Jovem aprendiz' ? 'checked="checked"' : '')}} @endif  class="11gov"> Jovem aprendiz</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Estagiários" name="est_11" @if($parte4 != '') {{($parte4->est_11 == 'Estagiários' ? 'checked="checked"' : '')}} @endif class="11gov"> Estagiários</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Trainees" name="trai_11" @if($parte4 != '') {{($parte4->trai_11 == 'Trainees' ? 'checked="checked"' : '')}} @endif class="11gov"> Trainees</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Operacional/Administrativo" name="ope_11" @if($parte4 != '') {{($parte4->ope_11 == 'Operacional/Administrativo' ? 'checked="checked"' : '')}} @endif class="11gov"> Operacional/Administrativo</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Técnico/Profissional/Comercial" name="tec_11" @if($parte4 != '') {{($parte4->tec_11 == 'Técnico/Profissional/Comercial' ? 'checked="checked"' : '')}} @endif class="11gov"> Técnico/Profissional/Comercial</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Coordenação/Supervisão" name="coor_11" @if($parte4 != '') {{($parte4->coor_11 == 'Coordenação/Supervisão' ? 'checked="checked"' : '')}} @endif class="11gov"> Coordenação / Supervisão</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Direção/Superintendência" name="dir_11" @if($parte4 != '') {{($parte4->dir_11 == 'Direção/Superintendência' ? 'checked="checked"' : '')}} @endif class="11gov"> Direção/Superintendência</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Outro" id="11govid" name="out_11" @if($parte4 != '') {{($parte4->out_11 == 'Outro' ? 'checked="checked"' : '')}} @endif class="11gov"> Outro</label>
                                                </div>
                                        </div>

                                         @if($parte4 != '')
                                        @if($parte4->out_11 == 'Outro')
                                        <div class="form-row 11_12especifique" style="margin-left: 3%;">
                                        @else
                                        <div class="form-row 11_12especifique" style="margin-left: 3%; display:none;">
                                        @endif
                                        @else
                                        <div class="form-row 11_12especifique" style="margin-left: 3%; display:none;">
                                        @endif 

                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes11" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="outroes11" id="11_12especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->outroes11}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>



                                         <div class="form-row" style="">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="11_2" value="Mulheres" name="mulheres11"  @if($parte4 != '') {{($parte4->mulheres11 == 'Mulheres' ? 'checked="checked"' : '')}} @endif class=""> Mulheres</label>
                                                </div>
                                        </div>


                                        
                                        @if($parte4 != '')
                                            @if($parte4->mulheres11 != '')
                                            <div class="form-row 11_2especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 11_2especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 11_2especifique" style="margin-left: 3%; display:none;">
                                            @endif 


                                     
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Jovem aprendiz" name="m_apre11" @if($parte4 != '') {{($parte4->m_apre11 == 'Jovem aprendiz' ? 'checked="checked"' : '')}} @endif class="11_2gov"> Jovem aprendiz</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Estagiários" name="m_est11" @if($parte4 != '') {{($parte4->m_est11 == 'Estagiários' ? 'checked="checked"' : '')}} @endif class="11_2gov"> Estagiários</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Trainees" name="m_tra11" @if($parte4 != '') {{($parte4->m_est11 == 'Trainees' ? 'checked="checked"' : '')}} @endif  class="11_2gov"> Trainees</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Operacional/Administrativo" name="m_op11" @if($parte4 != '') {{($parte4->m_op11 == 'Operacional/Administrativo' ? 'checked="checked"' : '')}} @endif  class="11_2gov"> Operacional/Administrativo</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Técnico/Profissional/Comercial" name="m_tec11" @if($parte4 != '') {{($parte4->m_tec11 == 'Técnico/Profissional/Comercial' ? 'checked="checked"' : '')}} @endif  class="11_2gov"> Técnico/Profissional/Comercial</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Coordenação/Supervisão" name="m_coo11" @if($parte4 != '') {{($parte4->m_coo11 == 'Coordenação/Supervisão' ? 'checked="checked"' : '')}} @endif  class="11_2gov"> Coordenação / Supervisão</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Direção/Superintendência" name="m_dir11" @if($parte4 != '') {{($parte4->m_dir11 == 'Direção/Superintendência' ? 'checked="checked"' : '')}} @endif  class="11_2gov"> Direção/Superintendência</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Outro" id="11_2govid" name="m_ou11" @if($parte4 != '') {{($parte4->m_ou11 == 'Outro' ? 'checked="checked"' : '')}} @endif  class="11_2gov"> Outro</label>
                                                </div>
                                        </div>

                                             @if($parte4 != '')
                                            @if($parte4->m_ou11 != '')
                                            <div class="form-row 11_13especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 11_13especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 11_13especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                  
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes_11" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="outroes_11" id="11_13especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->outroes_11}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>





                                     <div class="form-row" style="">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="11_3" value="lgbt11" name="lgbt11"  @if($parte4 != '') {{($parte4->lgbt11 == 'lgbt11' ? 'checked="checked"' : '')}} @endif  class=""> LGBTQIA+</label>
                                                </div>
                                        </div>

                                          @if($parte4 != '')
                                            @if($parte4->m_ou11 != '')
                                            <div class="form-row 11_3especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 11_3especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 11_3especifique" style="margin-left: 3%; display:none;">
                                            @endif 
                                      
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Jovem aprendiz" name="l_jovem11"  @if($parte4 != '') {{($parte4->l_jovem11 == 'Jovem aprendiz' ? 'checked="checked"' : '')}} @endif class="11_3gov"> Jovem aprendiz</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Estagiários" name="l_esta11"  @if($parte4 != '') {{($parte4->l_esta11 == 'Estagiários' ? 'checked="checked"' : '')}} @endif class="11_3gov"> Estagiários</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Trainees" name="l_trai11"  @if($parte4 != '') {{($parte4->l_trai11 == 'Trainees' ? 'checked="checked"' : '')}} @endif class="11_3gov"> Trainees</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Operacional/Administrativo" name="l_oper11"  @if($parte4 != '') {{($parte4->l_oper11 == 'Operacional/Administrativo' ? 'checked="checked"' : '')}} @endif class="11_3gov"> Operacional/Administrativo</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Técnico/Profissional/Comercial" name="l_tec11"  @if($parte4 != '') {{($parte4->l_tec11 == 'Técnico/Profissional/Comercial' ? 'checked="checked"' : '')}} @endif class="11_3gov"> Técnico/Profissional/Comercial</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Coordenação/Supervisão" name="l_coor11"  @if($parte4 != '') {{($parte4->l_coor11 == 'Coordenação/Supervisão' ? 'checked="checked"' : '')}} @endif class="11_3gov"> Coordenação / Supervisão</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Direção/Superintendência" name="l_direc11"  @if($parte4 != '') {{($parte4->l_direc11 == 'Direção/Superintendência' ? 'checked="checked"' : '')}} @endif class="11_3gov"> Direção/Superintendência</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Outro" id="11_3govid" name="l_out11"  @if($parte4 != '') {{($parte4->l_out11 == 'Outro' ? 'checked="checked"' : '')}} @endif class="11_3gov"> Outro</label>
                                                </div>
                                        </div>


                                            @if($parte4 != '')
                                            @if($parte4->l_out11 != '')
                                            <div class="form-row 11_14especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 11_14especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 11_14especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                      
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_l_outroes11" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="l_outroes11" id="11_14especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->l_outroes11}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>




                                   		<div class="form-row" style="">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="11_4" value="pcd11" name="pcd11" @if($parte4 != '') {{($parte4->pcd11 == 'pcd11' ? 'checked="checked"' : '')}} @endif class=""> Pessoas com deficiência</label>
                                                </div>
                                        </div>

                                          @if($parte4 != '')
                                            @if($parte4->pcd11 != '')
                                            <div class="form-row 11_4especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 11_4especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 11_4especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                        
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Jovem aprendiz" name="p_jov11" @if($parte4 != '') {{($parte4->p_jov11 == 'Jovem aprendiz' ? 'checked="checked"' : '')}} @endif class="11_4gov"> Jovem aprendiz</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Estagiários" name="p_est11" @if($parte4 != '') {{($parte4->p_est11 == 'Estagiários' ? 'checked="checked"' : '')}} @endif class="11_4gov"> Estagiários</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Trainees" name="p_tra11" @if($parte4 != '') {{($parte4->p_tra11 == 'Trainees' ? 'checked="checked"' : '')}} @endif class="11_4gov"> Trainees</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="p_oper11" name="p_oper11" @if($parte4 != '') {{($parte4->p_oper11 == 'p_oper11' ? 'checked="checked"' : '')}} @endif class="11_4gov"> Operacional/Administrativo</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="p_tec11" name="p_tec11" @if($parte4 != '') {{($parte4->p_tec11 == 'p_tec11' ? 'checked="checked"' : '')}} @endif class="11_4gov"> Técnico/Profissional/Comercial</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="p_coor11" name="p_coor11" @if($parte4 != '') {{($parte4->p_coor11 == 'p_coor11' ? 'checked="checked"' : '')}} @endif class="11_4gov"> Coordenação / Supervisão</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="p_dire11" name="p_dire11" @if($parte4 != '') {{($parte4->p_dire11 == 'p_dire11' ? 'checked="checked"' : '')}} @endif class="11_4gov"> Direção/Superintendência</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="p_out11" id="11_4govid" name="p_out11" @if($parte4 != '') {{($parte4->p_out11 == 'p_out11' ? 'checked="checked"' : '')}} @endif class="11_4gov"> Outro</label>
                                                </div>
                                        </div>

                                         @if($parte4 != '')
                                            @if($parte4->p_out11 != '')
                                            <div class="form-row 11_15especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 11_15especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 11_15especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes_pcd11" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="outroes_pcd11" id="11_15especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->outroes_pcd11}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>




                                        <div class="form-row" style="">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="11_5" value="outro_11out" name="outro_11out"  @if($parte4 != '') {{($parte4->outro_11out == 'outro_11out' ? 'checked="checked"' : '')}} @endif class=""> Outro</label>
                                                </div>
                                        </div>

                                         @if($parte4 != '')
                                            @if($parte4->outro_11out != '')
                                            <div class="form-row 11_16especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 11_16especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 11_16especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes_11outro" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="outroes_11outro" id="11_16especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->outroes_11outro}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>


                                





                                       





                                        <!--##########################################12.0#############################################-->
                                         <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*12.	O banco tem algum programa específico de encarreiramento para:</h3>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="12_1" value="Pessoas negras" name="p_negras12"   @if($parte4 != '') {{($parte4->p_negras12 == 'Pessoas negras' ? 'checked="checked"' : '')}} @endif class="12_gov"> Pessoas negras  </label>
                                                </div>
                                        </div>

                                         @if($parte4 != '')
                                            @if($parte4->p_negras12 != '')
                                            <div class="form-row 12_1especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_1especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_1especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                         
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Mentoring" name="j_apren12" @if($parte4 != '') {{($parte4->j_apren12 == 'Mentoring' ? 'checked="checked"' : '')}} @endif class="12gov"> Mentoring</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="desenvolvimento de carreira" name="est_12" @if($parte4 != '') {{($parte4->est_12 == 'desenvolvimento de carreira' ? 'checked="checked"' : '')}} @endif class="12gov"> desenvolvimento de carreira</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="capacitação profissional" name="trai_12" @if($parte4 != '') {{($parte4->trai_12 == 'capacitação profissional' ? 'checked="checked"' : '')}} @endif class="12_12gov"> capacitação profissional</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Outro" id="12govid" name="out_12" @if($parte4 != '') {{($parte4->out_12 == 'Outro' ? 'checked="checked"' : '')}} @endif class="12gov"> Outro</label>
                                                </div>
                                        </div>

                                            @if($parte4 != '')
                                            @if($parte4->out_12 != '')
                                            <div class="form-row 12_12especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_12especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_12especifique" style="margin-left: 3%; display:none;">
                                            @endif 


                                       
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_pes_negras12" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="pes_negras12" id="12_12especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->pes_negras12}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>



                                         <div class="form-row" style="">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="12_2" @if($parte4 != '') {{($parte4->mulheres12 == 'Mulheres' ? 'checked="checked"' : '')}} @endif value="Mulheres" name="mulheres12" class=""> Mulheres</label>
                                                </div>
                                        </div>

                                          @if($parte4 != '')
                                            @if($parte4->mulheres12 != '')
                                            <div class="form-row 12_2especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_2especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_2especifique" style="margin-left: 3%; display:none;">
                                            @endif

                                       
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Mentoring" name="m_japre12" @if($parte4 != '') {{($parte4->m_japre12 == 'Mentoring' ? 'checked="checked"' : '')}} @endif class="12_2gov"> Mentoring</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="desenvolvimento de carreira" name="m_est12" @if($parte4 != '') {{($parte4->m_est12 == 'desenvolvimento de carreira' ? 'checked="checked"' : '')}} @endif class="12_2gov"> desenvolvimento de carreira</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="capacitação profissional" name="m_tra12" @if($parte4 != '') {{($parte4->m_tra12 == 'capacitação profissional' ? 'checked="checked"' : '')}} @endif class="12_2gov"> capacitação profissional</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Outro" id="12_2govid" name="m_ou12" @if($parte4 != '') {{($parte4->m_ou12 == 'Outro' ? 'checked="checked"' : '')}} @endif class="12_2gov"> Outro</label>
                                                </div>
                                        </div>

                                         @if($parte4 != '')
                                            @if($parte4->m_ou12 != '')
                                            <div class="form-row 12_13especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_13especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_13especifique" style="margin-left: 3%; display:none;">
                                            @endif

                                       
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_m_esp12" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="m_esp12" id="12_13especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->m_esp12}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>





                                     <div class="form-row" style="">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="12_3" value="LGBTQIA" name="lgbt12" @if($parte4 != '') {{($parte4->lgbt12 == 'LGBTQIA' ? 'checked="checked"' : '')}} @endif class=""> LGBTQIA+</label>
                                                </div>
                                        </div>

                                           @if($parte4 != '')
                                            @if($parte4->lgbt12 != '')
                                            <div class="form-row 12_3especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_3especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_3especifique" style="margin-left: 3%; display:none;">
                                            @endif

                                       
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Mentoring" name="l_jov12" @if($parte4 != '') {{($parte4->l_jov12 == 'Mentoring' ? 'checked="checked"' : '')}} @endif class="12_3gov"> Mentoring</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="desenvolvimento de carreira" name="l_est12" @if($parte4 != '') {{($parte4->l_est12 == 'desenvolvimento de carreira' ? 'checked="checked"' : '')}} @endif class="12_3gov"> desenvolvimento de carreira</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="capacitação profissional" name="l_tra12" @if($parte4 != '') {{($parte4->l_tra12 == 'capacitação profissional' ? 'checked="checked"' : '')}} @endif class="12_3gov"> capacitação profissional</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Outro" id="12_3govid" name="l_goutro12" @if($parte4 != '') {{($parte4->l_goutro12 == 'Outro' ? 'checked="checked"' : '')}} @endif class="12_3gov"> Outro</label>
                                                </div>
                                        </div>


                                         @if($parte4 != '')
                                            @if($parte4->l_goutro12 != '')
                                            <div class="form-row 12_14especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_14especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_14especifique" style="margin-left: 3%; display:none;">
                                            @endif

                                       
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_l_outroes12" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="l_outroes12" id="12_14especifique"  maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->l_outroes12}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>




                                   		<div class="form-row" style="">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="12_4" value="PCD" name="p_pcd12" @if($parte4 != '') {{($parte4->p_pcd12 == 'PCD' ? 'checked="checked"' : '')}} @endif class=""> Pessoas com deficiência</label>
                                                </div>
                                        </div>

                                         @if($parte4 != '')
                                            @if($parte4->p_pcd12 != '')
                                            <div class="form-row 12_4especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_4especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_4especifique" style="margin-left: 3%; display:none;">
                                            @endif

                                      
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Mentoring" name="p_cdjov12" @if($parte4 != '') {{($parte4->p_cdjov12 == 'Mentoring' ? 'checked="checked"' : '')}} @endif class="12_4gov"> Mentoring</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="desenvolvimento de carreira" name="p_cdest12" @if($parte4 != '') {{($parte4->p_cdest12 == 'desenvolvimento de carreira' ? 'checked="checked"' : '')}} @endif class="12_4gov"> desenvolvimento de carreira</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="capacitação profissional" name="p_cdtra12" @if($parte4 != '') {{($parte4->p_cdtra12 == 'capacitação profissional' ? 'checked="checked"' : '')}} @endif class="12_4gov"> capacitação profissional</label>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <label><input type="checkbox" value="Outro" id="12_4govid" name="p_cdout12" @if($parte4 != '') {{($parte4->p_cdout12 == 'Outro' ? 'checked="checked"' : '')}} @endif class="12_4gov"> Outro</label>
                                                </div>
                                        </div>

                                         @if($parte4 != '')
                                            @if($parte4->p_cdout12 != '')
                                            <div class="form-row 12_15especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_15especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_15especifique" style="margin-left: 3%; display:none;">
                                            @endif

                                       
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_p_outroes12" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="p_outroes12" id="12_15especifique" maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->p_outroes12}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>




                                        <div class="form-row" style="">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="12_5" value="Outro" name="o_utro12"  @if($parte4 != '') {{($parte4->p_cdout12 == 'Outro' ? 'checked="checked"' : '')}} @endif class=""> Outro</label>
                                                </div>
                                        </div>


                                           @if($parte4 != '')
                                            @if($parte4->p_cdout12 != '')
                                            <div class="form-row 12_16especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 12_16especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 12_16especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                       
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_o_outroes12" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="o_outroes12" id="12_16especifique"  maxlength="1500" placeholder="Você pode digitar até 1500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte4 != '') {{$parte4->o_outroes12}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>







                                        <br />
                                        <div class="form-row">
                                            <div class="form-grupo form-group ">                                               
                                                <a title="...Voltar" href="{{('\aplicacao/sequencia3')}}" class="btn  btn-participar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                                <!-- <button style="display:none;" title="Cadastrar" data-toggle="modal" data-target="#idModal" id="btn_cad_com_modal" name="btn_abcham" class="btn  btn-participar">Salvar</button> -->
                                            </div>
                                            <div class="form-grupo form-group btn_continuar">                                               
                                                <button title="Continuar..." id="btn_cad_s_modal" name="btn_abcham" class="btn  btn-participar">Continuar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                                </div>
                                                <div class="form-grupo form-group btn_salvar">  
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
    $(document).on("input", "#12_13especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=m_esp12]").val();
            $("textarea[name=m_esp12]").val(comentario.substr(0, limite));
            $(".ca_m_esp12").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_m_esp12").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#12_14especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=l_outroes12]").val();
            $("textarea[name=l_outroes12]").val(comentario.substr(0, limite));
            $(".ca_l_outroes12").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_l_outroes12").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#12_15especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=p_outroes12]").val();
            $("textarea[name=p_outroes12]").val(comentario.substr(0, limite));
            $(".ca_p_outroes12").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_p_outroes12").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#12_16especifique", function() {
        var limite = 1500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=o_outroes12]").val();
            $("textarea[name=o_outroes12]").val(comentario.substr(0, limite));
            $(".ca_o_outroes12").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_o_outroes12").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
</script>
 <script>
/*<!--11.0-->*/
        $("#11_1").click(function(){
             if($("#11_1").is(':checked') ){
                $(".11_1especifique").fadeIn(300);
             }else{
                $(".11gov").attr('checked', false); 
                $(".11_1especifique").fadeOut(300);
                $(".11_12especifique").fadeOut(300);
                $("#11_12especifique").val('');
             }
        });
        /*<!--11.Outro-->*/
         $("#11govid").click(function(){
             if($("#11govid").is(':checked') ){
                $(".11_12especifique").fadeIn(300);
                $("#11_12especifique").attr('required', true);
             }else{
                $(".11_12especifique").fadeOut(300);
                $("#11_13especifique").val('');
				   $("#11_12especifique").attr('required', false);
             }
        });

/*<!--11.1-->*/
    $("#11_2").click(function(){
             if($("#11_2").is(':checked') ){
                $(".11_2especifique").fadeIn(300);
             }else{
                $(".11_2gov").attr('checked', false); 
                $(".11_2especifique").fadeOut(300);
                $(".11_13especifique").fadeOut(200);
                $("#11_13especifique").attr('required', false);
                $("#11_13especifique").val('');
             }
        });
        /*<!--11.1_Outro-->*/
         $("#11_2govid").click(function(){
             if($("#11_2govid").is(':checked') ){
                $(".11_13especifique").fadeIn(300);
                $("#11_13especifique").attr('required', true);
             }else{
                $(".11_13especifique").fadeOut(300);
                $("#11_13especifique").val('');
				$("#11_13especifique").attr('required', false);
             }
        });


/*<!--11.2-->*/
$("#11_3").click(function(){
             if($("#11_3").is(':checked') ){
                $(".11_3especifique").fadeIn(300);
             }else{
                $(".11_3gov").attr('checked', false); 
                $(".11_3especifique").fadeOut(300);
                $(".11_14especifique").fadeOut(200);
                $("#11_14especifique").attr('required', false);
                $("#11_14especifique").val('');
             }
        });
        /*<!--11.2_Outro-->*/
         $("#11_3govid").click(function(){
             if($("#11_3govid").is(':checked') ){
                $(".11_14especifique").fadeIn(300);
                $("#11_14especifique").attr('required', true);
             }else{
                $(".11_14especifique").fadeOut(300);
                $("#11_14especifique").val('');
				 $("#11_14especifique").attr('required', false);
             }
        });


        /*<!--11.4-->*/
        $("#11_4").click(function(){
             if($("#11_4").is(':checked') ){
                $(".11_4especifique").fadeIn(300);
             }else{
                $(".11_4gov").attr('checked', false); 
                $(".11_4especifique").fadeOut(300);
                $(".11_15especifique").fadeOut(200);
                $("#11_15especifique").attr('required', false);
                $("#11_15especifique").val('');
             }
        });
        /*<!--11.4_Outro-->*/
         $("#11_4govid").click(function(){
             if($("#11_4govid").is(':checked') ){
                $(".11_15especifique").fadeIn(300);
                $("#11_15especifique").attr('required', true);
             }else{
                $(".11_15especifique").fadeOut(300);
                $("#11_15especifique").val('');
                $("#11_15especifique").attr('required', false);
             }
             });

             /*<!--11.5_Outro-->*/
         $("#11_5").click(function(){
             if($("#11_5").is(':checked') ){
                $(".11_16especifique").fadeIn(300);
                $("#11_16especifique").attr('required', true);
             }else{
                $(".11_16especifique").fadeOut(300);
                $("#11_16especifique").val('');
                $("#11_16especifique").attr('required', false);
             }
             });






/*############################pergunta 12.0 ############################*/
             /*<!--12.0-->*/
        $("#12_1").click(function(){ //p negras
             if($("#12_1").is(':checked') ){
                $(".12_1especifique").fadeIn(300);
             }else{
                $(".12gov").attr('checked', false); 
                $(".12_1especifique").fadeOut(300);
                $(".12_12especifique").fadeOut(300);
                $("#12_12especifique").val('');
             }
        });
        /*<!--12.Outro-->*/
         $("#12govid").click(function(){
             if($("#12govid").is(':checked') ){
                $(".12_12especifique").fadeIn(300);
                $("#12_12especifique").attr('required', true);
             }else{
                $(".12_12especifique").fadeOut(300);
                $("#12_12especifique").val('');
				$("#12_12especifique").attr('required', false);
             }
        });

/*<!--12.1-->*/
    $("#12_2").click(function(){ //mulheres
             if($("#12_2").is(':checked') ){
                $(".12_2especifique").fadeIn(300);
             }else{
                $(".12_2gov").attr('checked', false); 
                $(".12_2especifique").fadeOut(300);
                $(".12_13especifique").fadeOut(200);
                $("#12_13especifique").attr('required', false);
                $("#12_13especifique").val('');
             }
        });
        /*<!--12.1_Outro-->*/
         $("#12_2govid").click(function(){
             if($("#12_2govid").is(':checked') ){
                $(".12_13especifique").fadeIn(300);
                $("#12_13especifique").attr('required', true);
             }else{
                $(".12_13especifique").fadeOut(300);
                $("#12_13especifique").val('');
				$("#12_13especifique").attr('required', false);
             }
        });


/*<!--12.2-->*/
$("#12_3").click(function(){ //lgbt
             if($("#12_3").is(':checked') ){
                $(".12_3especifique").fadeIn(300);
             }else{
                $(".12_3gov").attr('checked', false); 
                $(".12_3especifique").fadeOut(300);
                $(".12_14especifique").fadeOut(200);
                $("#12_14especifique").attr('required', false);
                $("#12_14especifique").val('');
             }
        });
        /*<!--12.2_Outro-->*/
         $("#12_3govid").click(function(){
             if($("#12_3govid").is(':checked') ){
                $(".12_14especifique").fadeIn(300);
                $("#12_14especifique").attr('required', true);
             }else{
                $(".12_14especifique").fadeOut(300);
                $("#12_14especifique").val('');
				 $("#12_14especifique").attr('required', false);
             }
        });


        /*<!--12.4-->*/
        $("#12_4").click(function(){ //pcd
             if($("#12_4").is(':checked') ){
                $(".12_4especifique").fadeIn(300);
             }else{
                $(".12_4gov").attr('checked', false); 
                $(".12_4especifique").fadeOut(300);
                $(".12_15especifique").fadeOut(200);
                $("#12_15especifique").attr('required', false);
                $("#12_15especifique").val('');
             }
        });
        /*<!--12.4_Outro-->*/
         $("#12_4govid").click(function(){
             if($("#12_4govid").is(':checked') ){
                $(".12_15especifique").fadeIn(300);
                $("#12_15especifique").attr('required', true);
             }else{
                $(".12_15especifique").fadeOut(300);
                $("#12_15especifique").val('');
                $("#12_15especifique").attr('required', false);
             }
             });

             /*<!--12.5_Outro-->*/
         $("#12_5").click(function(){
             if($("#12_5").is(':checked') ){
                $(".12_16especifique").fadeIn(300);
                $("#12_16especifique").attr('required', true);
             }else{
                $(".12_16especifique").fadeOut(300);
                $("#12_16especifique").val('');
                $("#12_16especifique").attr('required', false);
             }
             });
</script> 

<script>
function validaChecks() {
	
	nomeDoFormulario = document.frm_home4;
	
	if (nomeDoFormulario.p_negras11.checked == false && 
        nomeDoFormulario.mulheres11.checked == false && 
        nomeDoFormulario.lgbt11.checked == false && 
        nomeDoFormulario.pcd11.checked == false && 
        nomeDoFormulario.outro_11out.checked == false)
	{
		alert("Pelo menos um item deve ser escolhido na questão 11");
		return false;
	}else if(nomeDoFormulario.p_negras12.checked == false && 
        nomeDoFormulario.mulheres12.checked == false && 
        nomeDoFormulario.lgbt12.checked == false && 
        nomeDoFormulario.p_pcd12.checked == false && 
        nomeDoFormulario.o_utro12.checked == false
    )
    {
		alert("Pelo menos um item deve ser escolhido na questão 12");
		return false;
	}
	return true;	
}
</script>
@endsection