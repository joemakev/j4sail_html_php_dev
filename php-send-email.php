<?php 
$emailResult = false;

if(isset($_POST["origin"])) {
    $origin = $_POST["origin"];
    $message = "";

    //Setup variables
    if($origin == "contact") {
        $subject = 'Contact Form Submission';
        $from = "test@gmail.com";
        $recipients = "receiver1@gmail, receiver2@gmail.com";
        $fromName = "j4Sail Theme";
    } else if($origin == "footerSignUp") {
        $subject = 'Footer Sign Up Form Submission';
        $from = "test@gmail.com";
        $recipients = "receiver1@gmail, receiver2@gmail.com";
        $fromName = "j4Sail Theme";
    } else if($origin == "inquireForm") {
        $subject = 'Inquire Form Submission';
        $from = "test@gmail.com";
        $recipients = "receiver1@gmail, receiver2@gmail.com";
        $fromName = "j4Sail Theme";
    } else if($origin == "underConstruction") {
        $subject = 'Under Construction Form Submission';
        $from = "test@gmail.com";
        $recipients = "receiver1@gmail, receiver2@gmail.com";
        $fromName = "j4Sail Theme";
    }

    //Collect post items into a message
    unset($_POST["origin"]);
    foreach ($_POST as $key => $value) {
        $message .= "<div>" . $key . ": " . $value . "</div>";
    }

    $headers = "From: " . $fromName . " <" . $from . "> \r\n" .
        "Reply-To: " . $from . " \r\n" .
        "MIME-Version: 1.0" . " \r\n" .
        "Content-type: text/html; charset=UTF-8" . " \r\n";
    $to = $from . ', ' . $recipients;

    //Send email
    $emailResult = mail($to, $subject, $message, $headers);

}

$result = [
    "email_status" =>  $emailResult
];
echo json_encode($result);



