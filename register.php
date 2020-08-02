<?php
require('view/templates/header.php');
require('model/connection.php');

$conn = getConnection();
$sql = "INSERT INTO users(email,pass) VALUES (?,?)";
$stmt = $conn->prepare($sql);


$form = new stdClass();
$form->action = "./register.php";
$form->email = "";
$form->pass = "";
$form->pass2 = "";
require ('view/components/register.php');

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if($post){
    echo 'antes... <pre class="p-3">';
    var_dump($post);
    echo '</pre>';



    $post = array_map("trim", $post);
    if(in_array('',$post)){
        echo 'Preencha todos os campos!';


        /* echo 'antes... <pre class="p-3">';
        var_dump($post);
        echo '</pre>';*/

    } elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Erro, o email foi colocado de forma inválida.';

    } elseif($post['pass'] !== $post['pass2']){
        echo "as senhas precisan ser idênticas.";

    }else{

        $saveStrip = array_map("strip_tags", $post);
        $save = array_map("trim", $saveStrip);
        $savePass = password_hash($save['pass'], PASSWORD_DEFAULT);

        $stmt->bindValue(1,$save['email']);
        $stmt->bindValue(2,$savePass);

        if($stmt->execute()){
            echo "você foi cadastrado! :D";
        }elseif($stmt->errorCode() == "23000"){
            echo "o email informado já está sendo ultilizado";
        }else{
            echo "erro com o banco de dados, tente novamente mais tarde, PDO erro: ".$stmt->errorCode().$stmt->errorInfo();
        }

    }
}
//end!


require('view/templates/footer.php');