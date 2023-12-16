<?php
$name = addcslashes($_POST['name']);
$lastname = addcslashes($_POST['lastname']);
$cpf = addcslashes($_POST['cpf']);
$date = addcslashes($_POST['date']);
$gender = addcslashes($_POST['gender']);
$country = addcslashes($_POST['country']);
$email = addcslashes($_POST['email']);
$formation = addcslashes($_POST['formation']);


$to = "raulntjj@gmail.com";
$subject = "Cadastro";

$body = "Nome: " .$name. $lastname.
        "CPF: " .$cpf. "\n".
        "Data de aniversário: " .$date. "\n".
        "Gênero: " .$gender. "\n".
        "País de residência: " .$country. "\n".
        "Email de contato: " .$email. "\n".
        "Formação: " .$formation;

$header = "From: raulntjj@gmail.com"."\n".
        "Reply-to: " .$email."\n".
        "X=Mailer:PHP/". phpversion();

if(mail($to, $subject, $body, $header)){
    echo("Formulário enviado!");
}
else{
    echo("Erro!");
}

?>