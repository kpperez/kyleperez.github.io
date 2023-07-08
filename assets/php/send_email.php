// Fetch form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$human = isset($_POST['human']) ? $_POST['human'] : 'Unchecked';

// Check if the human checkbox is checked
if ($human === 'Checked') {
    // Set up email parameters
    $to = "kyle.p.perez.92@gmail.com"; // Replace with your email address
    $subject = "New form submission";
    $headers = "From: $email";

    // Compose the email body
    $body = "Name: $name\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n\n";
    $body .= "Human verification: $human";

    // Send the email
    $mailSent = mail($to, $subject, $body, $headers);

    // Check if the email was sent successfully
    if ($mailSent) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Please confirm that you are a human.";
}
