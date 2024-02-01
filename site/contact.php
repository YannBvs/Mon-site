<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "y.boisvilliers@rt-iut.re";
    $headers = "De : $email";

    mail($to, $subject, $message, $headers);
}
?>
