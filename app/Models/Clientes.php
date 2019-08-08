<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected  $fillable = [
        'cli_nome',
        'cli_qtdFuncionarios'
    ];

    protected $primaryKey = 'id_cliente';
    
    protected $guarded =[
        'id_cliente',
        'updated_at',
        'created_at'
    ];
    protected $table = 'tb_clientes';
}
