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

                            <div class="row" style="margin-left:20%;">
                                 <div class="form-grupo col-md-4">
                                    <label for="nome" class="control-label">Nome:</label>
                                    <input  name="cliente" value="{{$user->name}}" class="form-control campos_form" readonly>
                                </div>
                            </div>


                                <div class="col-md-6" id="termoout" style="margin-left:20%;margin-top:5%;">
                                        <div class="card"  style="margin-top: 1%;">
                                            <div class="card-body">
                                            <span style="font-size:14px;">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </span>
                                            <br />
                                            <br />
                                            <label><input type="checkbox" id="chtermo" value="2"><b> De acordo e ciente com a cessão de informações para análise do CEERT no contexto do Programa de Valorização da Diversidade do Itaú Social</b></label>
                                            <br />
                                            <span id="divAlert" style="display:none; color: #FF0000; margin-bottom: 10px;">
                                                Atenção, é necessário está de acordo para continuar!
                                            </span>

                                            <form action="{{('\portal/aceito_termo')}}" method="post" enctype="multipart/form-data" id="" name="" data-toggle="validator" role="form">
                                            {{ csrf_field()}}
                                            <button disabled class="btn btn-success" id="btn_termo" title="Continuar"><i class="fa fa-check" aria-hidden="true"></i> Continuar</button>
                                            </form>
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

       $( "#chtermo" ).click(function(){

         if($("#chtermo").is(':checked') ){
             $("#btn_termo").attr('disabled', false);
             $("#divAlert").fadeOut(500);
         }else{
        $("#btn_termo").attr('disabled', true);
        $("#divAlert").fadeIn(1000);
        //alert('Atenção é necessário aceitar o termo para continuar!')
         }
    });
</script> 
@endsection