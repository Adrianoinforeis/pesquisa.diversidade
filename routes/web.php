<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/','/home');

//  Route::get('/', function () {
//      if( Auth::user())
//      { //se estiver logado vai para home
//          return redirect('/home');
//      }else{
//          return view('login');
//      }
//  });

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/reset', 'ResetController@index')->name('index');

Route::get('/passreset/{id_user}/{email}/{password}', 'ResetController@passreset')->name('passreset'); //link que vem do e-mail
Route::get('/confirma_cadastro/{id_user}/{email}/{token_cadastro}', 'ResetController@confirma_cadastro')->name('confirma_cadastro'); //link que vem do e-mail


Route::get("login", "Auth\LogarController@login")->name('login');  //rota de login
Route::get("register", "Auth\CadastrarController@register");  //rota de login
Route::post("cadastrar", "Auth\CadastrarController@cadastrar");  //rota de login
Route::get("forgotpassword", "Auth\ResetPassword@indexreset");  //rota de login request
Route::post("reset", "Auth\ResetPassword@reset");  //rota de login
Route::post("upgrade", "Auth\ResetPassword@upgrade");
Route::get("cadastroPendente", "Auth\LogarController@cadastroPendente")->name('cadastroPendente');  //rota que reseta o usuário e informa para verificar no e-mail
//Route::get("confirma_cadastro/{id_user}/{email}/{token_cadastro}',", "Auth\LogarController@confirma_cadastro")->name('confirma_cadastro');  //rota de login



Route::group(['prefix' => 'portal'], function(){ //vai exibir os detalhes de cada evento

    Route::post("/autenticacao", "Auth\\LogarController@autenticacao")->name('autenticacao');

    Route::get("termo", "TermoController@index")->name('index');
    Route::post("aceito_termo", "TermoController@store")->name('store');

    Route::get("perfil", "PerfilController@perfil")->name('perfil');
    Route::post("perfil_add", "PerfilController@perfil_add")->name('perfil_add');

    Route::get("perfil_editar", "PerfilController@perfil")->name('perfil');

    Route::get("escolha", "PortaisController@escolha")->name('escolha');
    Route::post("pesquisa", "PortaisController@pesquisa")->name('pesquisa');
    Route::post("artigo", "PortaisController@artigo")->name('artigo');
     Route::get("home", "PortaisController@home")->name('home');
     Route::get("Logout", "PortaisController@Logout")->name('sair');

     Route::post("deleteanexo", "InclusaoController@deleteanexo")->name('deleteanexo');


    Route::post("incluir_user", "Auth\\CadastrarController@incluir_user")->name('incluir_user');
    Route::get("alterar", "Auth\\CadastrarController@alterar")->name('alterar');
    Route::post("senha", "Auth\\CadastrarController@senha")->name('senha');

});

