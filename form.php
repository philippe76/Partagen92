<?php
// variables form data 
  $last_name = $_POST['last_name'];
  $first_name = $_POST['first_name'];
  $mail = $_POST['mail'];
  $commentaire = $_POST['commentaire'];

// variables for mailing form data  
  $website = "partagen92.fr"
  $email_subject = "commentaire visiteur";
  $email_body = "Commentaire de $first_name $last_name. \n".
                "Voici le commentaire:\n $commentaire "

  $to = "p.lanougadere@gmail.com";
  $headers = "From: $website \r\n";


// mailing form data
  mail($to,$email_subject,$email_body,$headers);

// redirecting
    header("contact.html")


?>

