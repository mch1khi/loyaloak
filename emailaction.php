<?php

$leeg;
$mailFrom = ($_POST['emailAddress']);


if (isset($_POST['submitButton']) || !isset($mailFrom) || trim($mailFrom) == '') {
    print("<script>
      alert('Actie afgewezen. Probeer het later opnieuw.');
      window.location.href = 'index.php#signup';
      </script>");
} else {

    $mailFrom = ($_POST['emailAddress']);
    $mailTo = "sami@loyaloak.nl";

    $subject = "Contact aanvraag LoyalOak";
    $headers = "BCC: " . $mailTo . "\r\n";
    $body = "Beste Loyal Oak," .  "\r\n" .  "\r\n";
    $body .= "U heeft een contact aanvraag ontvangen van de volgende mail: " . $mailFrom . "\r\n" . "\r\n";
    $body .= "Met vriendelijke groeten," .  "\r\n" . "Uw automatische email";

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";

    $headers1 = "BCC:" . $mailFrom . "\r\n";
    $body1 = "Beste gebruiker," .  "\r\n" .  "\r\n";
    $body1 .= "We nemen zo spoedig mogelijk contact met u op." . "\r\n" . "\r\n";
    $body1 .= "Met vriendelijke groeten," .  "\r\n" . "Loyal Oak";


    $headers1 .= "MIME-Version: 1.0\r\n";
    $headers1 .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers1 .= "X-Priority: 3\r\n";
    $headers1 .= "X-Mailer: PHP" . phpversion() . "\r\n";

    mail($mailTo, $subject, $body, $headers);

    mail($mailFrom, $subject, $body1, $headers1);

    print("<script>
    window.location.href = 'bedankt.php';
    </script>");
}
