
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
                                <form action="{{('\aplicacao/final')}}" method="post" enctype="multipart/form-data" id="formImage" name="frm_home6" data-toggle="validator" role="form" onsubmit="return validaQuestao6();">
                                    {{ csrf_field()}}
                                        <div class="form-row">
                                              <h3 class="edicao">*17.	O banco já desenvolveu ações externas no campo da diversidade?</h3>
                                              <div class=" col-md-12">
                                                <label><input type="checkbox" id="nao17" value="nao17" name="nao17" @if($parte6 != '') {{($parte6->nao17 == 'nao17' ? 'checked="checked"' : '')}} @endif class="nao17"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" id="17_cor_raca" value="17" name="racacor17" @if($parte6 != '') {{($parte6->racacor17 == '17' ? 'checked="checked"' : '')}} @endif class="3sim"> Cor/raça</label>
                                            </div>
                                        </div>

                                            @if($parte6 != '')
                                            @if($parte6->racacor17 != '')
                                            <div class="form-row 17diversidade" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 17diversidade" style="margin-left: 3%; display:none">
                                            @endif
                                            @else
                                            <div class="form-row 17diversidade" style="margin-left: 3%; display:none">
                                            @endif 
                                       
                                        <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Desenvolvimento de produtos e serviços </label>
                                                <textarea rows="3" name="servicos17" id="17_2" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->servicos17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Programa de microcrédito </label>
                                                <textarea rows="3"  name="programa17" id="17_3" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->programa17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Cursos de educação financeira </label>
                                                <textarea rows="3"  name="financeira17" id="17_4" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->financeira17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Apoio a eventos, conferências, feiras, seminários etc. voltados à equidade racial. Quais?</label>
                                                <textarea rows="3"  name="apoio17" id="17_5" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->apoio17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class=" col-md-12">
                                                    <label><input type="checkbox" value="17_projeto" name="projeto17"  @if($parte6 != '') {{($parte6->projeto17 == '17_projeto' ? 'checked="checked"' : '')}} @endif id="17_apoio_proj" class="17_apoio"> Apoio a projetos sociais voltados à equidade racial</label>
                                            </div>

                                            @if($parte6 != '')
                                            @if($parte6->projeto17 != '')
                                            <div class="form-row 17_apoio_proj" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 17_apoio_proj" style="margin-left: 3%; display:none">
                                            @endif
                                            @else
                                            <div class="form-row 17_apoio_proj" style="margin-left: 3%; display:none">
                                            @endif 

                                            
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="educação básica" name="educacao17"  @if($parte6 != '') {{($parte6->educacao17 == 'educação básica' ? 'checked="checked"' : '')}} @endif  class="17_apoio 17_apoio_sub"> educação básica</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="cursos de idioma" name="curso17"  @if($parte6 != '') {{($parte6->curso17 == 'cursos de idioma' ? 'checked="checked"' : '')}} @endif  class="17_apoio 17_apoio_sub"> cursos de idioma</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="capacitação para o trabalho" name="captacao17" @if($parte6 != '') {{($parte6->captacao17 == 'capacitação para o trabalho' ? 'checked="checked"' : '')}} @endif  class="17_apoio 17_apoio_sub"> capacitação para o trabalho</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="bolsa permanência na universidade" name="bolsa17" @if($parte6 != '') {{($parte6->bolsa17 == 'bolsa permanência na universidade' ? 'checked="checked"' : '')}} @endif  class="17_apoio 17_apoio_sub">  bolsa permanência na universidade</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="Outros" name="outros17" id="17_1_outro" @if($parte6 != '') {{($parte6->outros17 == 'Outros' ? 'checked="checked"' : '')}} @endif  class="17_apoio 17_apoio_sub"> Outros</label>
                                                </div>

                                                @if($parte6 != '')
                                                @if($parte6->outros17 != '')
                                                <div class="col-md-12 17_1_outro" style="margin-left: 3%;">
                                                @else
                                                <div class="col-md-12 17_1_outro" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="col-md-12 17_1_outro" style="margin-left: 3%; display:none;">
                                                @endif 
                                                
                                               
                                                        <label for="obs" class="control-label">*Especifique </label>
                                                        <textarea name="especifique17" id="17_6" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->especifique17}}  @endif</textarea>
                                                        <div class="help-block with-errors"></div>
                                                </div>

                                            </div>
                                        </div>

                                           
                                            

                                        
                                        <!--####################################################GENERO#########################################-->
                                          <div class="form-row">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="17genero" value="sim" name="genero17" @if($parte6 != '') {{($parte6->outros17 == 'Outros' ? 'checked="checked"' : '')}} @endif  class="3sim"> Gênero</label>
                                                </div>
                                         </div>

                                         @if($parte6 != '')
                                        @if($parte6->genero17 != '')
                                        <div class="form-row 17genero" style="margin-left: 3%;">
                                        @else
                                        <div class="form-row 17genero" style="margin-left: 3%; display:none">
                                        @endif
                                        @else
                                        <div class="form-row 17genero" style="margin-left: 3%; display:none">
                                        @endif 

                                         
                                        <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Desenvolvimento de produtos e serviços </label>
                                                <textarea rows="3" name="g_des17" id="17_2_1" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->g_des17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Programa de microcrédito </label>
                                                <textarea rows="3"  name="g_pro17" id="17_3_2" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->g_pro17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Cursos de educação financeira </label>
                                                <textarea rows="3"  name="g_cur17" id="17_4_3" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->g_cur17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Apoio a eventos, conferências, feiras, seminários etc. voltados à equidade racial. Quais?</label>
                                                <textarea rows="3"  name="g_apoi17" id="17_5_4" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->g_apoi17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class=" col-md-12">
                                                    <label><input type="checkbox" value="17_2_1" name="g_ap17" @if($parte6 != '') {{($parte6->g_ap17 == '17_2_1' ? 'checked="checked"' : '')}} @endif id="17_apoio_gen" class="17_apoio_gen"> Apoio a projetos sociais voltados à equidade racial</label>
                                            </div>

                                            @if($parte6 != '')
                                            @if($parte6->g_ap17 != '')
                                            <div class="form-row 17_apoio_gen_2" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 17_apoio_gen_2" style="margin-left: 3%; display:none">
                                            @endif
                                            @else
                                            <div class="form-row 17_apoio_gen_2" style="margin-left: 3%; display:none">
                                            @endif 
                                            
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="educação básica" name="g_ed17" @if($parte6 != '') {{($parte6->g_ed17 == 'educação básica' ? 'checked="checked"' : '')}} @endif class="17_apoio_gen 17_apoio_limpa"> educação básica</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="cursos de idioma" name="g_cu17" @if($parte6 != '') {{($parte6->g_cu17 == 'cursos de idioma' ? 'checked="checked"' : '')}} @endif class="17_apoio_gen 17_apoio_limpa"> cursos de idioma</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="capacitação para o trabalho" name="g_cap17" @if($parte6 != '') {{($parte6->g_cap17 == 'capacitação para o trabalho' ? 'checked="checked"' : '')}} @endif class="17_apoio_gen 17_apoio_limpa"> capacitação para o trabalho</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="bolsa permanência na universidade" name="g_bol17" @if($parte6 != '') {{($parte6->g_bol17 == 'bolsa permanência na universidade' ? 'checked="checked"' : '')}} @endif class="17_apoio_gen 17_apoio_limpa">  bolsa permanência na universidade</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="Outros" name="g_outros17" @if($parte6 != '') {{($parte6->g_outros17 == 'Outros' ? 'checked="checked"' : '')}} @endif id="17_1_outro_gen" class="17_apoio_gen 17_apoio_limpa"> Outros</label>
                                                </div>
                                                

                                                 @if($parte6 != '')
                                                @if($parte6->g_outros17 != '')
                                                <div class="col-md-12 17_1_outro_gen" style="margin-left: 3%;">
                                                @else
                                                <div class="col-md-12 17_1_outro_gen" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="col-md-12 17_1_outro_gen" style="margin-left: 3%; display:none;">
                                                @endif 
                                               
                                                        <label for="obs" class="control-label">*Especifique </label>
                                                        <textarea name="g_especif17" id="17_6_5" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->g_especif17}}  @endif</textarea>
                                                        <div class="help-block with-errors"></div>
                                                </div>

                                            </div>
                                        </div>



                                        <!--####################################################LGBTQIA#########################################-->
                                          <div class="form-row">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="lgbt" id="17lgbt" name="lgbt17" @if($parte6 != '') {{($parte6->lgbt17 == 'lgbt' ? 'checked="checked"' : '')}} @endif class="3sim"> LGBTQIA+</label>
                                                </div>
                                         </div>

                                             @if($parte6 != '')
                                            @if($parte6->lgbt17 != '')
                                            <div class="form-row 17lgbt" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 17lgbt" style="margin-left: 3%; display:none">
                                            @endif
                                            @else
                                            <div class="form-row 17lgbt" style="margin-left: 3%; display:none">
                                            @endif 

                                           
                                        <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Desenvolvimento de produtos e serviços </label>
                                                <textarea rows="3" name="l_des17" id="17_3_1" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->l_des17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Programa de microcrédito </label>
                                                <textarea rows="3"  name="l_pro17" id="17_3_2_1" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->l_pro17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Cursos de educação financeira </label>
                                                <textarea rows="3"  name="l_cur17" id="17_3_3" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->l_cur17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Apoio a eventos, conferências, feiras, seminários etc. voltados à equidade racial. Quais?</label>
                                                <textarea rows="3"  name="l_ap17" id="17_3_4" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->l_ap17}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class=" col-md-12">
                                                    <label><input type="checkbox" value="17_3_1" name="l_proj17" @if($parte6 != '') {{($parte6->l_proj17 == '17_3_1' ? 'checked="checked"' : '')}} @endif id="17_lgbt" class="17_lgbt_limpa"> Apoio a projetos sociais voltados à equidade racial</label>
                                            </div>


                                             @if($parte6 != '')
                                                @if($parte6->l_ap17 != '')
                                                <div class="form-row 17_lgbt" style="margin-left: 3%;">
                                                @else
                                                <div class="form-row 17_lgbt" style="margin-left: 3%; display:none">
                                                @endif
                                                @else
                                                <div class="form-row 17_lgbt" style="margin-left: 3%; display:none">
                                                @endif 
                                           
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="educação básica" name="l_ed17" @if($parte6 != '') {{($parte6->l_ed17 == 'educação básica' ? 'checked="checked"' : '')}} @endif  class="17_lgbt_limpa_1 17_lgbt_limpa"> educação básica</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="cursos de idioma" name="l_cu17" @if($parte6 != '') {{($parte6->l_cu17 == 'cursos de idioma' ? 'checked="checked"' : '')}} @endif  class="17_lgbt_limpa_1 17_lgbt_limpa"> cursos de idioma</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="capacitação para o trabalho" name="l_ca17" @if($parte6 != '') {{($parte6->l_ca17 == 'capacitação para o trabalho' ? 'checked="checked"' : '')}} @endif  class="17_lgbt_limpa_1 17_lgbt_limpa"> capacitação para o trabalho</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="bolsa permanência na universidade" name="l_bol17" @if($parte6 != '') {{($parte6->l_bol17 == 'bolsa permanência na universidade' ? 'checked="checked"' : '')}} @endif  class="17_lgbt_limpa_1 17_lgbt_limpa">  bolsa permanência na universidade</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="Outros" name="l_outros17" @if($parte6 != '') {{($parte6->l_outros17 == 'Outros' ? 'checked="checked"' : '')}} @endif  id="17_1_outro_lgbt" class="17_lgbt_limpa_1 17_lgbt_limpa"> Outros</label>
                                                </div>
                                                
                                                @if($parte6 != '')
                                                @if($parte6->l_outros17 != '')
                                                <div class="col-md-12 17_1_outro_lgbt" style="margin-left: 3%;">
                                                @else
                                                <div class="col-md-12 17_1_outro_lgbt" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="col-md-12 17_1_outro_lgbt" style="margin-left: 3%; display:none;">
                                                @endif 
                                                
                                                        <label for="obs" class="control-label">*Especifique </label>
                                                        <textarea name="l_especif17" id="17_3_5" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->l_especif17}}  @endif</textarea>
                                                        <div class="help-block with-errors"></div>
                                                </div>

                                            </div>
                                        </div>






                                        <!--####################################################PCD#########################################-->
                                         <div class="form-row">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="17pcd" value="17pcd" name="pcd17" @if($parte6 != '') {{($parte6->pcd17 == '17pcd' ? 'checked="checked"' : '')}} @endif class="3sim"> Pessoas com deficiência </label>
                                                </div>
                                         </div>

                                                @if($parte6 != '')
                                                @if($parte6->pcd17 != '')
                                                <div class="form-row 17pcd" style="margin-left: 3%;">
                                                @else
                                                <div class="form-row 17pcd" style="margin-left: 3%; display:none">
                                                @endif
                                                @else
                                                <div class="form-row 17pcd" style="margin-left: 3%; display:none">
                                                @endif 
                                        
                                        <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Desenvolvimento de produtos e serviços </label>
                                                <textarea rows="3" name="p_des17" id="17_4_1" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado"> @if($parte6 != '') {{$parte6->p_des17}}  @endif </textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Programa de microcrédito </label>
                                                <textarea rows="3"  name="p_pro17" id="17_4_2_1" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado"> @if($parte6 != '') {{$parte6->p_pro17}}  @endif </textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Cursos de educação financeira </label>
                                                <textarea rows="3"  name="p_cur17" id="17_4_3_1" class="form-control campos_form" data-error="Esse campo deve ser informado"> @if($parte6 != '') {{$parte6->p_cur17}}  @endif </textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Apoio a eventos, conferências, feiras, seminários etc. voltados à equidade racial. Quais?</label>
                                                <textarea rows="3"  name="p_apoio17" id="17_4_4" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado"> @if($parte6 != '') {{$parte6->p_apoio17}}  @endif </textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class=" col-md-12">
                                                    <label><input type="checkbox" value="17_4_3" name="p_apoi17" @if($parte6 != '') {{($parte6->p_apoi17 == '17_4_3' ? 'checked="checked"' : '')}} @endif  id="17_pcd" class="17_pcd_limpa"> Apoio a projetos sociais voltados à equidade racial</label>
                                            </div>


                                            @if($parte6 != '')
                                                @if($parte6->p_apoi17 != '')
                                                <div class="form-row 17_pcd" style="margin-left: 3%;">
                                                @else
                                                <div class="form-row 17_pcd" style="margin-left: 3%; display:none">
                                                @endif
                                                @else
                                                <div class="form-row 17_pcd" style="margin-left: 3%; display:none">
                                                @endif 
                                            
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="educação básica" name="p_edu17" @if($parte6 != '') {{($parte6->p_edu17 == 'educação básica' ? 'checked="checked"' : '')}} @endif  class="17_pcd_limpa_1 17_pcd_limpa"> educação básica</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="cursos de idioma" name="p_curso17" @if($parte6 != '') {{($parte6->p_curso17 == 'cursos de idioma' ? 'checked="checked"' : '')}} @endif  class="17_pcd_limpa_1 17_pcd_limpa"> cursos de idioma</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="capacitação para o trabalho" name="p_cap17" @if($parte6 != '') {{($parte6->p_cap17 == 'capacitação para o trabalho' ? 'checked="checked"' : '')}} @endif  class="17_pcd_limpa_1 17_pcd_limpa"> capacitação para o trabalho</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="bolsa permanência na universidade" name="p_bol17" @if($parte6 != '') {{($parte6->p_bol17 == 'bolsa permanência na universidade' ? 'checked="checked"' : '')}} @endif  class="17_pcd_limpa_1 17_pcd_limpa">  bolsa permanência na universidade</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" value="Outros" name="p_out17" id="17_1_outro_pcd" @if($parte6 != '') {{($parte6->p_out17 == 'Outros' ? 'checked="checked"' : '')}} @endif  class="17_pcd_limpa_1 17_pcd_limpa"> Outros</label>
                                                </div>
                                                
                                                @if($parte6 != '')
                                                @if($parte6->p_out17 != '')
                                                <div class="col-md-12 17_1_outro_pcd" style="margin-left: 3%;">
                                                @else
                                                <div class="col-md-12 17_1_outro_pcd" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="col-md-12 17_1_outro_pcd" style="margin-left: 3%; display:none;">
                                                @endif 
                                                
                                                        <label for="obs" class="control-label">*Especifique </label>
                                                        <textarea name="p_especi17" id="17_4_5_pcd" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->p_especi17}}  @endif</textarea>
                                                        <div class="help-block with-errors"></div>
                                                </div>

                                            </div>
                                        </div>

                                             <!--####################################################OUTROS#########################################-->
                                             <div class="form-row">
                                                <div class=" col-md-12">
                                                    <label><input type="checkbox" id="17_outro_ult" value="outro17camp" name="outro17camp" @if($parte6 != '') {{($parte6->outro17camp == 'outro17camp' ? 'checked="checked"' : '')}} @endif class=""> Outro</label>
                                                </div>
                                             </div>

                                            <div class="form-grupo form-group col-md-12">

                                                @if($parte6 != '')
                                                @if($parte6->outro17camp != '')
                                                <div class="col-md-12 17_outro_ult" style="margin-left: 3%;">
                                                @else
                                                <div class="col-md-12 17_outro_ult" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="col-md-12 17_outro_ult" style="margin-left: 3%; display:none;">
                                                @endif 
                                                
                                                        <label for="obs" class="control-label">*Especifique </label>
                                                        <textarea name="outro_campo17" id="17_esp_out_ult" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte6 != '') {{$parte6->outro_campo17}}  @endif</textarea>
                                                        <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                             













                                            <!--18.0-->
                                          <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*18.	O banco já desenvolveu campanhas de comunicação externa no campo da diversidade?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="18_1" name="ca_18_1" id="18_nao"  @if($parte7 != '') {{($parte7->ca_18_1 == '18_1' ? 'checked="checked"' : '')}} @endif  class=""> Não, o banco não desenvolveu campanhas de comunicação externa no campo da diversidade</label>
                                            </div>

                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="18_2" name="ca_18_2" @if($parte7 != '') {{($parte7->ca_18_2 == '18_2' ? 'checked="checked"' : '')}} @endif class="18_campanha unicheck"> sim, com forte representatividade de pessoas negras</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="18_3" name="ca_18_3" @if($parte7 != '') {{($parte7->ca_18_3 == '18_3' ? 'checked="checked"' : '')}} @endif class="18_campanha unicheck"> sim, com forte representatividade de mulheres</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="18_4" name="ca_18_4" @if($parte7 != '') {{($parte7->ca_18_4 == '18_4' ? 'checked="checked"' : '')}} @endif class="18_campanha unicheck"> sim, com forte representatividade de pessoas com deficiência</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="18_5" name="ca_18_5" @if($parte7 != '') {{($parte7->ca_18_5 == '18_5' ? 'checked="checked"' : '')}} @endif class="18_campanha unicheck"> sim, com forte representatividade de pessoas LGBTQIA+</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="checkbox" value="18_6" id="18_outra" name="ca_18_6" @if($parte7 != '') {{($parte7->ca_18_6 == '18_6' ? 'checked="checked"' : '')}} @endif class="4_limpa unicheck"> sim, com forte representatividade de pessoas de outros grupos minorizados</label>
                                            </div>
                                        </div>

                                        @if($parte7 != '')
                                                @if($parte7->ca_18_6 == '18_6')
                                                <div class="form-row 18especifique" style="margin-left: 3%;">
                                                @else
                                                <div class="form-row 18especifique" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="form-row 18especifique" style="margin-left: 3%; display:none;">
                                                @endif 
                                           
                                                <div class="form-grupo form-group col-md-11">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="outroes18" id="18especifique" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado"> @if($parte7 != '') {{$parte7->outroes18}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                               <!--19.0-->
                                          <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*19.	O banco já desenvolveu ações focadas em diversidade junto aos seus fornecedores?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="0" name="banco19" @if($parte7 != '') {{($parte7->banco19 == '0' ? 'checked="checked"' : '')}} @endif class="19_campanha"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="1" id="19_outra" name="banco19"  @if($parte7 != '') {{($parte7->banco19 == '1' ? 'checked="checked"' : '')}} @endif class=""> Sim</label>
                                            </div>
                                        </div>

                                           @if($parte7 != '')
                                                @if($parte7->banco19 == '1')
                                                <div class="form-row 19especifique" style="margin-left: 3%;">
                                                @else
                                                <div class="form-row 19especifique" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="form-row 19especifique" style="margin-left: 3%; display:none;">
                                                @endif 
                                            
                                                <div class="form-grupo form-group col-md-11">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="especifique19" id="19especifique" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado"> @if($parte7 != '') {{$parte7->especifique19}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                                 <!--20.0-->
                                          <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*20.	O banco já desenvolveu ações focadas em diversidade junto aos seus clientes?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="0" name="cliente20" @if($parte7 != '') {{($parte7->cliente20 == '0' ? 'checked="checked"' : '')}} @endif  class="20_campanha"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="1" id="20_outra" name="cliente20" @if($parte7 != '') {{($parte7->cliente20 == '1' ? 'checked="checked"' : '')}} @endif  class=""> Sim</label>
                                            </div>
                                        </div>

                                         @if($parte7 == '1')
                                                @if($parte7->cliente20 == '1')
                                                <div class="form-row 20especifique" style="margin-left: 3%;">
                                                @else
                                                <div class="form-row 20especifique" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="form-row 20especifique" style="margin-left: 3%; display:none;">
                                                @endif 
                                            
                                                <div class="form-grupo form-group col-md-11">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="especifique20" id="20especifique" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado"> @if($parte7 != '') {{$parte7->especifique20}}  @endif </textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <!--21.0-->
                                          <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*21. A alta liderança do banco tem metas relacionadas à diversidade?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="0" name="campanhas21" @if($parte7 != '') {{($parte7->campanhas21 == '0' ? 'checked="checked"' : '')}} @endif class="21_campanha"> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="1" id="21_outra" name="campanhas21" @if($parte7 != '') {{($parte7->campanhas21 == '1' ? 'checked="checked"' : '')}} @endif class=""> Sim</label>
                                            </div>
                                        </div>

                                                @if($parte7 == '1')
                                                @if($parte7->campanhas21 == '1')
                                                <div class="form-row 21especifique" style="margin-left: 3%;">
                                                @else
                                                <div class="form-row 21especifique" style="margin-left: 3%; display:none;">
                                                @endif
                                                @else
                                                <div class="form-row 21especifique" style="margin-left: 3%; display:none;">
                                                @endif 
                                            
                                                <div class="form-grupo form-group col-md-11">
                                                    <label for="obs" class="control-label">*Especifique </label>
                                                    <textarea name="especifique21" id="21especifique" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte7 != '') {{$parte7->especifique21}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        <!--22.0-->
                                        <div class="form-row">
                                              <h3 class="edicao">*22.0 Frente aos desafios do tema, o banco possui um plano de ações de curto, médio e longo prazos?</h3>
                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">*Curto prazo: até dois anos</label>
                                                <textarea rows="3" name="desafio22" id="" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado" required>@if($parte7 != '') {{$parte7->desafio22}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">*Médio prazo: até cinco anos</label>
                                                <textarea rows="3"  name="medio22" id="" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado" required>@if($parte7 != '') {{$parte7->medio22}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">*Longo prazo: até dez anos</label>
                                                <textarea rows="3"  name="longo22" id="" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado" required>@if($parte7 != '') {{$parte7->longo22}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                          <!--23.0-->
                                          <div class="form-row">
                                              <h3 class="edicao">23.	De que modo o banco mede o desafio de implementação de práticas voltadas à promoção da diversidade?</h3>
                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">equidade racial</label>
                                                <textarea rows="3" name="equidade23" id="" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte7 != '') {{$parte7->equidade23}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">equidade de gênero</label>
                                                <textarea rows="3"  name="genero23" id="" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte7 != '') {{$parte7->genero23}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">inclusão de profissionais com deficiência</label>
                                                <textarea rows="3"  name="deficiente23" id="" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte7 != '') {{$parte7->deficiente23}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">inclusão de pessoas LGBTQIA+</label>
                                                <textarea rows="3"  name="lgbt23" id="" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte7 != '') {{$parte7->lgbt23}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-grupo form-group col-md-12">
                                                <label for="obs" class="control-label">Outros grupos</label>
                                                <textarea rows="3"  name="outros23" id="" class="form-control campos_form" maxlength="1000" placeholder="Você pode digitar até 1000 caracteres" data-error="Esse campo deve ser informado">@if($parte7 != '') {{$parte7->outros23}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>


                                             <div class="form-grupo form-group col-md-3" style="margin-top:3%; margin-bottom: 2%;">
                                                <label for="obs" class="control-label">Anexar arquivo</label>
                                                <input type="file" name="img_file" id="anexo_arq" class="btn  " style="background-color: #D3D3D3;">
                                            </div>

                                            
                                            <div class="form-grupo form-group col-md-3 mostra_up" style="margin-top:3%; margin-bottom: 2%; display:none">
                                                <label for="obs" class="control-label">Upload</label>
                                                <button title="Upload" id="btn_cad_s_modal" name="btn_salvar_cont" value="salvar" class="btn  btn-participar" style="background-color: #1E90FF;">Fazer upload <i class="fa fa-upload" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                      

                                        <br />
                                        <div class="form-row">
                                            <div class="form-grupo form-group">                                               
                                                <a title="...Voltar" href="{{('\aplicacao/sequencia5')}}" class="btn  btn-participar class_btn_som"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                                <!-- <button style="display:none;" title="Cadastrar" data-toggle="modal" data-target="#idModal" id="btn_cad_com_modal" name="btn_abcham" class="btn  btn-participar">Salvar</button> -->
                                            </div>
                                            <div class="form-grupo form-group btn_continuar">                                               
                                                <button title="Continuar..." id="btn_enviarefinalizar" name="btn_abcham" class="btn  btn-participar" style="background-color: #d39e00;">Enviar e Finalizar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                                </div>
                                                <div class="form-grupo btn_salvar">  
                                                <button title="Continuar..." id="btn_cad_s_modal" name="btn_salvar_cont" value="salvar" class="btn  btn-participar" style="background-color: #17a2b8;">Salvar e continuar depois <i class="fa fa-check" aria-hidden="true"></i></button>
                                            </div>
                                            </div>   
                                </form>
                                @php 
                                $quant_an = count($anexos);
                                @endphp
                                @if($quant_an >= 1)
                               
                                     <div class="row">
                                                <div class="form-grupo form-group col-xl-12 col-lg-12 col-md-12">
                                                        <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Arquivo</th>
                                                                <th>Ação</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($anexos as $anexo)
                                                                <tr>
                                                                    <th>{{$anexo->nome_original}}</th>
                                                                    <th>
                                                                     <form style="display: inline-block;margin: 0;padding: 0;border: 0; height: 20px;" method="POST" action="{{('\aplicacao/deleteanexo')}}" title="Sair da lista de espera" onsubmit="return confirm('Realmente deseja excluir esse anexo?')">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" value="{{$anexo->id}}" name="id_anexo">    
                                                                            <button style="margin-top:-10%;" title="Excluir" type="submit" class="btn btn-min btn-xs btn-danger" >
                                                                                <a> Excluir <i class="fa fa-trash-o"></i></a>
                                                                            </button>
                                                                        </form>

                                                                    </th>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endif
                                         </div>
                                    </div>
                                 </div>
                               </div>
                            </div>
                   
                        </div>


                    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
var segundos = 2; //3segundos
      document.getElementById('anexo_arq').addEventListener('click', function(){
        setTimeout(function(){
        //document.getElementById('btn_cad_s_modal').click();
        $(".mostra_up").css("display", "block");
        }, segundos*1000)
         //document.getElementById('btn_anexo_up').click();
      });
/*
      function saveImages()
      {
         $('#formImage').ajaxSubmit({
            url  : 'multiple-upload-ajax.php',
            type : 'POST'
         });
      }
      */
   </script>



 <script>
 function validateForm() {
   var ok = validateName();
   if (ok) {
      ok = validateEmail();
   }

   return true;
} 

$('#anexo_arq').click(function(){
   
    //$('#btn_anexo_up').attr('disabled', false);
    //$(".mostra_up").style.display = block;
   // $(".mostra_up").css("display", "block");
});
 //btn
//  $('#btn_enviarefinalizar').click(function(){
//      alert('Realmente deseja encerrar ?');
//  })
//#################################################### NÃO #########################################
    /*<!--17.0-->*/
    $( "#nao17" ).click(function(){
             if($("#nao17").is(':checked') ){
                 $(".3sim").attr('checked', false);  //limpa os checks
                 $(".17_outro_ult").fadeOut(300);
                 $("#17_esp_out_ult").attr('required', false);

                $("#17pcd").attr('checked', false); 
                $("#17lgbt").attr('checked', false); 
                $("#17genero").attr('checked', false); 
                $("#17_cor_raca").attr('checked', false);  




                //PCD
                $("#17_3_5_pcd").val('');
                $("#17_3_5_pcd").attr('required', false);
                //$(".17_1_outro_pcd").fadeOut(200);
                //$(".17_pcd").fadeOut(200);
                //$(".17_1_outro_pcd").fadeOut(200);
                //$("#17_4_5_pcd").val('');
                $(".17_pcd_limpa_1").attr('checked', false);  //limpa os checks
                                
                $(".17pcd").fadeOut(200);
                $("#17_4_1").val('');
                $("#17_4_2_1").val('');
                $("#17_4_3_1").val('');
                $("#17_4_4").val('');
                $("#17_4_5_pcd").val('');
                $(".17_pcd_limpa").attr('checked', false);  //limpa os checks
                $(".17_pcd").fadeOut(200);
                $(".17_1_outro_pcd").fadeOut(200);
                $(".17_1_outro_gen_pcd").fadeOut(200);


                //LBGT
                $(".17_1_outro_lgbt").fadeOut(200);
                $("#17_4_5").attr('required', false);
                //$("#17_4_5").val('');
                //$(".17_lgbt").fadeOut(200);
                //$(".17_1_outro_lgbt").fadeOut(200);
                $("#17_3_5").val('');
                $(".17_lgbt_limpa_1").attr('checked', false);  //limpa os checks

                $(".17lgbt").fadeOut(200);
                $("#17_3_1").val('');
                $("#17_3_2_1").val('');
                $("#17_3_3").val('');
                $("#17_3_4").val('');
                $("#17_4_5").val('');
                $(".17_lgbt_limpa").attr('checked', false);  //limpa os checks
                $(".17_lgbt").fadeOut(200);
                $(".17_1_outro_lgbt").fadeOut(200);
                $(".17_1_outro_gen").fadeOut(200);	


                //GENERO
                $(".17_1_outro_gen").fadeOut(200);
                $("#17_6_5").attr('required', false);
                //$("#17_6_5").val('');
                //$(".17_apoio_gen_2").fadeOut(200);
                //$(".17_1_outro_gen").fadeOut(200);
                //$("#17_6_5").val('');
                $(".17_apoio_limpa").attr('checked', false);  //limpa os checks		

                $(".17genero").fadeOut(200);
                $("#17_2_1").val('');
                $("#17_3_2").val('');
                $("#17_4_3").val('');
                $("#17_5_4").val('');
                $("#17_6_5").val('');
                $(".17_apoio_gen").attr('checked', false);  //limpa os checks
                $(".17_apoio_gen_2").fadeOut(200);
                $(".17_apoio_proj_8").fadeOut(200);
                $(".17_1_outro_gen").fadeOut(200);


                //RACACOR
                $(".17_1_outro").fadeOut(200);
                $("#17_6").attr('required', false);
                //$("#17_6").val('');
                //$(".17_apoio_proj").fadeOut(200);
                //$(".17_1_outro").fadeOut(200);
                //$("#17_6").val('');
                $(".17_apoio_sub").attr('checked', false);  //limpa os checks

                $(".17diversidade").fadeOut(200);
                $("#17_2").val('');
                $("#17_3").val('');
                $("#17_4").val('');
                $("#17_5").val('');
                $("#17_6").val('');
                $(".17_apoio").attr('checked', false);  //limpa os checks
                $(".17_1_outro").fadeOut(200);
                $(".17_apoio_proj").fadeOut(200);
                $("#17_outro_ult").attr('checked', false);  //limpa os checks
                
             }else{

             }
        }); 






 //#################################################### RACACOR #########################################
    /*<!--17.0-->*/
    $( "#17_cor_raca" ).click(function(){
             if($("#17_cor_raca").is(':checked') ){
                 $(".17diversidade").fadeIn(300);
                 $(".nao17").attr('checked', false);
             }else{
                $(".17diversidade").fadeOut(200);
                $("#17_2").val('');
                $("#17_3").val('');
                $("#17_4").val('');
                $("#17_5").val('');
                $("#17_6").val('');
                $(".17_apoio").attr('checked', false);  //limpa os checks
                $(".17_1_outro").fadeOut(200);
                $(".17_apoio_proj").fadeOut(200);
             }
        }); 
   /*<!--17.Apoio###################################-->*/
    $("#17_apoio_proj").click(function(){
             if($("#17_apoio_proj").is(':checked') ){
                 $(".17_apoio_proj").fadeIn(300);
             }else{
                $(".17_apoio_proj").fadeOut(200);
                $(".17_1_outro").fadeOut(200);
                $("#17_6").val('');
                $(".17_apoio_sub").attr('checked', false);  //limpa os checks
             }
        }); 
        /*<!--17.Outro###################################-->*/
    $("#17_1_outro").click(function(){
             if($("#17_1_outro").is(':checked') ){
                 $(".17_1_outro").fadeIn(300);
                 $("#17_6").attr('required', true);
             }else{
                $(".17_1_outro").fadeOut(200);
                 $("#17_6").attr('required', false);
                $("#17_6").val('');
             }
        }); 
        
//#################################################### GENERO #########################################
    /*<!--17.0-->*/
    $( "#17genero" ).click(function(){
             if($("#17genero").is(':checked') ){
                 $(".17genero").fadeIn(300);
                 $(".nao17").attr('checked', false);
             }else{
                $(".17genero").fadeOut(200);
                $("#17_2_1").val('');
                $("#17_3_2").val('');
                $("#17_4_3").val('');
                $("#17_5_4").val('');
                $("#17_6_5").val('');
                $(".17_apoio_gen").attr('checked', false);  //limpa os checks
                $(".17_apoio_gen_2").fadeOut(200);
                $(".17_apoio_proj_8").fadeOut(200);
                $(".17_1_outro_gen").fadeOut(200);
             }
        }); 
   /*<!--17.Apoio###################################-->*/
    $("#17_apoio_gen").click(function(){
             if($("#17_apoio_gen").is(':checked') ){
                 $(".17_apoio_gen_2").fadeIn(300);
             }else{
                $(".17_apoio_gen_2").fadeOut(200);
                $(".17_1_outro_gen").fadeOut(200);
                $("#17_6_5").val('');
                $(".17_apoio_limpa").attr('checked', false);  //limpa os checks
             }
        }); 
        /*<!--17.Outro###################################-->*/
    $("#17_1_outro_gen").click(function(){
             if($("#17_1_outro_gen").is(':checked') ){
                 $(".17_1_outro_gen").fadeIn(300);
                 $("#17_6_5").attr('required', true);
             }else{
                $(".17_1_outro_gen").fadeOut(200);
                 $("#17_6_5").attr('required', false);
                $("#17_6_5").val('');
             }
        }); 
        
        //#################################################### LGBT #########################################
    /*<!--17.0-->*/
    $("#17lgbt").click(function(){
             if($("#17lgbt").is(':checked') ){
                 $(".17lgbt").fadeIn(300);
                 $(".nao17").attr('checked', false);
             }else{
                $(".17lgbt").fadeOut(200);
                $("#17_3_1").val('');
                $("#17_3_2_1").val('');
                $("#17_3_3").val('');
                $("#17_3_4").val('');
                $("#17_4_5").val('');
                $(".17_lgbt_limpa").attr('checked', false);  //limpa os checks
                $(".17_lgbt").fadeOut(200);
                $(".17_1_outro_lgbt").fadeOut(200);
                $(".17_1_outro_gen").fadeOut(200);
             }
        }); 
   /*<!--17.Apoio###################################-->*/
    $("#17_lgbt").click(function(){
             if($("#17_lgbt").is(':checked')){
                 $(".17_lgbt").fadeIn(300);
             }else{
                $(".17_lgbt").fadeOut(200);
                $(".17_1_outro_lgbt").fadeOut(200);
                $("#17_4_5").val('');
                $(".17_lgbt_limpa_1").attr('checked', false);  //limpa os checks
             }
        }); 
        /*<!--17.Outro###################################-->*/
    $("#17_1_outro_lgbt").click(function(){
             if($("#17_1_outro_lgbt").is(':checked') ){
                 $(".17_1_outro_lgbt").fadeIn(300);
                 $("#17_4_5").attr('required', true);
             }else{
                $(".17_1_outro_lgbt").fadeOut(200);
                 $("#17_4_5").attr('required', false);
                $("#17_4_5").val('');
             }
        }); 

//#################################################### PCD #########################################
    /*<!--17.0-->*/
    $("#17pcd").click(function(){
             if($("#17pcd").is(':checked') ){
                 $(".17pcd").fadeIn(300);
                 $(".nao17").attr('checked', false);
             }else{
                $(".17pcd").fadeOut(200);
                $("#17_4_1").val('');
                $("#17_4_2_1").val('');
                $("#17_4_3_1").val('');
                $("#17_4_4").val('');
                $("#17_4_5_pcd").val('');
                $(".17_pcd_limpa").attr('checked', false);  //limpa os checks
                $(".17_pcd").fadeOut(200);
                $(".17_1_outro_pcd").fadeOut(200);
                $(".17_1_outro_gen_pcd").fadeOut(200);
             }
        }); 
   /*<!--17.Apoio###################################-->*/
    $("#17_pcd").click(function(){
             if($("#17_pcd").is(':checked')){
                 $(".17_pcd").fadeIn(300);
             }else{
                $(".17_pcd").fadeOut(200);
                $(".17_1_outro_pcd").fadeOut(200);
                $("#17_4_5_pcd").val('');
                $(".17_pcd_limpa_1").attr('checked', false);  //limpa os checks
             }
        }); 
        /*<!--17.Outro###################################-->*/
    $("#17_1_outro_pcd").click(function(){
             if($("#17_1_outro_pcd").is(':checked') ){
                 $(".17_1_outro_pcd").fadeIn(300);
                 $("#17_3_5_pcd").attr('required', true);
             }else{
                $(".17_1_outro_pcd").fadeOut(200);
                 $("#17_3_5_pcd").attr('required', false);
                $("#17_3_5_pcd").val('');
             }
        }); 
        
//#################################################### OUTRO #########################################
        $("#17_outro_ult").click(function(){
             if($("#17_outro_ult").is(':checked') ){
                $(".nao17").attr('checked', false);
                 $(".17_outro_ult").fadeIn(300);
                 $("#17_esp_out_ult").attr('required', true);

                $("#17pcd").attr('checked', false); 
                $("#17lgbt").attr('checked', false); 
                $("#17genero").attr('checked', false); 
                $("#17_cor_raca").attr('checked', false);  




                //PCD
                $("#17_3_5_pcd").val('');
                $("#17_3_5_pcd").attr('required', false);
                //$(".17_1_outro_pcd").fadeOut(200);
                //$(".17_pcd").fadeOut(200);
                //$(".17_1_outro_pcd").fadeOut(200);
                //$("#17_4_5_pcd").val('');
                $(".17_pcd_limpa_1").attr('checked', false);  //limpa os checks
                                
                $(".17pcd").fadeOut(200);
                $("#17_4_1").val('');
                $("#17_4_2_1").val('');
                $("#17_4_3_1").val('');
                $("#17_4_4").val('');
                $("#17_4_5_pcd").val('');
                $(".17_pcd_limpa").attr('checked', false);  //limpa os checks
                $(".17_pcd").fadeOut(200);
                $(".17_1_outro_pcd").fadeOut(200);
                $(".17_1_outro_gen_pcd").fadeOut(200);


                //LBGT
                $(".17_1_outro_lgbt").fadeOut(200);
                $("#17_4_5").attr('required', false);
                //$("#17_4_5").val('');
                //$(".17_lgbt").fadeOut(200);
                //$(".17_1_outro_lgbt").fadeOut(200);
                $("#17_3_5").val('');
                $(".17_lgbt_limpa_1").attr('checked', false);  //limpa os checks

                $(".17lgbt").fadeOut(200);
                $("#17_3_1").val('');
                $("#17_3_2_1").val('');
                $("#17_3_3").val('');
                $("#17_3_4").val('');
                $("#17_4_5").val('');
                $(".17_lgbt_limpa").attr('checked', false);  //limpa os checks
                $(".17_lgbt").fadeOut(200);
                $(".17_1_outro_lgbt").fadeOut(200);
                $(".17_1_outro_gen").fadeOut(200);	


                //GENERO
                $(".17_1_outro_gen").fadeOut(200);
                $("#17_6_5").attr('required', false);
                //$("#17_6_5").val('');
                //$(".17_apoio_gen_2").fadeOut(200);
                //$(".17_1_outro_gen").fadeOut(200);
                //$("#17_6_5").val('');
                $(".17_apoio_limpa").attr('checked', false);  //limpa os checks		

                $(".17genero").fadeOut(200);
                $("#17_2_1").val('');
                $("#17_3_2").val('');
                $("#17_4_3").val('');
                $("#17_5_4").val('');
                $("#17_6_5").val('');
                $(".17_apoio_gen").attr('checked', false);  //limpa os checks
                $(".17_apoio_gen_2").fadeOut(200);
                $(".17_apoio_proj_8").fadeOut(200);
                $(".17_1_outro_gen").fadeOut(200);


                //RACACOR
                $(".17_1_outro").fadeOut(200);
                $("#17_6").attr('required', false);
                //$("#17_6").val('');
                //$(".17_apoio_proj").fadeOut(200);
                //$(".17_1_outro").fadeOut(200);
                //$("#17_6").val('');
                $(".17_apoio_sub").attr('checked', false);  //limpa os checks

                $(".17diversidade").fadeOut(200);
                $("#17_2").val('');
                $("#17_3").val('');
                $("#17_4").val('');
                $("#17_5").val('');
                $("#17_6").val('');
                $(".17_apoio").attr('checked', false);  //limpa os checks
                $(".17_1_outro").fadeOut(200);
                $(".17_apoio_proj").fadeOut(200);
             }else{
                $(".17_outro_ult").fadeOut(200);
                 $("#17_esp_out_ult").attr('required', false);
                $("#17_esp_out_ult").val('');
             }
        }); 






//######################################################Outro #################################################

   <!--18.0-->
    $("#18_outra").click(function(){
             if($("#18_outra").is(':checked') ){
                $(".18especifique").fadeIn(300);
                $("#18especifique").attr('required', true);
             }else{
                $(".18especifique").fadeOut(300);
                $("#18especifique").attr('required', false);
                $("#18especifique").val('');

             }
        });


     $("#18_nao").click(function(){
             if($("#18_nao").is(':checked') ){
                $(".unicheck").attr('checked', false);
                $(".18especifique").fadeOut(200);
                $("#18especifique").attr('required', false);
                $("#18especifique").val('');

             }else{

             }
        });

   
     $('.18_campanha').click(function(){
        $("#18_nao").attr('checked', false);
        //$(".18especifique").fadeOut(200);
       // $("#18especifique").attr('required', false);
       // $("#18especifique").val('');
     });
     <!--19.0-->
 $('#19_outra').click(function(){
        $(".19especifique").fadeIn(300);
        $("#19especifique").attr('required', true);
     });
   
     $('.19_campanha').click(function(){
        $(".19especifique").fadeOut(200);
        $("#19especifique").attr('required', false);
        $("#19especifique").val('');
     });

  <!--20.0-->
  $('#20_outra').click(function(){
        $(".20especifique").fadeIn(300);
        $("#20especifique").attr('required', true);
     });
   
     $('.20_campanha').click(function(){
        $(".20especifique").fadeOut(200);
        $("#20especifique").attr('required', false);
        $("#20especifique").val('');
     });

      <!--21.0-->
  $('#21_outra').click(function(){
        $(".21especifique").fadeIn(300);
        $("#21especifique").attr('required', true);
     });
   
     $('.21_campanha').click(function(){
        $(".21especifique").fadeOut(200);
        $("#21especifique").attr('required', false);
        $("#21especifique").val('');
     });
 

    //    $( "#4_outra" ).click(function(){

    //         if($("#4_outra").is(':checked') ){
    //             $(".4especifique").fadeIn(300);
    //             $("#4especifique").attr('required', true);
    //         }else{
    //             $(".4especifique").fadeOut(200);
    //             $("#4especifique").attr('required', false);
    //             $("#4especifique").val('');
    //         }
    //    });
</script> 


<script>
function validaQuestao6() {
	
	nomeDoFormulario = document.frm_home6;
	
	if (nomeDoFormulario.racacor17.checked == false && 
        nomeDoFormulario.genero17.checked == false && 
        nomeDoFormulario.lgbt17.checked == false && 
        nomeDoFormulario.pcd17.checked == false && 
        nomeDoFormulario.outro17camp.checked == false &&
        nomeDoFormulario.nao17.checked == false)
	{
		alert("Pelo menos um item deve ser escolhido na questão 17");
		return false;
	}
	return true;	
}
</script>
@endsection