<?php

if(isset($_POST['email'])) && !empty ($_POST["email"]){


$nome = addslashes($_POST["name"]);
$email = addslashes($_POST["email"]);
$mensagem = addslashes($_POST["message"]);

$to = "robertmaio@outlook.com";
$subject = "Contato - Programador potfolio";
$body = "Nome: ".$name. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$message;

$header = "From: ghostrj@outlook.com"."\r\n".
            "Reply-To: ".$email"\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("Email não pode ser enviado");
    }
}

?>
