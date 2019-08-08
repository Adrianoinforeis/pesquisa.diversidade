<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Perfil;

class PerfilController extends Controller
{
    public function Perfil(){
        $user = User::where('id_user', Auth::user()->id_user)->first(); //dados user
        $dados = Perfil::where('id_user', Auth::user()->id_user)->first(); //dados do perfil
        return view('perfil.perfil',
        ['user' => $user,
        'perfil' => $dados] ); 
       
    }
    public function perfil_add(Request $request){
       $perfil = Perfil::where('id_user', Auth::user()->id_user)->first();
        if($perfil){ //caso haja o cadastro vai atualizar
            $perfil->sexo = $request->sexo;
            $perfil->raca_cor = $request->raca_cor;
            $perfil->ocupacao = $request->ocupacao;
            $perfil->out_ocupacao = $request->out_ocupacao;
            $perfil->dtaNascimento = implode('-', array_reverse(explode('/', $request->dtaNascimento)));
            $perfil->instituicao = $request->instituicao;
            $perfil->telefone = $request->telefone;
            $perfil->celular = $request->celular;
            $perfil->rg = $request->rg;
            $perfil->cpf = $request->cpf;
            $perfil->cep = $request->cep;
            $perfil->rua = $request->rua;
            $perfil->bairro = $request->bairro;
            $perfil->cidade = $request->cidade;
            $perfil->uf = $request->uf;
            $perfil->numero = $request->numero;
            $perfil->observacao = $request->observacao;
            $perfil->save();

            $dados = User::where('id_user', Auth::user()->id_user)->first();
            $dados->name = $request->nome;
            $dados->situacao = 4;
            $dados->save();

        }else{ //vai criar o cadastro
            $create_perf = new Perfil();
            $create_perf->id_user = Auth::user()->id_user;
            $create_perf->sexo = $request->sexo;
            $create_perf->raca_cor = $request->raca_cor;
            $create_perf->ocupacao = $request->ocupacao;
            $create_perf->out_ocupacao = $request->out_ocupacao;
            $create_perf->dtaNascimento = implode('-', array_reverse(explode('/', $request->dtaNascimento)));
            $create_perf->instituicao = $request->instituicao;
            $create_perf->telefone = $request->telefone;
            $create_perf->celular = $request->celular;
            $create_perf->rg = $request->rg;
            $create_perf->cpf = $request->cpf;
            $create_perf->cep = $request->cep;
            $create_perf->rua = $request->rua;
            $create_perf->bairro = $request->bairro;
            $create_perf->cidade = $request->cidade;
            $create_perf->uf = $request->uf;
            $create_perf->numero = $request->numero;
            $create_perf->observacao = $request->observacao;
            $create_perf->save();

            $dados = User::where('id_user', Auth::user()->id_user)->first();
            $dados->name = $request->nome;
            $dados->situacao = 4;
            $dados->save();
        }
        return redirect('/portal/home')->with('success', true); //redireciona

    }
}
