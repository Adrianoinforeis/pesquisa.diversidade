<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>CENSO EQUIDADE</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv=”content-type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Eventos do CEERT">
        <meta name="author" content="Adriano Reis">
        <link rel="shortcut icon" href="{{URL::asset('img/logo-ceert-st.png')}}" class="img-circle img-responsive" style="border-radius: 10px;" type="image/png">

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css_/style_index.css')}}">

        <!- BOOTSTRAP ->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css_/bootstrap.css')}}">

        <!- FONTS AWESOME ->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

        <!--painel-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <!-- NAVEGACAO -->
        <section id="navegacao">
            <div class="padding-#">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navegacao-barra">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-6">
                                        <div class="navegacao-logo">
                                            <a href="{{URL('/login')}}"><img src="{{URL::asset('img/logo_02.png')}}" height="50px" width="10px"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-6">
                                        <div class="navegacao-menu main-nav">
                                            <ul class="nav">
                                                <!-- <li class="menu-cadastrar"><a class="cd-signin" href="#0"><i class="far fa-user" aria-hidden="true"></i>Entrar</a></li>
                                                <li class="menu-entrar"><a class="cd-signup" href="#0"><i class="far fa-edit" aria-hidden="true"></i>Cadastrar</a></li> -->
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
<!--section -->

<!--Modal login -->

        <section id="sobre">
            <div class="padding-#">
                <div class="container-fluid">
                    <div class="row">
                        <!-- NAVBAR-LEFT -->
                        <div class="col-12 col-md-3 col-lg-2 col-xl-2 sidebar-title vh" style="background-color: #03b5aa;">
                            <div class="vertical-title-text absolute-text">
                                <h3>DIVERSIDADE</h3>
                            </div>
                        </div>
                        <!-- BLOCOS -->
                        <div class="col-sm-12 col-12 col-md-9 col-xl-10 col-lg-10" style="background-image: url(https://aplicacao.diversidade.org.br/img/bg-diverisdade.jpg);background-repeat: no-repeat;
    background-position: top;">
                            <div class="bloco-total">
                                <div class="row">  
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card"  style="margin-top: 20%;">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="email" class="col-md-12 text-center">
                                                    <a href="\portais/home"><img src="{{URL::asset('img/Logo_FEBRABAN_AS_azul_RGB.jpg')}}" class="img-fluid" style="width: 150px; height: auto;"></a>
                                                    <h3>Instrumento de coleta de práticas de diversidade nos bancos</h3>
                                                        @if (session()->has('success'))
                                                        <div class="alert alert-danger rem col-md-8" id="rem" style="margin-left: 30%; margin-bottom: -3%;">
                                                            <strong>Atenção !</strong> o seu questionário já foi concluído !
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
                                                    </label>
                                               
                                                    </div>
                                                    <hr style="background-color: #f8f8f8; height:1px">
                                                    @if(Session::has('error'))
                                                        <div class="alert alert-danger rem_ants" id="rem_ants" style="">
                                                            <strong>Atenção !</strong> senha ou usuário incorreto!.
                                                        </div>
                                                    @endif
                                                        <form method="POST" action="{{('\aplicacao/autenticacao') }}" style="margin-top: 3%;" data-toggle="validator" role="form">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">Usuário</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Usuário" name="email" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">Senha</label>

                                                                <div class="col-md-6">
                                                                    <input id="conf_pass"  type="password" class="form-control" name="password" value=""  placeholder="Senha "  data-match="#pass" data-match-error="As senhas não são iguais" minlength="6"  required>

                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>

                                                            <div class="alert alert-danger msg" id="" style="display: none;">
                                                                <strong>Atenção !</strong> As senhas não conferem.
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <button type="submit" class="btn btn-success" id="btn_alterar">
                                                                    <i class="fa fa-check" aria-hidden="true"></i> Acessar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="form-group row">
                                                                <div class="col-md-12">
                                                                <span style="float: right">Esqueceu a senha!<a href="{{('reset')}}" title=""> clique aqui </a></span>
                                                                </div>
                                                            </div> -->
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
        </section>
        <!-- FINAL CONTEUDO -->
    </body>
</html>  
<!-- modal -->