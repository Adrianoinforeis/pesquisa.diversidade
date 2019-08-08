
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
        @php
        $bancos = count($dados);
        @endphp
            <h1 style="color: #B22222; text-transform: uppercase;">Total de bancos: {{$bancos}}</h1>
        </div>
        <!-- <div class="participando-inscricao-notificacao">
            <div class="participando-inscricao-notificacao-dentro">
                <h4>Antes de efetuar sua inscrição é necessário completar seus dados.</h4>
            </div>
        </div> -->
        @if (session()->has('success'))
        <!-- <div class="alert alert-success rem" id="rem" style="">
            <strong>Informaçao !</strong> alteração efetuada com sucesso !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
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
                            <div class="row">
                            </div>
                               
                                      
                                        @if(Auth::user()->nivel == 5)
                                            <div class="row">
                                                <div class="form-grupo form-group col-xl-12 col-lg-12 col-md-12">
                                                        <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Código</th>
                                                                <th scope="col">Banco</th>
                                                                <th>Situação/Acompanhar</th>
                                                                <th>Respondeu até</th>
                                                                <th>Iniciou</th>
                                                                <th>Término</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($dados as $dado)
                                                                <tr>
                                                                        <th>{{$dado->id_cliente}}</th>
                                                                        <td>{{$dado->cli_nome}}</td>
                                                                        <td>  
                                                                        <form action="{{('\aplicacao/acompanhamento')}}" method="post" enctype="multipart/form-data" id="" name="" data-toggle="validator" role="form">
                                                                            {{ csrf_field()}}   
                                                                            <input type="hidden"  value="{{$dado->id_cliente}}" name="id_banco">
                                                                            @if($dado->cli_situacao == 1 && $dado->cli_pagina != null)
                                                                            <button title="Em desenvolvimento" type="submit"  value="salvar" class="btn  btn-participar" style="background-color: #ffc107"> Em andamento <i class="fa fa-circle" aria-hidden="true"></i></button>
                                                                            @elseif($dado->cli_situacao == 2 && $dado->cli_pagina != null)
                                                                            <button title="Concluído" type="submit"   value="salvar" class="btn  btn-participar" > Concluído <i class="fa fa-check" aria-hidden="true"></i></button>
                                                                            @elseif($dado->cli_situacao == 0 || $dado->cli_situacao == null)
                                                                            <button title="Pendente" type="button" disabled   value="salvar" class="btn  btn-participar" style="background-color: #bd2130"> Pendente <i class="fa fa-superpowers" aria-hidden="true"></i></button>
                                                                            @else
                                                                            <button title="Em desenvolvimento" type="submit" disabled  value="salvar" class="btn  btn-participar" style="background-color: #17a2b8"> Não aceitou o termo <i class="fa fa-circle" aria-hidden="true"></i></button>
                                                                            @endif
                                                                        </form>
                                                                        </td>
                                                                        <td>@if($dado->cli_pagina != null && $dado->cli_pagina != '')Página {{$dado->cli_pagina}} @else -- @endif</td>
                                                                        <td>@if($dado->inicio != '' && $dado->inicio != null) {{date('d/m/y H:i:s', strtotime($dado->inicio))}} @endif</td>
                                                                        <td>@if($dado->termino != '' && $dado->termino != null) {{date('d/m/y H:i:s', strtotime($dado->termino))}} @endif</td>
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
                                </form>
                            </div>
                        </div>


                    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
 <script>
 //btn
//  $('#btn_enviarefinalizar').click(function(){
//      alert('Realmente deseja encerrar ?');
//  })
 //#################################################### RACACOR #########################################
    /*<!--17.0-->*/
    $( "#17_cor_raca" ).click(function(){
             if($("#17_cor_raca").is(':checked') ){
                 $(".17diversidade").fadeIn(300);
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
  $('#18_outra').click(function(){
        $(".18especifique").fadeIn(300);
        $("#18especifique").attr('required', true);
     });
   
     $('.18_campanha').click(function(){
        $(".18especifique").fadeOut(200);
        $("#18especifique").attr('required', false);
        $("#18especifique").val('');
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
@endsection