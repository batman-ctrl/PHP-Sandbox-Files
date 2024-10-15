<?php

    // Load composers autoloader 
    require 'vendor/autoload.php';

    
    // Importing PHPMailer classes
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        // Get the form data
        $toEmail = $_POST["toEmail"];
        $toCC = $_POST["toCC"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Grabbing atachment from FILES
        $attachment = $_FILES["attachment"]["tmp_name"];
        $attachment_name = $_FILES["attachment"]["name"];
  
        // Create a new PHPMailer instance 
        $mail = new PHPMailer(true);

        try{

            // Server settings
            $mail->isSMTP();    // Make this mailer object SMTP

            // Host name
            $mail->Host = "smtp.gmail.com";
            
            // Enforces authentication (with username and password)
            $mail->SMTPAuth = true; 

            // Username to login
            $mail->Username = "johnwicktestingphp@gmail.com";

            // App password from Gmail (not login password)
            $mail->Password = "jfiv mnre jhry ibqg";

            // Encorces a secure connection 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            
            // Port number
            $mail->Port= 587;
 
            // Recipient
            $mail->setFrom("johnwicktestingphp@gmail.com","John Wick");
            $mail->addAddress($toEmail);

            // Add CC if needed
            if($toCC){
                $mail->addCC($toCC);
            }

            // Add attachment 
            if($attachment){
                $mail->addAttachment($attachment, $attachment_name);
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            

            // Sending email
            $mail->send();

            echo "Email has been sent!";


        }catch (Exception $e){
            echo "Email could not be sent. Mailer Error : {$mail->ErrorInfo}";
        }

    }

?>