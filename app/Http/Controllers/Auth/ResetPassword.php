<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reset_password_mail;

class ResetPassword extends Controller
{
    public function indexreset(){
        $error = '';
        $dados = false;
        return view('auth.reset', [
            'error' => $error,
            'dados' => $dados,
            'result' => $result = null
        ]);   
    }

 public function reset(Request $request){
    $result = User::where('email', $request->email)->first();
    if($result){
        $pass = $this->gerar_pass(150, true, true, true, true);
        $result->remember_token = $pass;//Hash::make('secret');
        $result->save();
        Mail::to($request->email)
        ->bcc('adriano@ceert.org.br')
        ->send(new Reset_password_mail($result));
        $dados = true;
        $error = '';
       return view('auth.reset', [
        'error' => $error,
        'dados' => $dados,
        'result' => $result
    ]);
    }else{
        $error = 1;
        $dados = false;
        return view('auth.reset', [
            'error' => $error,
            'dados' => $dados,
            'result' => $result = null
        ]);
    }
 }
 public function upgrade(Request $request){
    $data = User::where('email', $request->email)->first();

    $data->password = Hash::make($request->newpassword);
    $data->esqueceusenha = ($data->esqueceusenha + 1);
    $data->save();
    return redirect('/');
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

