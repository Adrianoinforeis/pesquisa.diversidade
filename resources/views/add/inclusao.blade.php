@extends('layouts.template')

@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/dados-pessoais.css')}}">
<script src="{{URL::asset('js/tinymce/tinymce.min.js')}}"></script>

<div class="col-sm-12 col-12 col-md-9 col-xl-10 col-lg-10">
    <div class="bloco-total">
        <div class="dados-pessoais-titulo evento-titulo">
            <h1>Incluir projeto</h1>
        </div>




  <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="bloco">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="conteudo-bloco padding">
                                <div class="conteudo-texto">
                                    <span class="campo-obrigatorio">Campos com * são  obrigatório</span>
                                </div>
                                <form action="{{('\portais/add_projeto')}}" method="post" enctype="multipart/form-data" id="caduser" name="" data-toggle="validator" role="form">
                                            {{ csrf_field()}}
                                            <div class="tab-content">

                                                <!-- Content Nav Tabs 1 -->
                                                <div class="active tab-pane" id="aba1">

                                                    <div class="row fluid">
                                                
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label for="titulo" class="control-label">*URL</label>
                                                                <input class="form-control campos_form" name="url" required="" data-error="Por favor, informe o título do evento">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label for="titulo" class="control-label">*Local</label>
                                                                <input class="form-control campos_form" name="local" required="" data-error="Por favor, informe o local do evento">
                            
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="controls form-group">
                                                                <label for="nome" class="control-label">*Usuário</label>
                                                                <input  type="text" name="usu" id="" class="form-control campos_form" required value="" data-error="">
                            
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="controls form-group">
                                                                <label for="nome" class="control-label">*Password</label>
                                                                <input type="text" name="pass" id="" class="form-control campos_form" required value="" data-error="">
                            
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="controls form-group">
                                                                <label for="nome" class="control-label">*Arquitetura</label>
                                                                <select  name="arq" class="form-control campos_form" required value="">
                                                                <option value="0">Nenhuma</option>
                                                                @php foreach($projetos as $projeto){ @endphp
                                                                <option value="{{$projeto->id_projetos}}">{{$projeto->url}}</option>
                                                               @php } @endphp
                                                                </select>
                                                            </div>
                                                        </div>
                                    
  



        
 

                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <br />
                                                <button title="Cadastrar" id="btn_abcham" name="btn_abcham" class="btn btn-xs btn-mini btn-participar"><i class="fa fa-check-circle" aria-hidden="true"></i> Cadastrar</button>
                                            </div>
                                            </div>
                                        </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>




</div>
</div>  

@endsection