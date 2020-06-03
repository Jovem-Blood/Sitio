<?php

function gen(){
  $host = "localhost";
    $user = "root";
    $pass = "";
    $data = "site02";

    $mysqli = new mysqli($host, $user, $pass, $data);
  	if($mysqli->connect_error) {
		echo "ERRO DE CONEXÃO COM O BANCO DE DADOS";
		exit();
    }
    $i = 0;
    $res = $mysqli->query("SELECT * FROM imagens");
    while ($row = mysqli_fetch_array($res)){
    $src[$i] = $row['scr'];
    $link[$i] = $row['link'];
    $name[$i] = $row['name'];
    $array = [$src, $link, $name];

    $i++;
    }

    return $array;
}
?>
