<?php
include('connection.php');


$src = $_POST['src'];
$link =$_POST['link'];
$name =$_POST['name'];

//echo "$name, $src, $link";

$conn = getConnection();

$sql = "INSERT INTO imagens (scr, link, name) VALUES (?, ? ,?)";

$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $src);
$stmt->bindValue(2, $link);
$stmt->bindValue(3, $name);

  if($stmt->execute()){
    echo "Salvo!";
      }else {
      echo "Erro ao salvar!";
    }
echo "<a href='../index.php'>Voltar</a>";
echo "<a href='../updater.php'>Continuar</a>";
