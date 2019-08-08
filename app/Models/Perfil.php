<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected  $fillable = [
        'id_user',
        'sexo',
        'raca_cor',
        'ocupacao',
        'out_ocupacao',
        'dtaNascimento',
        'instituicao',
        'telefone',
        'celular',
        'rg',
        'cpf',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'uf',
        'numero',
        'observacao'

    ];

    protected $primaryKey = 'id_perfil';
    
    protected $guarded =[
        'id_perfil',
        'updated_at',
        'created_at'
    ];
    protected $table = 'perfil';
}
