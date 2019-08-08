<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user'); // id do usuario
            $table->string('name'); // nome do usuario
            $table->string('email')->unique(); // email do usuario
            $table->timestamp('email_verified_at')->nullable(); // data de verificacao de email do usuario
            $table->string('password'); // senha criptografada do usuario
            $table->string('nivel')->default(0); // nivel de acesso do usuario
            $table->boolean('termo')->default(0); //Indica se o usuário aceitou ou não o termo
            $table->unsignedInteger('acessos')->default(0); // quantidade de acessos do usuario
            $table->boolean('excluido')->default(false); //Se foi enativado no caso excluido
            $table->boolean('situacao')->default(0);//Verifica se o usuário preencheu o perfil
            $table->integer('pagina')->nullable();//Indica em qual página o usuário está
            $table->integer('esqueceusenha')->nullable();//indica quantas vezes o usuário esqueceu a senha
            $table->integer('escolha')->nullable();//indica quantas vezes o usuário esqueceu a senha
            $table->string('token_cadastro')->nullable(); //vai armazenar o token do cadastro 
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
