<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'assets/vendor/autoload.php';

$emailResult = false;
if(isset($_POST["origin"])) {
    $origin = $_POST["origin"];
    $message = "";

    //Setup variables
    if($origin == "applyNowForm") {
        $subject = 'Apply Now Form Submission';
        $from = "recipient@gmail.com";
        $fromName = "j4Sail Theme";
    }

    //Collect post items into a message
    unset($_POST["origin"]);
    foreach ($_POST as $key => $value) {
        $message .= "<div>" . $key . ": " . $value . "</div>";
    }

    //PHPMailer start
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Recipients
        $mail->setFrom($from, $fromName);
        $mail->addAddress($from); // Add a recipient
        $mail->addReplyTo($from, $fromName);
        $mail->addCC('recipient@gmail.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        if($origin == "applyNowForm" && !empty($_FILES)) {
            $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']); // Optional name
        }
        
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $emailResult = true;

    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $emailResult = false;
    }
}

$result = [
    "email_status" =>  $emailResult
];
echo json_encode($result);
