
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
                                <form action="{{('\aplicacao/sequencia3')}}" method="post" enctype="multipart/form-data" id="" name="" data-toggle="validator" role="form">
                                    {{ csrf_field()}}
                                          <div class="form-row">
                                              <h3 class="edicao">*3. O banco tem revelado interesse em trabalhar o tema de diversidade?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="sim" @if($parte2 != '') {{($parte2->interesse2 == 'sim' ? 'checked="checked"' : '')}} @endif name="interesse2" class="3sim"> Sim</label>
                                            </div>

                                            <div class=" col-md-12">
                                                <label><input type="radio" value="nao" @if($parte2 != '') {{($parte2->interesse2 == 'nao' ? 'checked="checked"' : '')}} @endif name="interesse2" class="3nao"> Não</label>
                                            </div>
                                            @if($parte2 != '')
                                            @if($parte2->interesse2 == 'nao')
                                            <div class="form-grupo form-group col-md-11" id="3especifique"  style="margin-left: 3%;">
                                            @else
                                            <div class="form-grupo form-group col-md-11" id="3especifique"  style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-grupo form-group col-md-11" id="3especifique"  style="margin-left: 3%; display:none;">
                                            @endif 
                                            
                                                <label for="obs" class="control-label">*Especifique  <small class="ca_especifique3" style="color: #E74C3C"></small> </span> </label>
                                                <textarea name="especifique3" class="form-control campos_form" maxlength="3500" placeholder="Você pode digitar até 3500 caracteres" id="3req" data-error="Esse campo deve ser informado">@if($parte2 != '') {{$parte2->especifique3}}  @endif</textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                          <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*4. O banco tem alguma área ou departamento específico de diversidade?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="sim" name="interesse4" @if($parte2 != '') {{($parte2->interesse4 == 'sim' ? 'checked="checked"' : '')}} @endif class="4sim"> Sim</label>
                                            </div>

                                            <div class=" col-md-12">
                                                <label><input type="radio" value="nao" name="interesse4" @if($parte2 != '') {{($parte2->interesse4 == 'nao' ? 'checked="checked"' : '')}} @endif class="4nao"> Não existe uma área específica mas as ações de diversidade estão inseridas na área de:  </label>
                                            </div>

                                             @if($parte2 != '')
                                            @if($parte2->interesse4 == 'nao')
                                            <div class="" id="4escolha"  style="margin-left: 3%;">
                                            @else
                                            <div class="" id="4escolha"  style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="" id="4escolha"  style="margin-left: 3%; display:none;">
                                            @endif 

                                            
                                                <div class=" col-md-12">
                                                    <label><input type="radio" value="Marketing" name="acoes4" @if($parte2 != '') {{($parte2->acoes4 == 'Marketing' ? 'checked="checked"' : '')}} @endif  class="4_oculta 4_limpa"> Marketing</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="radio" value="Recursos Humanos e gestão de pessoas" name="acoes4" @if($parte2 != '') {{($parte2->acoes4 == 'Recursos Humanos e gestão de pessoas' ? 'checked="checked"' : '')}} @endif class="4_oculta 4_limpa"> Recursos Humanos e gestão de pessoas</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="radio" value="Sustentabilidade" name="acoes4" @if($parte2 != '') {{($parte2->acoes4 == 'Sustentabilidade' ? 'checked="checked"' : '')}} @endif class="4_oculta 4_limpa"> Sustentabilidade</label>
                                                </div>
                                                <div class=" col-md-12">
                                                    <label><input type="radio" value="Outra" id="4_outra" name="acoes4" @if($parte2 != '') {{($parte2->acoes4 == 'Outra' ? 'checked="checked"' : '')}} @endif class="4_limpa"> Outra</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                            @if($parte2 != '')
                                            @if($parte2->acoes4 == 'Outra')
                                            <div class="form-row 4especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 4especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 4especifique" style="margin-left: 3%; display:none;">
                                            @endif 
                                            
                                                <div class="form-grupo form-group col-md-11" style="margin-left: 3%;">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes4" style="color: #E74C3C"></small> </span>  </label>
                                                    <textarea name="outroes4" id="4especifique" class="form-control campos_form" maxlength="3500" placeholder="Você pode digitar até 3500 caracteres" data-error="Esse campo deve ser informado">@if($parte2 != '') {{$parte2->outroes4}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                      


                                        <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*5. Qual é a governança das práticas de diversidade do banco?</h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Reporte ao presidente e/ou VP" name="governanca5" @if($parte2 != '') {{($parte2->governanca5 == 'Reporte ao presidente e/ou VP' ? 'checked="checked"' : '')}} @endif class="5gov" required> Reporte ao presidente e/ou VP</label>
                                            </div>
                                             <div class=" col-md-12">
                                                <label><input type="radio" value="Reporte ao comitê de diversidade" name="governanca5" @if($parte2 != '') {{($parte2->governanca5 == 'Reporte ao comitê de diversidade' ? 'checked="checked"' : '')}} @endif class="5gov" required> Reporte ao comitê de diversidade</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" id="5outras" value="Outras" name="governanca5" @if($parte2 != '') {{($parte2->governanca5 == 'Outras' ? 'checked="checked"' : '')}} @endif class="" required> Outras</label>
                                            </div>
                                        </div>

                                            @if($parte2 != '')
                                            @if($parte2->governanca5 == 'Outras')
                                            <div class="form-row 5especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 5especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 5especifique" style="margin-left: 3%; display:none;">
                                            @endif 
                                        
                                                <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes5" style="color: #E74C3C"></small> </span>  </label>
                                                    <textarea name="outroes5" id="5especifique" maxlength="3500" placeholder="Você pode digitar até 3500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte2 != '') {{$parte2->outroes5}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                        </div>
                                       


                                        <div class="form-row" style="margin-top:1%;">
                                              <h3 class="edicao">*6. O banco tem um comitê de diversidade? </h3>
                                            <div class=" col-md-12">
                                                <label><input type="radio" value="Sim" name="diversidade6" @if($parte2 != '') {{($parte2->diversidade6 == 'Sim' ? 'checked="checked"' : '')}} @endif class="6gov" required> Sim</label>
                                            </div>
                                             <div class=" col-md-12">
                                                <label><input type="radio" value="Não" name="diversidade6" @if($parte2 != '') {{($parte2->diversidade6 == 'Não' ? 'checked="checked"' : '')}} @endif   class="6gov" required> Não</label>
                                            </div>
                                            <div class=" col-md-12">
                                                <label><input type="radio" id="6outras" value="Outros" name="diversidade6" @if($parte2 != '') {{($parte2->diversidade6 == 'Outros' ? 'checked="checked"' : '')}} @endif  class="" required> Outros</label>
                                            </div>
                                        </div>

                                           @if($parte2 != '')
                                            @if($parte2->diversidade6 == 'Outros')
                                            <div class="form-row 6especifique" style="margin-left: 3%;">
                                            @else
                                            <div class="form-row 6especifique" style="margin-left: 3%; display:none;">
                                            @endif
                                            @else
                                            <div class="form-row 6especifique" style="margin-left: 3%; display:none;">
                                            @endif 

                                       
                                            <div class="form-grupo form-group col-md-11" style="">
                                                    <label for="obs" class="control-label">*Especifique <small class="ca_outroes6" style="color: #E74C3C"></small> </span> </label>
                                                    <textarea name="outroes6" id="6especifique" maxlength="3500" placeholder="Você pode digitar até 3500 caracteres" class="form-control campos_form" data-error="Esse campo deve ser informado">@if($parte2 != '') {{$parte2->outroes6}}  @endif</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                      


                                       
                                        <br />
                                        <div class="form-row">
                                                <div class="form-grupo form-group">                                               
                                                    <a title="...Voltar" href="{{('\aplicacao/home')}}" class="btn  btn-participar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                                    <!-- <button style="display:none;" title="Cadastrar" data-toggle="modal" data-target="#idModal" id="btn_cad_com_modal" name="btn_abcham" class="btn  btn-participar">Salvar</button> -->
                                                </div>
                                                <div class="form-grupo form-group1 btn_continuar">                                               
                                                    <button type="submit" title="Continuar..." id="btn_cad_s_modal" name="btn_abcham" class="btn  btn-participar">Continuar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                                    </div>
                                                    <div class="form-grupo form-group btn_salvar">  
                                                    <button title="Continuar..." id="btn_cad_s_modal" name="btn_salvar_cont" value="salvar" class="btn  btn-participar " style="background-color: #17a2b8;">Salvar e continuar depois <i class="fa fa-check" aria-hidden="true"></i></button>
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
        $(document).on("input", "#3req", function() {
        var limite = 3500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=especifique3]").val();
            $("textarea[name=especifique3]").val(comentario.substr(0, limite));
            $(".ca_especifique3").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_especifique3").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#4especifique", function() {
        var limite = 3500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes4]").val();
            $("textarea[name=outroes4]").val(comentario.substr(0, limite));
            $(".ca_outroes4").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes4").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#5especifique", function() {
        var limite = 3500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes5]").val();
            $("textarea[name=outroes5]").val(comentario.substr(0, limite));
            $(".ca_outroes5").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes5").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
    $(document).on("input", "#6especifique", function() {
        var limite = 3500;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=outroes6]").val();
            $("textarea[name=outroes6]").val(comentario.substr(0, limite));
            $(".ca_outroes6").text("(" + "0 " + informativo + ")");
        } else {
            $(".ca_outroes6").text("(" + caracteresRestantes + " " + informativo + ")");
        }
    });
