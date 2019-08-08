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
        <script>
            var i = 5;
            function contagemRegressiva()
            {
                i--;
                document.getElementById('cronometro').innerHTML = i + ' segundos';
                if(i == 0)
    		{
		    i = 5;
		}
	    }
	    setInterval("contagemRegressiva()", 900);
	</script>
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
                                <div class="alert alert-success rem_link" id="rem_link" style="">
                                    <strong>Informação !</strong> Cadastro confirmado com sucesso!
                                        <br />Você será redirecionado em:
                                        <div id="cronometro">
                                        5 segundos
                                    </div>
                                 </div>
                            </div>
                            <!-- Formulario -->
                            <div class="formulario">
                            <!-- <form method="POST" action="{{('\upgrade') }}" style="margin-top: 3%;" data-toggle="validator" role="form">
                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">E-mail</label>

                                    <div class="col-md-9">
                                        <input id="email" type="email" readonly="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$email}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">Nova senha</label>

                                    <div class="col-md-9">
                                        <input id="pass" type="password" class="form-control" name="newpassword" value="" placeholder="no mínimo 6 caracteres" data-error="Por favor, informe a senha, no mímino 6 caracteres" minlength="6"required>

                                            <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">Confirmar senha</label>

                                    <div class="col-md-9">
                                        <input id="conf_pass"  type="password" class="form-control" name="novasenha" value=""  placeholder="Confirmar senha "  data-match="#pass" data-match-error="As senhas não são iguais" minlength="6"  required>

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="alert alert-danger msg" id="" style="display: none;">
                                    <strong>Atenção !</strong> As senhas não conferem.
                                </div>
                                    <input class="btn-entrar" type="submit" value="Alterar" id="btn_alterar">
                            </form> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    function removeMensagem_link() {
        setTimeout(function () {
            var msg = document.getElementById("rem_link");
            msg.parentNode.removeChild(msg);
            window.location.href = "{{URL('/login')}}";
        }, 5000);
    }
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            // toda vez que a página carregar, vai limpar a mensagem (se houver) após 5 segundos
            removeMensagem_link();
            //var host = "{{URL('/login')}}"; 
        }
    };
</script>
</body>

</html>