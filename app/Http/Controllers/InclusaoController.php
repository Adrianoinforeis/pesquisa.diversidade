<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Anexos;
use App\Models\Social;
use App\Models\User;
use \Auth;

class InclusaoController extends Controller
{
    public function sequencia2(Request $request){
        $user = Social::where('id_user', Auth::user()->id)->first();
        if($user == '' || $user == null){
        //adiciona
        $censo = new Social();
        $censo->id_user = Auth::user()->id;
        $censo->projeto = $request->projeto;
        $censo->autor = $request->autor;
        $censo->escolaridade = $request->escolaridade;
        $censo->especializacao = $request->especializacao;
        $censo->instituicao = $request->instituicao;
        $censo->at_principal = $request->at_principal;
        $censo->vi_inst = $request->vi_inst;
        $censo->faculdade = $request->faculdade;
        $censo->titulo_proj = $request->titulo_proj;
        $censo->palavra_cha = $request->palavra_cha;
        $censo->save();
        }else{
        //Atualiza  
        $user->projeto = $request->projeto;
        $user->autor = $request->autor;
        $user->escolaridade = $request->escolaridade;
        $user->especializacao = $request->especializacao;
        $user->instituicao = $request->instituicao;
        $user->at_principal = $request->at_principal;
        $user->vi_inst = $request->vi_inst;
        $user->faculdade = $request->faculdade;
        $user->titulo_proj = $request->titulo_proj;
        $user->palavra_cha = $request->palavra_cha;
        $user->save();
        }


        //atualiza informações de página
        $id = Auth::user()->id;
        $dados = User::where('id', $id)->first();
        $dados->pagina = 1;
        $dados->save();
    
        //$cliente = Clientes::where('id_cliente', Auth::user()->id_cliente)->first();
        //$cliente->cli_pagina = 1;
       // $cliente->save();


        if($request->btn_salvar_cont == null){
        return redirect('/portal/sequencia2')->with('success', true); //redireciona
        }else{
        return redirect('/portal/home')->with('success', true); //redireciona
        }
    }  

    
    

