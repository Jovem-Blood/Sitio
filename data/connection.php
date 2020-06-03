<?php

/**
*
* @return \PDO
*/

function getConnection(){
$dsn = "mysql:host=localhost;dbname=site02";
$user = "root";
$pass = "";
  try{
    $pdo = new PDO($dsn, $user,$pass);

    return $pdo;
  }catch(PDOException $e) {
    echo "Erro: ". $e->getMessage() ;
  }

}
