<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Change this to your email address
    $to = "vimalnewlap@gmail.com";  

    $subject = "New Contact Form Message from $name";
    $body = "
    Name: $name
    Phone: $phone
    Email: $email
    Message: 
    $message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Message sent successfully!</h2>";
    } else {
        echo "<h2>Message sending failed. Please try again later.</h2>";
    }
} else {
    echo "<h2>Invalid request.</h2>";
}
?>
