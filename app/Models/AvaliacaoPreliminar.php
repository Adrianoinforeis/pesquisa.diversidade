<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoPreliminar extends Model
{
    protected $table = 'avaliacao_preliminares';
    protected $primaryKey = 'avaliacao_preliminar_id';

    protected $fillable = [
        'inscrito_id',
        'avaliador_id',
        'pergunta1',
        'opcao1'
    ];


}
