<?php // arquivo principal de funções do Sitio
function reader($manga, $cap){
    $cod = file_get_contents("https://yesmangas1.com/manga/$manga/$cap#1");
/*
    $url1 = explode('["', $cod);
    $url2 = explode(']"', $url1[1]);
    $url3 = explode('>"];', $url2[0]);
    $furl= str_replace('href=','name=',$url3[0]);
    $ffurl = str_replace('","','',$furl);

    return $ffurl;*/
    preg_match_all("/'img_[0-9]{1,2}' src='[a-zA-Z0-9_:\-\/.]{1,}/", $cod, $url);
    return $url[0];
}
function get_cap($manga){
    $l = file_get_contents("https://yesmangas1.com/manga/$manga");
    //preg_match_all('\"\>[0-9]{1,3}\<\/a/',$l, $result);
    preg_match_all('/title="Ler Online - Cap/',$l,$tresult);

    $int = count($tresult[0]);

    if(preg_match_all("/Ler Online - Cap&iacute;tulo #especial-/",$l,$rr)){
        $int -=count($rr[0]);
    }
    if(preg_match_all('/Ler Online - Cap&iacute;tulo #extra-/',$l,$r3)){
        $int -=count($r3[0]);
    }

    return $int;

}
function get_things($manga){
    $l = file_get_contents("https://yesmangas1.com/manga/$manga");
    $ex1 = explode('<ul>',$l);
    $ex2 = explode('</ul>',$ex1[1]);
    return $ex2[0];
}

