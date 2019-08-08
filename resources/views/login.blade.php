<!DOCTYPE html>
<html>

<head>
    <title>Artigo e Pesquisa</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('template/css/style.css')}}">
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv=”content-type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Eventos & artigos">
        <meta name="author" content="Adriano Reis">
        <link rel="shortcut icon" href="{{URL::asset('img/logo-ceert-st.png')}}" class="img-circle img-responsive" style="border-radius: 10px;" type="image/png">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('template/bootstrap/css/bootstrap.css')}}">

    <!-- FONTS AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Playfair+Display:400,700&display=swap" rel="stylesheet">



        <!--Jquery-->
        <script src="{{URL::asset('template/jquery/jquery-3.3.1.min.js')}}"></script>

</head>

<body>
    <!-- MENU -->
    <nav>
        <div class="container-fluid">
            <div class="top-nav">
                <a href="{{URL('/login')}}" class="logo-menu"><img src="img/ceert-logo-branco.png"></a>
                <div style="display: none;" class="menu-horizontal">
                    <ul>
                        <li>TESTE</li>
                        <li>TESTE</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- CORPO -->
    <section id="corpo">
        <!-- Imagem de fundo -->
        <div class="corpo-bg-img"></div>
        <!-- Camada -->
        <div class="corpo-bg-overlay"></div>
        <!-- Conteudo principal -->
        <div class="container-fluid">

            <div class="row">
                <!-- Lado esquerdo -->
                <div class="col-md-6 col-sm-12 no-padding text-center centralizar-texto">
                    <div class="conteudo-principal">
                        <h1>Lorem ipsum!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mauris velit, fringilla quis eleifend eget, aliquet sed neque. Curabitur ac condimentum justo. Pellentesque id erat nunc. Phasellus auctor eget eros a malesuada. Morbi bibendum metus orci, eget consequat nibh iaculis sed. Vestibulum vitae rutrum ante, et dapibus nunc. Nam volutpat leo sed placerat volutpat. Aenean nec venenatis nunc. Nam urna tortor, malesuada in massa sit amet, convallis laoreet arcu. Vivamus tortor turpis, ultrices auctor pharetra et, ultricies vel metus.</p>
                    </div>
                </div>
                <!-- Lado direito -->
                <div class="col-md-6 col-sm-12 no-padding text-center">
                    <div class="bloco-formulario">
                        <div class="formulario-flex">
                            <!-- Titulo -->
                            <div class="formulario-titulo">
                                <h1>ENTRAR</h1>
                            </div>
                            <!-- Formulario -->
                            <div class="formulario">
                            @if (session()->has('success'))
                            <div class="alert alert-success rem" id="rem" style="">
                                <strong>Informaçao !</strong> O seu cadastro está pendente de confirmação,<br /> verifique o seu e-mail para ativar.
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
                            @if(Session::has('error'))
                                <div class="alert alert-danger rem_ants" id="rem_ants" style="">
                                    <strong>Atenção !</strong> senha ou usuário incorreto!.
                                </div>
                                {{$errors->has('email')}}
                            @endif
                                <form method="POST" action="{{('\portal/autenticacao') }}">
                                    @csrf
                                    <div class="form-group img_user">
                                        <img src="{{URL::asset('img/usuario.png')}}" class="img_user" style="cursor:pointer">
                                        <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required placeholder="Usuário" type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group img_pass">
                                        <img src="{{URL::asset('img/senha.png')}}" class="img_pass"  style="cursor:pointer">
                                        <input minlength="6" id="pass" name="password" placeholder="Senha" type="password" required>
                                    </div>
                                    <span class="esqueceu-senha">
                                        <a href="{{('\forgotpassword') }}">Esqueceu sua senha?</a>
                                    </span>
                                    <input class="btn-entrar" type="submit" value="Entrar">
                                    <p>Não tem uma conta? <span><a href="{{URL('register')}}">Cadastre-se.</a></span></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
$(".img_user").click(function() {
    document.getElementById("email").focus();
});

$(".img_pass").click(function() {
    document.getElementById("pass").focus();
});
</script>
</body>

</html>