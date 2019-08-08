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
            <h1>Instrumento de coleta de prática de diversidade nos bancos</h1>
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
                                    <label for="nome" class="control-label">Instituição:</label>
                                    <input  name="cliente" value="{{$cliente[0]->cli_nome}}" class="form-control campos_form" readonly>
                                </div>
                                <div class="form-grupo col-md-3">
                                    <label for="nome" class="control-label">Número de funcionários:</label>
                                    <input  name="func" value="{{$cliente[0]->cli_qtdFuncionarios}}" class="form-control campos_form" readonly>
                                </div>
                            </div>


                                <div class="col-md-6" id="termoout" style="margin-left:20%;margin-top:5%;">
                                        <div class="card"  style="margin-top: 1%;">
                                            <div class="card-body">
                                            <br />
                                            <label>
                                            Agradecemos sua participação.<br />
                                            <b  style="color: #bd2130">Atenção, ao clicar em "finalizar" o seu acesso será encerrado. Deseja finalizar? </b></label>
                                            <br />

                                            <form action="{{('\aplicacao/encerramento')}}" method="post" enctype="multipart/form-data" id="" name="" data-toggle="validator" role="form">
                                            {{ csrf_field()}}
                                            <a title="...Voltar" href="{{('\aplicacao/sequencia6')}}" class="btn  btn-participar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                            <button class="btn btn-warning" id="btn_termo" title="Finalizar"><i class="fa fa-check" aria-hidden="true"></i> Finalizar</button>
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
@endsection