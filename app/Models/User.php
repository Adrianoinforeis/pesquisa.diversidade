<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    const NIVEL_ADMIN = 1;
    const NIVEL_DOUTOR = 2;
    const NIVEL_AVALIADOR_PRELIMINAR =3;
    const NIVEL_PARECERISTA = 4;
    const NIVEL_ENTREVISTADOR = 5;
    const NIVEL_JURI = 6;
    const NIVEL_FINANCEIRO = 7;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name', 'email', 'password', 'nivel','acessos','excluido','escolha', 'token_cadastro'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