</script>
 <script>
  $('.3nao').click(function(){
        $("#3especifique").fadeIn(300);
        $("#3req").attr('required', true);
     });
   
     $('.3sim ').click(function(){
        $("#3especifique").fadeOut(200);
        $("#3req").attr('required', false);
        $("#3req").val('');
     });


<!--4.004  -->
    $('.4sim ').click(function(){
            $("#4escolha").fadeOut(200);
            $("#4especifique").attr('required', false);
            $("#4especifique").val('');
            $(".4especifique").fadeOut(200);
            $(".4_limpa").attr('checked', false); 
    });

    $('.4nao').click(function(){
        $("#4escolha").fadeIn(300);
        //$("#3req").attr('required', true);
     });

       $( "#4_outra" ).click(function(){
            $(".4especifique").fadeIn(300);
            $("#4especifique").attr('required', true);
       });

        $( ".4_oculta" ).click(function(){
            $(".4especifique").fadeOut(300);
            $("#4especifique").attr('required', false);
            $("#4especifique").val('');
       });


               // $(".4especifique").fadeOut(200);
               // $("#4especifique").attr('required', false);
               // $("#4especifique").val('');



        $('#5outras').click(function(){
         $(".5especifique").fadeIn(300);
         $("#5especifique").attr('required', true);
         });

        $('.5gov').click(function(){
         $(".5especifique").fadeOut(200);
         $("#5especifique").attr('required', false);
         $("#5especifique").val('');
        });


         $('#6outras').click(function(){
         $(".6especifique").fadeIn(300);
         $("#6especifique").attr('required', true);
         });

        $('.6gov').click(function(){
         $(".6especifique").fadeOut(200);
         $("#6especifique").attr('required', false);
         $("#6especifique").val('');
        });
</script> 
@endsection