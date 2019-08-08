<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Social; //parte 1
use \Auth;
use App\Models\User;
use App\Models\User as AppUser;

class PortaisController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}
public function escolha(){
    return view('escolha.escolha');
}
public function artigo(Request $request){
    $situacao = Auth::user()->situacao;
    $dados = User::where('id_user', Auth::user()->id_user)->first();

    if($situacao == 3){ //já fez os dois passos anteriores SITUAÇÃO É IGUAL 2
        $dados->escolha = 1; //escolheu artigo
        $dados->save();
        return redirect('portal/perfil'); 
    }else{    
        $dados->termo = 1;
        $dados->situacao = 3;
        $dados->escolha = 1; //escolheu artigo
        $dados->save();
        return redirect('/portal/home')->with('success', true); //redireciona
    }
}
public function pesquisa(Request $request){
    $situacao = Auth::user()->situacao;
    $dados = User::where('id_user', Auth::user()->id_user)->first();

    if($situacao == 3){ //já fez os dois passos anteriores SITUAÇÃO É IGUAL 2
        $dados->escolha = 2; //escolheu pesquisa
        $dados->save();
        return redirect('portal/perfil'); 
    }else{    
        $dados->termo = 1;
        $dados->situacao = 3;
        $dados->escolha = 2; //escolheu pesquisa
        $dados->save();
        return redirect('/portal/home')->with('success', true); //redireciona
    }
}
public function home(){
   $dados = Social::where('id_user', Auth::user()->id_user)->first();
    return view('home.home',
    ['parte1' => $dados]
);
}

public function relatorio(){
  $dados = new Clientes();
  $info = $dados->get();


  return view('pages.relatorio',
['dados' => $info]
);
}


public function encerramento()
{
    $id = Auth::user()->id_user;
    $dados = User::where('id_user', $id)->first();
    $dados->situacao = 2;
    $dados->save();

    $cliente = Clientes::where('id_cliente', Auth::user()->id_cliente)->first();
    $cliente->cli_situacao = 2;
    $cliente->termino = date('Y-m-d h:i:s');
    $cliente->save();

     auth()->logout();
     //session()->flash('message', 'Some goodbye message');
     return redirect(''); //redireciona
  }
  public function acessoNegado(){
    auth()->logout();
    return redirect('')->with('success', true); //redireciona
 }  
public function Logout()
{
     auth()->logout();
     session()->flash('message', 'Some goodbye message');
     return redirect('');
  }
}
