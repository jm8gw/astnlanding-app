<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'jeffreymouritzen@gmail.com'; // Your email address
    $mailsubject = 'New message from ASTN';
    $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $mailsubject, $body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Error sending message.';
    }
} else {
    echo 'Invalid request.';
}
?>
