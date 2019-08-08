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



    <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>     
<script src="{{URL::asset('js/jquery.mask.js')}}"></script>     
<script src="{{URL::asset('js/jquery.mask.min.js')}}"></script>     

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
        <div class="container">

            <div class="row">
                <!-- Lado esquerdo -->
                <div class="col-md-6 col-sm-12 no-padding text-center centralizar-texto">

                </div>
                <!-- Lado direito -->
                <div class="col-md-12 col-sm-12 no-padding text-center">
                    <div class="bloco-formulario">
                        <div class="formulario-flex">
                            <!-- Titulo -->
                            <div class="formulario-titulo">
                                <h1>CADASTRE-SE</h1>
                            </div>
                            <!-- Formulario -->
                            <div class="formulario">
                            @if(Session::has('error_captcha'))
                                <div class="alert alert-danger rem_ants" id="rem_ants" style="">
                                    <strong>Atenção !</strong> clique na opção, 'Não sou um robô'!.
                                </div>
                            @endif
                           
                            @if($errors->has('email'))
                                <div class="alert alert-danger rem_ants" id="rem_ants" style="">
                                    <strong>Atenção !</strong> E-mail já cadastrado.
                                </div>
                            @endif
                            <style>
                                select:invalid { color: gray;font-size: 20px;height:55px;margin-bottom: 15px; }
                                .altura{height:55px;
                                    font-size: 20px;
                                    padding: 0px, 0px, 0px, 0px;}
                                .formatacao{
                                    height: 55px;
                                    padding: 0px, 0px, 0px, 0px;
                                }
                            </style>
                            

                                <form method="POST" action="{{ ('cadastrar') }}">
                                    @csrf
                                    <div class="form-row">
                                    <span style="float:left; margin-bottom: 10px;font-size: 12px;color:crimson;">Os campos com * são obrigatórios</span>
                            </div>
                                    <div class="form-row">
                     
                              
                            
                                        <div class="form-group col-xl-4 col-lg-6 formatacao">
                                            <!-- <label for="" class="control-label">* Nome</label>  -->
                                            <input reuired  class="formatacao form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required placeholder="*Nome" type="text" id="nome" name="name" class="form-control">
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-6 formatacao">
                                             <!-- <label for="cpf_pes" id="resposta" class="control-label">* CPF</label>   -->
                                            <input placeholder="*CPF" value="{{ old('cpf') }}" autocomplete="off" required="" onkeyup="maskNumeroc(this);
                                            limitarInput(this);" onclick="maskNumeroc(this)" onkeypress="maskNumeroc(this)" id="cpf_pes" type="text" maxlength="11" class="formatacao form-control" name="cpf">
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-6 formatacao">
                                        <!-- <label for="rg" class="control-label">* RG</label>  -->
                                            <input autocomplete="off" value="{{ old('rg') }}" id="rg" type="text" placeholder="*RG" maxlength="11" class="form-control formatacao" name="rg" require>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-6 formatacao">
                                        <!-- <label for="dtaNascimento" class="control-label">* Nascimento</label>  -->
                                            <input autocomplete="off" value="{{ old('dtaNascimento') }}" placeholder="*Dta. Nasc." required="" maxlength="10"   type="text" id="dtaNascimento" name="dtaNascimento" class="form-control formatacao">
                                        </div>
                                        <div class="form-group col-xl-1 col-lg-6 formatacao">
                                            <input placeholder="" readonly id="res" type="" name="" class="form-control formatacao">
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-6 formatacao">
                                        <!-- <label for="telefone" class="control-label">* Tel</label>  -->
                                            <input name="telefone" value="{{ old('telefone') }}" maxlength="10" type="text" placeholder="Tel." id="telefone" value="" class="form-control formatacao" required="">
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-6 formatacao">
                                        <!-- <label for="celular" class="control-label">* Cel</label>  -->
                                            <input name="celular"value="{{ old('celular') }}" maxlength="11" type="text" placeholder="Cel." id="celular" class="form-control formatacao" required="">
                                        </div>

                                        <div class="form-grupo col-xl-4 col-lg-6 formatacao">
                                            <select placeholder class="form-control  formatacao" id="sexo" name="sexo" required="">
                                                <option value="" disabled selected hidden>* Identidade de gênero</option>
                                                <option value="Homem">Homem</option> 
                                                <option value="Mulher">Mulher</option> 
                                                <option value="Travesti">Travesti</option> 
                                                <option value="Homem trans">Homem trans</option>
                                                <option value="Mulher trans">Mulher trans</option>
                                            </select>
                                        </div>
                                        <div class="form-grupo col-xl-3 col-lg-6 formatacao">
                                            <select type="text" name="raca_cor" id="raca_cor" class="form-control  formatacao" required="">
                                                <option value="" disabled selected hidden>* Raça/Cor</option>
                                                <option value="Branca">Branca</option>
                                                <option value="Preta">Preta</option>
                                                <option value="Amarela">Amarela</option>
                                                <option value="Parda">Parda</option>
                                                <option value="Indígena">Indígena</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-6 formatacao">
                                            <!-- <label for="cep" class="control-label">* CEP</label>  -->
                                            <input placeholder="*Cep." value="{{ old('cep') }}" autocomplete="off" type="text" required id="cep" type="tel" maxlength="8" class="form-control formatacao" name="cep">
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-6 formatacao">
                                                <!-- <label for="rua" class="control-label">Rua</label> -->
                                                <input placeholder="Rua" value="{{ old('rua') }}" readonly="" onkeyup="maiuscula(this)" name="rua" id="rua" class="form-control formatacao" required>
                                            </div>
                                            <div class="form-group col-xl-3 col-lg-6 formatacao">
                                                <!-- <label for="bairro" class="control-label">Bairro</label> -->
                                                <input placeholder="Bairro" value="{{ old('bairro') }}" readonly="" onkeyup="maiuscula(this)" name="bairro" id="bairro" class="form-control  formatacao" require>
                                            </div>                                    
                                            <div class="form-group col-xl-3 col-lg-6 formatacao">
                                                <!-- <label for="cidade" class="control-label">Cidade</label> -->
                                                <input placeholder="Cidade" value="{{ old('cidade') }}" readonly="" onkeyup="maiuscula(this)" class="form-control  formatacao" name="cidade" id="cidade" require>
                                            </div>

                                            <div class="form-group col-xl-3 col-lg-6 formatacao">
                                                <select readonly="" class="form-control  formatacao" id="uf" name="uf" required>
                                                    <option value="" readonly selected hidden>UF</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="RS">RS</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-xl-2 col-lg-6 formatacao">
                                                <!-- <label for="numero" class="control-label">Número</label> -->
                                                <input placeholder="Número" value="{{ old('numero') }}" readonly="" name="numero" id="numero" class="form-control  formatacao" require>
                                            </div>
                                        <div class="form-grupo col-xl-4 col-lg-6 col-md-6 formatacao" id="ocup_6">
                                            <select name="ocupacao" onchange="verificaoption()" id="ocupacao_6" class="form-control  formatacao"> 
                                                <option  value="" readonly selected hidden>Ocupação</option>
                                                <option  value="Gestor(a)">Gestor(a)</option>
                                                <option  value="Professor(a)">Professor(a)</option>
                                                <option  value="Assistente Social" >Assistente Social</option>
                                                <option  value="Advogado(a)">Advogado(a)</option>
                                                <option  value="Enfermeira(o)">Enfermeira(o)</option>
                                                <option  value="Nutricionista">Nutricionista</option>
                                                <option  value="Fisioterapeuta">Fisioterapeuta</option>
                                                <option  value="Médico(a)">Médico(a)</option>
                                                <option  value="Psicólogo(a)">Psicólogo(a)</option>
                                                <option  value="Sociólogo(a)">Sociólogo(a)</option>
                                                <option  value="Terceiro setor">Terceiro setor</option>
                                                <option  value="Agente Comunitário(a) de Saúde">Agente Comunitário(a) de Saúde </option>
                                                <option  value="Auxiliar de Enfermagem">Auxiliar de Enfermagem </option>
                                                <option  value="Outro">Outro</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-6 formatacao" id="class_out_ocupacao">
                                            <input type="text" id="out_ocupacao" value="{{ old('out_ocupacao') }}" name="out_ocupacao" class="form-control formatacao" placeholder="Outro">
                                        </div> 
                                        <div class="form-group col-xl-4 col-lg-6 formatacao">
                                            <!-- <label for="email" class="control-label">E-mail</label> -->
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} formatacao" name="email" placeholder="*E-mail" value="{{ old('email') }}" required>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-6 formatacao">
                                        <!-- <label for="email_conf" class="control-label">Confirmar e-mail</label> -->
                                            <input autocomplete="off" id="email_conf" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} formatacao" name="" placeholder="*Confirmar e-mail" value="" required>
                                        </div>
                                   
                                    <div class="form-group formatacao">
                                    <!-- <img src="{{URL::asset('img/senha.png')}}" class="" style="cursor:pointer"> -->
                                            <input id="password" type="password" minlength="6" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} formatacao" placeholder="*Senha, mínimo 6 caracteres" name="password" required>
                                    </div>

                                    <div class="form-group formatacao">
                                    <!-- <img src="{{URL::asset('img/senha.png')}}" class="" style="cursor:pointer"> -->
                                            <input id="password-confirm" type="password" minlength="6" class="form-control formatacao" name="password_confirmation" placeholder="*Confirmar senha" required>
                                    </div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6Lc8ta8UAAAAAOrTgy_mt3jxhArN85C5zpe8b0bW"></div>
                                    
                                    <div class="alert alert-danger msg" id="" style="display: none;">
                                        <strong>Atenção !</strong> As senhas não conferem.
                                    </div>

                                    <div class="alert alert-danger msg_mail" id="" style="display: none;">
                                        <strong>Atenção !</strong> Os e-mails não conferem.
                                    </div>
                                    <input id="btn_cadastrar" type="submit" class="btn-entrar" value="Cadastrar">
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
$(".img_user").click(function() {
    document.getElementById("email").focus();
});

