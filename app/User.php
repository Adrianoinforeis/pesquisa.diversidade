<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public static $NIVEL_ADMIN = 1;
    public static $NIVEL_DOUTOR = 2;
    public static $NIVEL_AVALIADOR_PRELIMINAR =3;
    public static $NIVEL_PARECERISTA = 4;
    public static $NIVEL_ENTREVISTADOR = 5;
    public static $NIVEL_JURI = 6;
    public static $NIVEL_FINANCEIRO = 7;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_user';
    
    protected $fillable = [
        'name', 'email', 'password', 'nivel','acessos','excluido',
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
