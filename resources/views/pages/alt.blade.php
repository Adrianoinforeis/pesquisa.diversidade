<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>CENSO</title>
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
                                            <a href="#"><img src="{{URL::asset('img/logo_02.png')}}" height="50px" width="10px"></a>
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
                        <div class="col-12 col-md-3 col-lg-2 col-xl-2 sidebar-title vh">
                            <div class="vertical-title-text absolute-text">
                                <h3>DIVERSIDADE</h3>
                            </div>
                        </div>
                        <!-- BLOCOS -->
                        <div class="col-sm-12 col-12 col-md-9 col-xl-10 col-lg-10">
                            <div class="bloco-total">
                                <div class="row">  
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">senha alterar</th>
      <th scope="col">btn</th>
    </tr>
  </thead>
  <tbody>
  @foreach($dados as $dado)
    <tr>
      <td>{{$dado->id}}</td>
      <td>
      <form method="POST" action="{{('\aplicacao/senha')}}">
        @csrf
        <input id="text" type="text" class="form-control" name="senha" value="" >
        <input id="text" type="text" class="form-control" name="id" value="{{$dado->id}}" >
        <button type="submit" class="btn btn-primary">
        Alterar
       </button>
        </form>
      </td>
      <td>@mdo</td>
    </tr>
@endforeach
  </tbody>
</table>
<?php
function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
  $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
  $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
  $nu = "0123456789"; // $nu contem os números
  $si = "!@#$%&"; // $si contem os símbolos
  $senha = '';
 
  if ($maiusculas){
        // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($ma);
  }
 
    if ($minusculas){
        // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($mi);
    }
 
    if ($numeros){
        // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($nu);
    }
 
    if ($simbolos){
        // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($si);
    }
 
    // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
    return substr(str_shuffle($senha),0,$tamanho);
}
?>

<?php
for ($i = 1; $i <= 43; $i++) {
    echo gerar_senha(10, true, true, true, true).'<br />';
}
   
?>
                                            <div class="card"  style="margin-top: 20%;">
                                            <div class="card-body">

                                                            <form method="POST" action="{{ route('register') }}">
                                                                @csrf

                                                                <div class="form-group row">
                                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                                        @if ($errors->has('name'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('name') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                                        @if ($errors->has('email'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('email') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                                        @if ($errors->has('password'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('password') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-0">
                                                                    <div class="col-md-6 offset-md-4">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            {{ __('Register') }}
                                                                        </button>
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
                </div>
            </div>
        </section>
        <!-- FINAL CONTEUDO -->
    </body>
</html>  
<!-- modal -->