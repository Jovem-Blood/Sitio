<?php
function reader($manga, $cap){

    $cod = file_get_contents("https://yesmangas1.com/manga/$manga/$cap#1");
    $url1 = explode('["', $cod);
    $url2 = explode(']"', $url1[1]);
    $url3 = explode('>"];', $url2[0]);
    $furl= str_replace('href=','name=',$url3[0]);
    $ffurl = str_replace('","','',$furl);

    return $ffurl;
}
function get_cap($manga){
    $l = file_get_contents("https://yesmangas1.com/manga/$manga");
    preg_match_all('/"\>[0-9]{1,3}\<\/a/',$l, $result);
    $tresult = count($result[0]);

    return $tresult;

}
function get_things($manga){
    $l = file_get_contents("https://yesmangas1.com/manga/$manga");
    $ex1 = explode('<ul>',$l);
    $ex2 = explode('</ul>',$ex1[1]);
    return $ex2[0];
}

function soma(){
      $p = func_get_args();   //pega os valores de cada arg da função, transformando a variável em um array
      $tot = func_num_args(); //pega o número de arg da função ex: (4, 2, 5, 6), a $tot retornaria 3 que é o número de indices
      $s = 0; //valor inicial de soma
      for($i = 0; $i<$tot; $i++){ // $i será o número do indice que $p irá procurar, começando com 0 e indo até onde o valor de $tot for
          $s += $p[$i]; //$p[$i] pega o valor do que está no indice $i

      }
      return $s; //jogando resultado da função para a variável $s
  }
   $res = soma( 1, 4, 5);
   return $res;

 ?>
