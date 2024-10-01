<?php

$toEmail = getenv('TO_EMAIL'); // Use environment variable for recipient
$subject = 'New Push to Main Branch';
$message = 'A new commit has been pushed to the main branch.';
$headers = 'From: sender@example.com' . "\r\n" . // Change to a valid sender email
           'Reply-To: sender@example.com' . "\r\n" . // Change as needed
           'X-Mailer: PHP/' . phpversion();

// Send email using PHP mail function
if (mail($toEmail, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Error: Email not sent.";
}
