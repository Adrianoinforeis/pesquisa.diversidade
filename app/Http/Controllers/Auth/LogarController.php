<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LogarController extends Controller
{
    public function login(){
        return view('login');
    }

    public function autenticacao(Request $request){
        $request->validate([
        'email' => 'required|string',
        'password' => 'required|string',
        ]);
        $user = User::where('email', request('email'))->first();

        if($user){
            if (Hash::check(request('password'), $user->password)) {
                Auth::login($user, $request->has('remember'));
                }
            }
        if(Auth::check()){ //ok
            $user->increment('acessos'); //incrementa o número de vezes que o usuário se autentica
                        if($user->excluido == 1){
                            return redirect('portal/acessoNegado');
                        }else{

                        if($user->situacao == 0){ //cadastro pendente de confirmação
                            return redirect('cadastroPendente');
                        }else if($user->situacao == 1){ //falta aceitar o termo
                            return redirect('portal/termo');
                        }else if($user->situacao == 2){ //falta escolher entre artigo ou pesquisa
                            return redirect('portal/escolha'); 
                        }else if($user->situacao == 3){ //Falta completar o perfil
                            return redirect('portal/perfil'); 
                        }else{ //
                            return redirect('portal/home');
                        }
                    }
        }

        return redirect()->back()
        ->withInput()
        ->with('error', 'E-mail ou senha incorreta');

    }
    public function cadastroPendente(){
        auth()->logout();
        return redirect('/login')->with('success', true); //redireciona
    }

}
