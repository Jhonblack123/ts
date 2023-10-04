<?php

  $nome = addcslashes($_POST{'nome'});
  $email = addcslashes($_POST{'email'});
  $celular = addcslashes($_POST('celular'));

  $para = "dieguitoalves2004@gmail.com";
  $assunto = "Coleta de dados -  TECNOLOGY INTERPRISE.";
  
  $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular:".$celular;

  $cabeca = "from: dieguitoalves2004@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

  if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
  }else{
    echo("Houve um erro ao enviar o email!");
  }

?>