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

    <!- BOOTSTRAP ->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('template/bootstrap/css/bootstrap.css')}}">

    <!- FONTS AWESOME ->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <!- GOOGLE FONTS ->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Playfair+Display:400,700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- MENU -->
    <nav>
        <div class="container-fluid">
            <div class="top-nav">
                <!-- <i class="fas fa-bars" onclick="openNav()"></i> -->
                <a href="#" class="logo-menu"><img src="{{URL::asset('img/ceert-logo-branco.png')}}"></a>
            </div>
            <!-- Menu lateral -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">TESTE</a>
                <a href="#">TESTE</a>
                <a href="#">TESTE</a>
                <a href="#">TESTE</a>
            </div>
            <div id="overlay-menu"></div>
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
            <div class="row margin-left">
                <!-- Lado esquerdo -->
                <div class="col-md-6 col-sm-12 no-padding text-center">
                    <div class="bloco-escolha artigo">
                        <div class="artigo-flex">
                            <!-- Titulo -->
                            <img src="{{URL::asset('img/003-book-2.png')}}">
                            <div class="artigo-titulo">
                                <h1>ARTIGO</h1>
                            </div>
                            <div class="artigo-descricao">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mauris velit, fringilla quis eleifend eget, aliquet sed neque.</p>
                            </div>
                            <!-- <a href="template-formulario.html"><input class="btn-entrar" type="submit" value="Realizar"></a> -->
                            <form action="{{('\portal/artigo')}}" method="post" enctype="multipart/form-data" id="" name="" data-toggle="validator" role="form">
                                 {{ csrf_field()}}
                               <input class="btn-entrar" type="submit" value="Realizar">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Lado direito -->
                <div class="col-md-6 col-sm-12 no-padding text-center">
                    <div class="bloco-escolha pesquisa">
                        <div class="pesquisa-flex">
                            <!-- Titulo -->
                            <img src="{{URL::asset('img/005-search.png')}}">
                            <div class="pesquisa-titulo">
                                <h1>PESQUISA</h1>
                            </div>
                            <div class="pesquisa-descricao">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mauris velit, fringilla quis eleifend eget, aliquet sed neque.</p>
                            </div>
                            <form action="{{('\portal/pesquisa')}}" method="post" enctype="multipart/form-data" id="" name="" data-toggle="validator" role="form">
                                 {{ csrf_field()}}
                               <input class="btn-entrar" type="submit" value="Realizar">
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            document.getElementById("overlay-menu").style.display = "block";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.body.style.backgroundColor = "white";
            document.getElementById("overlay-menu").style.display = "none";
        }
</script>

</body>
</html>