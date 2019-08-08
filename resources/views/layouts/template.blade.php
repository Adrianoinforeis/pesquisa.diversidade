<!DOCTYPE html>
<html>

    <head>
        <title>Artigo & Pesquisa</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
        <meta http-equiv=”content-type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Eventos do CEERT">
        <meta name="author" content="Adriano Reis">
        <link rel="shortcut icon" href="{{URL::asset('img/logo-ceert-st.png')}}" class="img-circle img-responsive" style="border-radius: 10px;" type="image/png">
        <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_interno.css')}}">
        <!-- <link rel="stylesheet" type="text/css" href="css/perfil.css"> -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/perfil.css')}}">
        <!--modal processando
        <script src="{{URL::asset('js/jquery-1.10.2.min.js')}}"></script>
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
-->
<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>     
<script src="{{URL::asset('js/jquery.mask.js')}}"></script>     
<script src="{{URL::asset('js/jquery.mask.min.js')}}"></script>     

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

        <link href="{{URL::asset('css/grade-impressao.css')}}" rel="stylesheet">

        <!-BOOTSTRAP->
        <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('config_login/css/bootstrap.css')}}"> -->

        <!-FONTS AWESOME->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


        <!--table-->
        <!--        <link rel="stylesheet" href="table/css/bootstrap.css">-->
        <link href="{{URL::asset('css/grade-impressao.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('table/css/dataTables.bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('table/font-awesome/css/font-awesome.css')}}">
        <!--Javascript-->    
       <!-- <script src="assets/table/js/jquery-1.10.2.js"></script>-->
        <script src="{{URL::asset('table/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('table/js/dataTables.bootstrap.min.js')}}"></script>          
        <script src="{{URL::asset('table/js/bootstrap.js')}}"></script>
        <!--$_SERVER['REQUEST_URI'] != '/Intranet/incluir_evento' && -->
        @if($_SERVER['REQUEST_URI'] != '/Intranet/todos_inscritos' && $_SERVER['REQUEST_URI'] != '/Intranet/lista_de_espera' && $_SERVER['REQUEST_URI'] != '/Intranet/relatorio_filtro_evento' && $_SERVER['REQUEST_URI'] != '/Intranet/inscritos' && $_SERVER['REQUEST_URI'] != '/Intranet/incluir_evento')
        <script src="{{URL::asset('table/js/lenguajeusuario.js')}}"></script>  
        @endif

      <!--  <script src="{{URL::asset('js/custom.js')}}"></script>-->




        <!--validação Aqui-->
        <script src="{{URL::asset('js/validar_campos/validator.min.js')}}"></script> 
        <script src="{{URL::asset('js/validar_campos/validator.js')}}"></script>


        <style>
            .with-errors{
                color: #FF0000;
            }
            .edicao{
                        font-weight: bold;
                    }

            .btn_continuar{
                margin-left: 20px;
            }
            .btn_salvar{
                margin-left: 50px;
            }
        </style>

    </head>

    <body>

        <!-- NAVEGACAO -->

        <section id="navegacao" class="nao-imprime">
            <div class="padding-#">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navegacao-barra">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <div class="navegacao-logo">
                                            <a href="#"><img src="{{URL::asset('img/logo_02.png')}}"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-6 col-6">
                                        <div class="navegacao-menu dentro">
                                            <ul class="nav">
                                                <h6><span>Olá <b>{{( Auth::user()->name)}}</b>, seja bem vindo(a)!</span></h6>
                                                <li class="menu-entrar myBtn_modal_sair"><a href="#modal_sair" id=""><i class="fas fa-sign-out-alt"></i>SAIR</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--FINAL NAVEGACAO-->
        <!--Menu-->

        <section id="perfil-home" class="geral">
            <div class="padding-#">
                <div class="container-fluid">
                    <div class="row">
                        <!-- NAVBAR-LEFT -->
                        <div class="col-12 col-md-3 col-lg-2 col-xl-2 sidebar-title vh width nao-imprime">
                            <div class="menu-conteudo">
                                <div class="menu-lateral">
                                    <nav class="menu-junto">
                                        <ul class="menu">
                                        @if($_SERVER['REQUEST_URI'] != '/portal/perfil' && $_SERVER['REQUEST_URI'] != '/portal/termo')
                                            <li class="menu-unico @if($_SERVER['REQUEST_URI'] == '/portal/home' || $_SERVER['REQUEST_URI'] == '/home') ativo @else inativo @endif">
                                                <a href="{{url("portal/home")}}">
                                                    <i class="fas fa-home" style="color: #fff;"></i>
                                                    <h6 style="color: #fff;">HOME</h6>
                                                </a>
                                            </li>
                                            @endif

                                            <!-- @if($_SERVER['REQUEST_URI'] != '/portal/termo')
                                            <li class="menu-unico @if($_SERVER['REQUEST_URI'] == '/portal/perfil_editar' || $_SERVER['REQUEST_URI'] == '/portal/perfil') ativo @else inativo @endif">
                                                <a href=" @if($_SERVER['REQUEST_URI'] == '/portal/perfil'){{url("portal/perfil")}} @else {{url("portal/perfil_editar")}} @endif">
                                                   <i class="fas fa-user" style="color: #fff;"></i>
                                                    <h6 style="color: #fff;">PERFIL</h6>
                                                </a>
                                            </li>
                                            @endif -->

                                            @if($_SERVER['REQUEST_URI'] != '/portal/termo')
                                            @if(Auth::user()->nivel == 5)
                                            <li class="menu-unico @if($_SERVER['REQUEST_URI'] == '/portal/incluir_user') ativo @else inativo @endif">
                                                <a href="{{url("portal/relatorio")}}">
                                                   <i class="fas fa-bar-chart" style="color: #fff;"></i>
                                                    <h6 style="color: #fff;">RELATÓRIO</h6>
                                                </a>
                                            </li>
                                            @endif
                                            @endif
                                            <li class="menu-unico">
                                                <a href="#" id="myBtn_modal_sair" class="">
                                                    <i class="fas fa-sign-out-alt" style="color: #fff;"></i>
                                                    <h6 style="color: #fff;">SAIR</h6>
                                                </a>
                                            </li>
                                              <!-- <div class="col-md-3 col-sm-6 col-6">
                                                <div class="navegacao-logo">
                                                    <a href="#">
                                                    <img style="margin-left: -18px; margin-top: 30px; width: 100px;" src="{{URL::asset('img/logo_02.png')}}">
                                                    </a>
                                                </div>
                                            </div> -->
                                        </ul>
                                        
                                    </nav>
                                </div>
                            </div>
                        </div>
                        @yield('content')

                    </div>
                </div>
            </div>
        </section>
         <!-- FINAL CONTEUDO -->

<!--Modal processando-->
<div id="idModal" class="modal fade">
<div class="modal-dialog modal-dialog-centered">
    <img src="{{URL::asset('img/loading.gif')}}" width="250px" height=""  style="margin-left: 15%; margin-top: -15%;">
 </div>
 </div>
 <!--final Modal processando-->

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" id="sair_">&times;</span>
                <div class="conteudo-texto-modal">
                    <h1>Tem certeza?</h1>
                        <a class="btn-sim" href="{{('\portal/Logout')}}" id="sair_btn">
                            {{ __('SIM') }}
                        </a>
                        <form id="logout-form" action="{{('\portal/Logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <button class="btn-nao" id="sair">NÃO</button>
                </div>
            </div>
        </div>       
        <!--modal-->

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/modal_sair.css')}}">
        <script src="{{URL::asset('js/modal_sair.js')}}"></script>
    </body>

    <script src="{{URL::asset('js/validator.js')}}"></script>
    <script src="{{URL::asset('js/validator.min.js')}}"></script>

</html>