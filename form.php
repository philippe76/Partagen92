<?php

// variables form data 
  $last_name = $_POST['last-name'];
  $first_name = $_POST['first-name'];
  $mail = $_POST['mail'];
  $commentaire = $_POST['commentaire'];

// variables for mailing form data  
  $website = "partagen92.fr";
  $email_subject = "Commentaire visiteur partagen92.fr";
  $email_body = "Auteur : $first_name $last_name. \n".
                "Adresse mail : $mail. \n".
                "Commentaire :\n $commentaire";

  $to = "p.lanougadere@gmail.com";
  $headers = "From: $website \r\n";

// mailing form data
mail($to,$email_subject,$email_body,$headers);

// redirecting
// header("Location: http://127.0.0.1:5500/index.html");
header("Location: http://127.0.0.1:5500/test.html");

?>