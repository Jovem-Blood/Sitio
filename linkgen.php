<?php
require('model/connection.php');
function gen(){
  $conn = getConnection();
  $sql = "SELECT * FROM imagens";

  $stmt = $conn->prepare($sql);
  if($stmt->execute()){
    return json_encode($stmt->fetchAll());
  }else{
    return "Falha ao conectar, Erro:".$stmt->errorCode();
  }

}

