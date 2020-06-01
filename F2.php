<?php
function reader(){

  $cap = $_GET["cap"];
  $manga = $_GET["manga"];

  if($manga !== 'darwins-game'){
    $num = 1;
    $png = '';
    $try =0;
    $manga=='kimetsu-no-yaiba'?$png='.png':$png='.jpg';
    do{
    $n = 0;
    $num>9?$n="":$n=0;
    $link=["https://img-yes.filestatic1.xyz/mangas_files/$manga/$cap/$n$num$png","https://comicspace.com.br/uploads/manga/ptbrperfect-half/chapters/$cap/$n$num.jpg","https://img-host.filestatic1.xyz/images/darwins-game/$cap/img0000$n$num.jpg.webp"];


    $path_headers = @get_headers($path);
    if(!$path_headers || $path_headers[0] == 'HTTP/1.1 404 Not Found'){
      $try++; //$try =+1
      $try>3?$error=true:$error=false;// se chegar a 3 o erro é declarado senão o código segue
      $try==1?$png='.png':$png='.jpg';
    }else{
      $error = false;
      echo "<img class='page' style='max-width: 800px;' alt='página' src='$path'>";
      $num++;
      }
    }while($error == false);

  }else {
  $num = 0;
  do{
  $n = 0;
  $num>9?$n="":$n=0;
  $path = "https://img-host.filestatic1.xyz/images/darwins-game/$cap/img0000$n$num.jpg.webp";
  $path_headers = @get_headers($path);
  if(!$path_headers || $path_headers[0] == 'HTTP/1.1 403 Forbidden'){

    $error = true;
  }else{
    $error = false;
    echo "<img class='page' style='max-width: 800px;' alt='página' src='$path'>";
    $num++;
    }
  }while($error == false);

  
}


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
   echo $res;
 ?>
