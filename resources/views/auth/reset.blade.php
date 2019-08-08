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
                                <h1>Esqueceu a senha!</h1>
                            </div>
                            <!-- Formulario -->
                            <div class="formulario">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @php 
                            
                            if($error == 1){
                            @endphp
                            <div class="alert alert-danger rem_ants" id="rem_ants" style="">
                                <strong>Atenção !</strong> e-mail não localizado.
                            </div>
                            @php } 
                            @endphp
                            @php
                                if($dados == false){
                                @endphp
                                <form method="POST" action="{{('\reset') }}">
                                    @csrf
                                    <div class="form-group img_user">
                                        <img src="{{URL::asset('img/usuario.png')}}" class="img_user" style="cursor:pointer">
                                        <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required placeholder="Usuário" type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <input class="btn-entrar" id="btn_esqueceu_pass" type="submit" value="enviar">
                                </form>
                                <!-- <form method="POST" action="{{('\reset') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Informe seu e-mail</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search" aria-hidden="true"></i> Enviar
                                            </button>
                                        </div>
                                    </div>
                                </form> -->
                                @php }
                                if($dados == true){
                                @endphp
                                <div class="alert alert-success rem_link" id="rem_link" style="">
                                    <strong>Informação !</strong> Foi enviado um link para seu e-mail: {{$result->email}} , caso não esteja na caixa de eentrada verifique a pasta span.
                                 </div>
                                @php
                                }
                                @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="idModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <img src="{{URL::asset('img/loading.gif')}}" width="250px" height=""  style="margin-left: 15%; margin-top: -15%;">
        </div>
    </div>
 <!--final Modal processando-->

 <script>
$(".img_user").click(function() {
    document.getElementById("email").focus();
});

$(".img_pass").click(function() {
    document.getElementById("pass").focus();
});

$("#btn_esqueceu_pass").click(function() {
    var mail = $('#email').val();
    if(mail != ''){ 
        document.getElementById("btn_esqueceu_pass").style.display = "none";
    }

});

</script>
  <!--Remove a mensagem de alteração após 5 segundos-->
  <script>
  $("#conf_pass").keyup(function(){
    var x = $("#conf_pass").val().length;
    if(x >= 6){
    var pass = $('#pass').val();
    var confpass = $('#conf_pass').val();
        if (pass == confpass) {
            $(".msg").hide();
        $("#btn_alterar").attr('disabled', false);
        } else {
        $(".msg").show();
        $("#btn_alterar").attr('disabled', true);
        }
    }else{
     $("#btn_alterar").attr('disabled', false);
    }
});
    function removeMensagem() {
        setTimeout(function () {
            var msg = document.getElementById("rem_ants");
            msg.parentNode.removeChild(msg);
        }, 9000);
    }
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            // toda vez que a página carregar, vai limpar a mensagem (se houver) após 5 segundos
            removeMensagem();
        }
    };

    function removeMensagem_link() {
        setTimeout(function () {
            var msg = document.getElementById("rem_link");
            msg.parentNode.removeChild(msg);
            window.location.href = "{{URL('/login')}}";
        }, 4000);
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