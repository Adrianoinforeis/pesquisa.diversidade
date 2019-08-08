<?php

namespace App\Http\Controllers\AvaliacaoPreliminar;

use App\Models\AvaliacaoPreliminar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // lista todos as incricoes
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
        //
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
