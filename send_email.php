<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's email from the form
    $userEmail = filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL);

    // Set the recipient email address
    $to = "soon@hpa.com.np";

    // Set the email subject
    $subject = "New Notification Request from Coming Soon Page";

    // Set the email body
    $body = "You have received a new notification request. \n\nEmail: " . $userEmail;

    // Set the email headers
    $headers = "From: no-reply@hpa.com.np" . "\r\n" .
               "Reply-To: no-reply@hpa.com.np" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! You will be notified.";
    } else {
        echo "There was an error, please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
