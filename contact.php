<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "limmysnaturals@gmail.com"; // Replace with your email address
    $headers = "From: " . $email;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to post-submission page
        header('Location: post-submission.html');
        exit();
    } else {
        echo "Message sending failed. Please try again.";
    }
}
?>
