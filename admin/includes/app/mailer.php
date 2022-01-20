<?php
require_once '../vendor/autoload.php';

class Mailer{

    // private $email = 'ratingportalboc@gmail.com';
	// private $password = 'ipcr2021';

    private $email = "davidsgrillresto2021@gmail.com";
	private $password = "davidsgrill2021";

    public function emailsend($email,$msg,$url){
		// Create the Transport
		$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
		  ->setUsername($this->email)
		  ->setPassword($this->password)
		;

		// Create the Mailer using your created Transport
		$mailer = new Swift_Mailer($transport);

		// Create a message
		$message = (new Swift_Message('David`s grill Identification Verification'))
		  ->setFrom([$this->email => 'admin@davidsgrill'])
		  ->setTo([$email])
		  ->setBody("<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'https://www.w3.org/TR/html4/loose.dtd'>
            <html>
            <body> 
                <p>Your account has been activated</p>
            </body>
            </html>","text/html");

		// Send the message
		$mailer->send($message);
	}
}