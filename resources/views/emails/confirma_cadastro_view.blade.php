<?php
function limitChars_ins($text, $limit = 4) {
  $join = array();
  $ArrayString = explode(" ", $text);

  if ($limit > count($ArrayString)) {
    $limit = count($ArrayString) / 2;
  }

  foreach ($ArrayString as $key => $word) {
    $join[] = $word;
    if ($key == $limit) {
      break;
    }
  }
    //print_r($join);
  return implode(" ", $join) .'';
}

$pass = str_replace('/', '!', $dados->password);
?>
<p>Prezado(a) {{limitChars_ins($dados->name, 0)}}, </p>

 

<p>Seu cadastro foi realizado com sucesso, segue o link para confirmar!</p>
<p><a href="{{URL('confirma_cadastro/'.$dados->id_user.'/'.$dados->email.'/'.$dados->token_cadastro.'')}}" class="btn btn-success">Confirmar cadastro<a/></p>

<p>O CEERT agradece o seu interesse em nossa instituição</p>

<p></p>


 

<p>Atenciosamente,</p>
<p>Coordenação do Programa Itaú Social</p>