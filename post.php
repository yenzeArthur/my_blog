<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "mac832arthur@gmail.com"; // Your email address
    $subject = "From afri-gizmo";
    $body = "Message: $message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for reaching out. I have received your message and will be in touch.";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
