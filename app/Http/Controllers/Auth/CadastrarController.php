<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use App\Models\Perfil;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

//enviar e-mail
use Illuminate\Support\Facades\Mail;
use App\Mail\InscricaoSistema;

class CadastrarController extends Controller
{
    public function register(){
        return view('add.register');
    }
    public function cadastrar(Request $request){
      
        $capctha = $this->valCapcha($request); //faz a validação do reCaptcha

        if ($capctha->success == true) {
                $val = $this->validator($request->all())->validate();
                event(new Registered($user = $this->create($request->all())));
                $perf = $this->createPerfil($request->all(), $user->id_user);
                //Vai enviar um e-mail com o link para confirmar o cadastro
                $this->cadastroPendente($request);
                 return redirect('/login')->with('success', true); //redireciona
        } else {
        return redirect()->back()
        ->withInput()
        ->with('error_captcha', '');
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            //'nivel' => ['required', 'string'],
        ]);
    }
    protected function registered(Request $request, $user)
    {
        //
    }
    public function alterar(){
        $users = new User();
        $dados = $users->get();
        return view('pages.alt',['dados' => $dados]);
    }
    public function senha(Request $request){

        $us = User::where('id_user', $request->id)->first();
        $us->password = Hash::make($request->senha);
        $us->save();
        return redirect('/aplicacao/alterar'); //redireciona
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            //'nivel' => $data['nivel'],
            'password' => Hash::make($data['password']),
            
        ]);
    }
    protected function createPerfil(array $request, $id_user){
        return Perfil::create([
        'id_user' => $id_user, //Auth::user()->id_user;
        'sexo' => $request['sexo'],
        'raca_cor' => $request['raca_cor'],
        'ocupacao' => $request['ocupacao'],
        'out_ocupacao' => $request['out_ocupacao'],
        'dtaNascimento' => implode('-', array_reverse(explode('/', $request['dtaNascimento']))),
        //$create_perf->instituicao = $request->instituicao;
        'telefone' => $request['telefone'],
        'celular' => $request['celular'],
        'rg' => $request['rg'],
        'cpf' => $request['cpf'],
        'cep' => $request['cep'],
        'rua' => $request['rua'],
        'bairro' => $request['bairro'],
        'cidade' => $request['cidade'],
        'uf' => $request['uf'],
        'numero' => $request['numero'],
        //$create_perf->observacao = $request->observacao;
        ]);
    }
    protected function guard()
    {
        return Auth::guard();
    }
    public function valCapcha($request){
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $respon = $request->input('g-recaptcha-response');
        $data = array('secret' => "6Lc8ta8UAAAAALW_4Cp3rU5pWOJj5PdlOP0mUcI0", 'response' => $respon);
        $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
        );
        $context  = stream_context_create($options);
        $resultado = file_get_contents($url, false, $context);
        $jsom = json_decode($resultado);
        return $jsom;
    }
    public function cadastroPendente($request){
        $result = User::where('email', $request->email)->first();
        $pass = $this->gerar_pass(150, true, true, true, true);
        $result->token_cadastro = $pass;//Hash::make('secret');
        $result->save();
        Mail::to($request->email)
        ->bcc('adrianoinforeis@gmail.com')
        ->send(new InscricaoSistema($result));
    }
    public function gerar_pass($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
        $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
        $nu = "0123456789"; // $nu contem os números
        $si = "!@$"; // $si contem os símbolos
        $senha = '2y10eH39qQ70CdQoKpDl5Tmi5fpuQjb0l492e1iLZon2s5YmteczVvzu';
       
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
}