    public function final(Request $request){
        $user = Censo6::where('id_user', Auth::user()->id)->first();
        $user1 = Censo7::where('id_user', Auth::user()->id)->first();
        
        if($user == '' || $user == null && $user1 == 11 || $user1 == null){
        $censo = new Censo6();
        $censo1 = new Censo7();
        $censo->id_user = Auth::user()->id;
        $censo->nao17    =  $request->nao17; 
        $censo->racacor17    =  $request->racacor17;   
        $censo->servicos17   =  $request->servicos17;  
        $censo->programa17   =  $request->programa17;   
        $censo->financeira17 =  $request->financeira17; 
        $censo->apoio17      =  $request->apoio17;     
        $censo->projeto17    =  $request->projeto17;    
        $censo->educacao17   =  $request->educacao17;   
        $censo->curso17      =  $request->curso17;      
        $censo->captacao17   =  $request->captacao17;   
        $censo->bolsa17      =  $request->bolsa17;      
        $censo->outros17     =  $request->outros17;     
        $censo->especifique17 = $request->especifique17;
        $censo->genero17     =  $request->genero17;     
        $censo->g_des17      =  $request->g_des17;      
        $censo->g_pro17      =  $request->g_pro17;      
        $censo->g_cur17      =  $request->g_cur17;      
        $censo->g_apoi17     =  $request->g_apoi17;     
        $censo->g_ap17       =  $request->g_ap17;       
        $censo->g_ed17	     =  $request->g_ed17;	     
        $censo->g_cu17       =  $request->g_cu17;       
        $censo->g_cap17      =  $request->g_cap17;      
        $censo->g_bol17      =  $request->g_bol17;      
        $censo->g_outros17   =  $request->g_outros17;   
        $censo->g_especif17  =  $request->g_especif17;  
        $censo->lgbt17       =  $request->lgbt17;       
        $censo->l_des17      =  $request->l_des17;      
        $censo->l_pro17      =  $request->l_pro17;      
        $censo->l_cur17      =  $request->l_cur17;      
        $censo->l_ap17       =  $request->l_ap17;       
        $censo->l_proj17     =  $request->l_proj17;     
        $censo->l_ed17       =  $request->l_ed17;       
        $censo->l_cu17       =  $request->l_cu17;       
        $censo->l_ca17       =  $request->l_ca17;       
        $censo->l_bol17      =  $request->l_bol17;      
        $censo->l_outros17   =  $request->l_outros17;   
        $censo->l_especif17  =  $request->l_especif17;  
        $censo->pcd17        =  $request->pcd17;        
        $censo->p_des17      =  $request->p_des17;      
        $censo->p_pro17      =  $request->p_pro17;      
        $censo->p_cur17      =  $request->p_cur17;      
        $censo->p_apoio17    =  $request->p_apoio17;    
        $censo->p_apoi17     =  $request->p_apoi17;     
        $censo->p_edu17      =  $request->p_edu17;      
        $censo->p_curso17    =  $request->p_curso17;    
        $censo->p_cap17      =  $request->p_cap17;      
        $censo->p_bol17      =  $request->p_bol17;      
        $censo->p_out17      =  $request->p_out17;      
        $censo->p_especi17   =  $request->p_especi17;   
        $censo->outro17camp  =  $request->outro17camp;  
        $censo->outro_campo17 = $request->outro_campo17;
        $censo->save();

        $censo1->id_user = Auth::user()->id;

        $censo1->ca_18_1   = $request->ca_18_1;	
        $censo1->ca_18_2   = $request->ca_18_2;	
        $censo1->ca_18_3   = $request->ca_18_3;	
        $censo1->ca_18_4   = $request->ca_18_4;	
        $censo1->ca_18_5   = $request->ca_18_5;	
        $censo1->ca_18_6   = $request->ca_18_6;	

        $censo1->outroes18     = $request->outroes18;  
        $censo1->banco19       = $request->banco19;      
        $censo1->especifique19 = $request->especifique19;
        $censo1->cliente20     = $request->cliente20;    
        $censo1->especifique20 = $request->especifique20;
        $censo1->campanhas21   = $request->campanhas21;  
        $censo1->especifique21 = $request->especifique21;
        $censo1->desafio22     = $request->desafio22;    
        $censo1->medio22       = $request->medio22;      
        $censo1->longo22	   = $request->longo22;	     
        $censo1->equidade23    = $request->equidade23;   
        $censo1->genero23      = $request->genero23;     
        $censo1->deficiente23  = $request->deficiente23; 
        $censo1->lgbt23        = $request->lgbt23;       
        $censo1->outros23      = $request->outros23;  
        $censo1->save();

        }else{
        $user->nao17    =  $request->nao17; 
        $user->racacor17    =  $request->racacor17;   
        $user->servicos17   =  $request->servicos17;  
        $user->programa17   =  $request->programa17;   
        $user->financeira17 =  $request->financeira17; 
        $user->apoio17      =  $request->apoio17;     
        $user->projeto17    =  $request->projeto17;    
        $user->educacao17   =  $request->educacao17;   
        $user->curso17      =  $request->curso17;      
        $user->captacao17   =  $request->captacao17;   
        $user->bolsa17      =  $request->bolsa17;      
        $user->outros17     =  $request->outros17;     
        $user->especifique17 = $request->especifique17;
        $user->genero17     =  $request->genero17;     
        $user->g_des17      =  $request->g_des17;      
        $user->g_pro17      =  $request->g_pro17;      
        $user->g_cur17      =  $request->g_cur17;      
        $user->g_apoi17     =  $request->g_apoi17;     
        $user->g_ap17       =  $request->g_ap17;       
        $user->g_ed17	     =  $request->g_ed17;	     
        $user->g_cu17       =  $request->g_cu17;       
        $user->g_cap17      =  $request->g_cap17;      
        $user->g_bol17      =  $request->g_bol17;      
        $user->g_outros17   =  $request->g_outros17;   
        $user->g_especif17  =  $request->g_especif17;  
        $user->lgbt17       =  $request->lgbt17;       
        $user->l_des17      =  $request->l_des17;      
        $user->l_pro17      =  $request->l_pro17;      
        $user->l_cur17      =  $request->l_cur17;      
        $user->l_ap17       =  $request->l_ap17;       
        $user->l_proj17     =  $request->l_proj17;     
        $user->l_ed17       =  $request->l_ed17;       
        $user->l_cu17       =  $request->l_cu17;       
        $user->l_ca17       =  $request->l_ca17;       
        $user->l_bol17      =  $request->l_bol17;      
        $user->l_outros17   =  $request->l_outros17;   
        $user->l_especif17  =  $request->l_especif17;  
        $user->pcd17        =  $request->pcd17;        
        $user->p_des17      =  $request->p_des17;      
        $user->p_pro17      =  $request->p_pro17;      
        $user->p_cur17      =  $request->p_cur17;      
        $user->p_apoio17    =  $request->p_apoio17;    
        $user->p_apoi17     =  $request->p_apoi17;     
        $user->p_edu17      =  $request->p_edu17;      
        $user->p_curso17    =  $request->p_curso17;    
        $user->p_cap17      =  $request->p_cap17;      
        $user->p_bol17      =  $request->p_bol17;      
        $user->p_out17      =  $request->p_out17;      
        $user->p_especi17   =  $request->p_especi17;   
        $user->outro17camp  =  $request->outro17camp;  
        $user->outro_campo17 = $request->outro_campo17;
        $user->save();

        $user1->ca_18_1   = $request->ca_18_1;	
        $user1->ca_18_2   = $request->ca_18_2;	
        $user1->ca_18_3   = $request->ca_18_3;	
        $user1->ca_18_4   = $request->ca_18_4;	
        $user1->ca_18_5   = $request->ca_18_5;	
        $user1->ca_18_6   = $request->ca_18_6;	

        $user1->outroes18     = $request->outroes18;  
        $user1->banco19       = $request->banco19;      
        $user1->especifique19 = $request->especifique19;
        $user1->cliente20     = $request->cliente20;    
        $user1->especifique20 = $request->especifique20;
        $user1->campanhas21   = $request->campanhas21;  
        $user1->especifique21 = $request->especifique21;
        $user1->desafio22     = $request->desafio22;    
        $user1->medio22       = $request->medio22;      
        $user1->longo22	   = $request->longo22;	     
        $user1->equidade23    = $request->equidade23;   
        $user1->genero23      = $request->genero23;     
        $user1->deficiente23  = $request->deficiente23; 
        $user1->lgbt23        = $request->lgbt23;       
        $user1->outros23      = $request->outros23; 
        $user1->save();
        }

        #################################anexando###########################
                // Define o valor default para a variável que contém o nome da imagem 
                $nameFile = null;

                // Verifica se informou o arquivo e se é válido
                if ($request->hasFile('img_file') && $request->file('img_file')->isValid()) {

                    // Define um aleatório para o arquivo baseado no timestamps atual
                    $name = uniqid(date('HisYmd'));
                    // $id = Auth::user()->id;
        
                    // Recupera a extensão do arquivo
                    $extension = $request->img_file->extension();
        
                    // Define finalmente o nome
                    $nameFile = "{$name}.{$extension}";
        
                    // Faz o upload:
                    $upload = $request->img_file->storeAs('uploads', $nameFile, 'public_uploads');
                    // Se tiver funcionado o arquivo foi armazenado em storage/app/public/img/nomedinamicoarquivo.extensao
                    // Verifica se NÃO deu certo o upload (Redireciona de volta)

               // dd($request->file('img_file'));
                    if (!$upload)
                        return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
        
                $anexos = new Anexos();        
                $anexos->id_cliente = Auth::user()->id_cliente;
                $anexos->nome = $nameFile;
                $anexos->nome_original = $request->img_file->getClientOriginalName();
                $anexos->apelido = Auth::user()->name.'_'.$request->img_file->getClientOriginalName();
                $anexos->save();
                }
        #################################fim anexando###########################



         //atualiza informações de página
         $id = Auth::user()->id;
         $dados = User::where('id', $id)->first();
         $dados->pagina = 6;
         $dados->save();
     
         $cliente = Clientes::where('id_cliente', Auth::user()->id_cliente)->first();
         $cliente->cli_pagina = 6;
         $cliente->save();

        if($request->btn_salvar_cont == null){
            return redirect('/aplicacao/finalizar'); //redireciona
            }else{
            return redirect('/aplicacao/sequencia6')->with('success', true); //redireciona
            } 
    }

    public function finalizar(){
        $cli = Clientes::where('id_cliente', Auth::user()->id_cliente)->get();
        return view('termino.finalizado',
            ['cliente' => $cli]    
        );



        $id = Auth::user()->id;
        $dados = User::where('id', $id)->first();
        $dados->termo = 1;
        $dados->situacao = 1;
        $dados->save();
    
        $cliente = Clientes::where('id_cliente', Auth::user()->id_cliente)->first();
        $cliente->cli_situacao = 1;
        $cliente->save();
    
    
    
        //return redirect('/aplicacao/home')->with('success', true); //redireciona
    }
    public function deleteanexo(Request $request){
        $anexos = Anexos::where('id', $request->id_anexo)->delete();
        return redirect('/portal/sequencia6')->with('success', true); //redireciona
    }

}
