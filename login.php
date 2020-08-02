<?php
require('view/templates/header.php');
require('model/connection.php');

$conn = getConnection();
$sql = "SELECT * FROM users WHERE email like ?";
$stmt = $conn->prepare($sql);

$form = new stdClass();
$form->action = "./login.php";
$form->email = "";
$form->pass = "";
$form->message = "";
require ('view/components/login.php');

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if($post){

    $post = array_map("trim", $post);
/* just for debug
    echo 'antes... <pre class="p-3">';
    var_dump($post);
    echo '</pre>';
*/
    if(in_array('',$post)){
        echo 'Preencha todos os campos!';

    } elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Erro, Email ou senha inválido';

    } else {

        $saveStrip = array_map("strip_tags", $post);
        $save = array_map("trim", $saveStrip);

     /*just for debug :D
      *  $user =[
      * 'email' => 'jovemblood@gmail.com',
      * 'pass' => "!(#@!!#th12139113"
    ];*/
        $stmt->bindValue(1,$save['email']);
        if($stmt->execute()){
            $user = $stmt->fetchAll();
        /*
         * just for debug :D
         *  echo 'antes... <pre class="p-3">';
         *  var_dump($user);
         *  echo '</pre>';
         */
            if(isset($user[0])){
                if(password_verify($save['pass'], $user[0]['pass'])){
                    echo "<h1>Bem Vindo de volta, Shujin-Sama</h1>";
                }else{
                    echo "Erro, email ou Senha incorreto";
                }

            }else echo "email ou senha incorreto";


        }else{
            echo "erro com o banco de dados, tente novamente mais tarde";
        }



    }
}
//end!


require('view/templates/footer.php');