$(".img_pass").click(function() {
    document.getElementById("pass").focus();
});
</script>
  <script>
  $("#password-confirm").keyup(function(){
    var x = $("#password-confirm").val().length;
    if(x >= 6){
    var pass = $('#password').val();
    var confpass = $('#password-confirm').val();
        if (pass == confpass) {
            $(".msg").hide();
        $("#btn_cadastrar").attr('disabled', false);
        } else {
        $(".msg").show();
        $("#btn_cadastrar").attr('disabled', true);
        }
    }else{
     $("#btn_cadastrar").attr('disabled', false);
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

    $("#email_conf").keyup(function(){
    var email_len = $("#email_conf").val().length;
    if(email_len >= 6){
    var email = $('#email').val();
    var email_conf = $('#email_conf').val();
        if (email == email_conf) {
            $(".msg_mail").hide();
        $("#btn_cadastrar").attr('disabled', false);
        } else {
        $(".msg_mail").show();
        $("#btn_cadastrar").attr('disabled', true);
        }
    }else{
     $("#btn_cadastrar").attr('disabled', false);
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
</script>
<script>
function verificaoption(){
 option6 =   $('#ocupacao_6').val(); 
 if(option6 == 'Outro'){
    $('#out_ocupacao').removeAttr('readonly');
    document.getElementById("out_ocupacao").focus();
    $('#out_ocupacao').attr('required', 'required');   
 }else{
    $('#out_ocupacao').attr("readonly", "true");
    $('#out_ocupacao').removeAttr('required');
    document.getElementById('out_ocupacao').value = "";    
 }

}
</script>
<script type="text/javascript">
 /*
        $( "#verificaemail" ).blur(function() {
                var email = $('#verificaemail').val();
                 $.ajax({

                url: "/Intranet/verificaemailexistente",
                type: "POST",
                cache: false,
                processData: true,
                dateType:'json',
                data: {"email": email,
                "_token":"{{csrf_token()}}" },
                success: function(result){
                    if(result.success[0].id){
                    alert('Atenção esse e-mail já está cadastrado');
                    $('#verificaemail').val('');
                    }
                  }
                
                });
            });
   */
</script> 

<script>
    function apenasNumeros(num) {
        //aceita somente números no input
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
            campo.value = "";
        }
    }
// INICIO FUNÇÃO DE MASCARA MAIUSCULA
    function maiuscula(z) {
        v = z.value.toUpperCase();
        z.value = v;
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        //$("#idade").mask("99/99/9999");
        $("#telefone").mask("(00) 0000-0000");
        $("#celular").mask("(00) 0 0000-0000");
        $("#cep").mask("00000000");
        $("#dtaNascimento").mask("00/00/0000");
        //$("#email_conf").bind('paste', function(e) {
        //e.preventDefault();
        //});

        // $('#telefone').mask("(00) 0000-00000");
        // $("#cpf").mask("00.000.000-00");
        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
            $("#ibge").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep").blur(function () {
            //focus no número
            //document.getElementById("numero").focus();

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#ibge").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro.toUpperCase());
                            $("#bairro").val(dados.bairro.toUpperCase());
                            $("#cidade").val(dados.localidade.toUpperCase());
                            $("#uf").val(dados.uf.toUpperCase());
                            $("#ibge").val(dados.ibge);
                            document.getElementById('numero').focus();

                            $("#rua").removeAttr('readonly');
                            $("#bairro").removeAttr('readonly');
                            $("#cidade").removeAttr('readonly');
                            $("#uf").removeAttr('readonly');
                            $("#ibge").removeAttr('readonly');
                            $("#numero").removeAttr('readonly');
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });

    });
</script>
<script type="text/javascript">
    function vCampos(el, er)
    {
        var e = $(el).val().replace(er, '');
        $(el).val(e);
    }

    function num(el)
    {
        VCampos(el, /^0-9/g);
    }

    function maskNumeroc(el)
    {
        vCampos(el, /[^0-9\)\(\/]/g);
        var e = $(el).val();
        if (e.length == 11)
            $(el).val(e);
    }
    </script>
<script type="text/javascript">
    function CPF() {
        "user_strict";
        function r(r) {
            for (var t = null, n = 0; 9 > n; ++n)
                t += r.toString().charAt(n) * (10 - n);
            var i = t % 11;
            return i = 2 > i ? 0 : 11 - i
        }
        function t(r) {
            for (var t = null, n = 0; 10 > n; ++n)
                t += r.toString().charAt(n) * (11 - n);
            var i = t % 11;
            return i = 2 > i ? 0 : 11 - i
        }
        var n = "CPF Inválido", i = "CPF Válido";
        this.gera = function () {
            for (var n = "", i = 0; 9 > i; ++i)
                n += Math.floor(9 * Math.random()) + "";
            var o = r(n), a = n + "-" + o + t(n + "" + o);
            return a
        }, this.valida = function (o) {
            for (var a = o.replace(/\D/g, ""), u = a.substring(0, 9), f = a.substring(9, 11), v = 0; 10 > v; v++)
                if ("" + u + f == "" + v + v + v + v + v + v + v + v + v + v + v)
                    return n;
            var c = r(u), e = t(u + "" + c);
            return f.toString() === c.toString() + e.toString() ? i : n
        }
    }

    var CPF = new CPF();

    $(document).ready(function () {
        $("#cpf_pes").keyup(function () {
            var teste = CPF.valida($(this).val());                 
            $("#cpf_pes").html(teste);
            if (teste == "CPF Válido") {
                document.getElementById('cpf_pes').style.color = 'green';
               // document.getElementById("btn_cad_s_modal").style.display = "block"; 
               // document.getElementById("btn_cad_com_modal").style.display = "block";
                $("#btn_cad_com_modal").removeAttr("disabled");
               // $("#btn_cad_s_modal").removeAttr("disabled");
            } else {
                document.getElementById('cpf_pes').style.color = 'red';
                document.getElementById("btn_cad_com_modal").style.display = "none";
                $("#btn_cad_com_modal").attr("disabled", "true");
                $("#btn_cad_s_modal").attr("disabled", "true");
            }
        });

        $("#cpf_pes").blur(function () {
            var teste = CPF.valida($(this).val());
            $("#cpf_pes").html(teste);
            if (teste == "CPF Válido") {
                document.getElementById('cpf_pes').style.color = 'green';
                $("#btn_cad_com_modal").removeAttr("disabled");
                $("#btn_cad_s_modal").removeAttr("disabled");
                //document.getElementById("btn_cad_com_modal").style.display = "block";
            } else {
                document.getElementById("btn_cad_com_modal").style.display = "none";
                document.getElementById('cpf_pes').style.color = 'red';
                $("#btn_cad_com_modal").attr("disabled", "true");
                $("#btn_cad_s_modal").attr("disabled", "true");
               
            }
        });

    });
    //controla a quantidade de dígitos no campo CPf
    function limitarInput(obj) {
        obj.value = obj.value.substring(0, 11); //Aqui eu pego o valor e só deixo o os 10 primeiros caracteres de valor no input
    }
    </script>
<script type="text/javascript">

    $("#dtaNascimento").blur(function () {
        var data = $(this).val();
        var d = new Date,
                ano_atual = d.getFullYear(),
                mes_atual = d.getMonth() + 1,
                dia_atual = d.getDate(),
                split = data.split('/'),
                novadata = split[1] + "/" + split[0] + "/" + split[2],
                data_americana = new Date(novadata),
                vAno = data_americana.getFullYear(),
                vMes = data_americana.getMonth() + 1,
                vDia = data_americana.getDate(),
                ano_aniversario = +vAno,
                mes_aniversario = +vMes,
                dia_aniversario = +vDia,
                quantos_anos = ano_atual - ano_aniversario;
        if (mes_atual < mes_aniversario || mes_atual == mes_aniversario && dia_atual < dia_aniversario) {
            quantos_anos--;
        }
        $("#res").val(quantos_anos);
        // return quantos_anos < 0 ? 0 : quantos_anos;
        //alert(quantos_anos);
    });
</script>
</body>

</html>                                           

