<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Social extends Model
{
    protected  $fillable = [
        'id_user',
        'cli_nome',
        'id_user',
        'autor',
        'escolaridade',
        'especializacao',
        'instituicao',
        'at_principal',
        'vi_inst',
        'faculdade',
        'titulo_proj',
        'palavra_cha'
    ];

    protected $primaryKey = 'id_social';
    
    protected $guarded =[
        'id_social',
        'updated_at',
        'created_at'
    ];
    protected $table = 'social';
    public function acomp($id_banco){
        $query = DB::table('users')
        ->join('social', 'users.id_user', '=', 'social.id_user')
        ->select('social.*','users.name', 'users.id', 'users.id_cliente')
        ->where('users.id_cliente', $id_banco);
        return $query->first();
    }
}
