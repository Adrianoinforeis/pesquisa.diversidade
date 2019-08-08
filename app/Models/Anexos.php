<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anexos extends Model
{
    protected  $fillable = [
        'id',
        'id_cliente',
        'apelido',
        'nome'
    ];

    protected $primaryKey = 'id';
    
    protected $guarded =[
        'id',
        'updated_at',
        'created_at'
    ];
    protected $table = 'tb_upload';
}
