<?php // arquivo principal de funções do Sitio
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

 ?>
