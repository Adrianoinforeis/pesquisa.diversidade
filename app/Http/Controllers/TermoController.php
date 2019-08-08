<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TermoController extends Controller
{
    public function index()
    {  $user = User::where('id_user', Auth::user()->id_user)->first(); //dados user
        return view('termo.termo',
        ['user' => $user] ); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // cria uma nova avaliacao preliminar
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sit = Auth::user()->situacao;
        if($sit == 1){
        $id = Auth::user()->id_user;
        $dados = User::where('id_user', $id)->first();
        $dados->termo = 1;
        $dados->situacao = 2;
        $dados->save();
        return redirect('/portal/escolha')->with('success', true); //redireciona
        }else{
            return redirect()->back()
            ->withInput()
            ->with(' ', '');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AvaliacaoPreliminar  $avaliacaoPreliminar
     * @return \Illuminate\Http\Response
     */
    public function show(AvaliacaoPreliminar $avaliacaoPreliminar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AvaliacaoPreliminar  $avaliacaoPreliminar
     * @return \Illuminate\Http\Response
     */
    public function edit(AvaliacaoPreliminar $avaliacaoPreliminar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AvaliacaoPreliminar  $avaliacaoPreliminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AvaliacaoPreliminar $avaliacaoPreliminar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AvaliacaoPreliminar  $avaliacaoPreliminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(AvaliacaoPreliminar $avaliacaoPreliminar)
    {
        //
    }
}
