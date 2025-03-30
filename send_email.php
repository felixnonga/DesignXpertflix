<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Destinataire de l'email
    $to = "felixmbok5@gmail.com"; // Remplace par ton adresse email

    // Sujet de l'email
    $subject = "Nouveau message de $name";

    // Corps de l'email
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    // En-têtes de l'email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Désolé, une erreur est survenue. Veuillez réessayer.";
    }
}
?>