<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ResetController extends Controller
{
  public function index(){
    return view('auth.reset');
  }

  public function passreset($id_user, $email, $password){
    $data = User::where('id_user', $id_user)->where('remember_token', $password)->first();
    if($data){
    return view('auth.newpass',[
      'email' =>$email]); 
    }else{
    return redirect('/login'); //redireciona
  } 

  }
  public function confirma_cadastro($id_user, $email, $token_cadastro){
    $data = User::where('id_user', $id_user)->where('token_cadastro', $token_cadastro)->first();
    if($data){
      $data->situacao = 1;
      $data->save();
      return view('add.confirmCadastro',[
        'email' =>$email]); 
      }else{
      return redirect('/login'); //redireciona
    }

  }
}
