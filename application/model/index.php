<?php
require_once 'PHPMailerAutoload.php';
            

            
            $mail = new PHPMailer;                               // Enable verbose debug output
            $mail->SMTPDebug = 3; 
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'manojjoshi.joshi@gmail.com';                 // SMTP username
            $mail->Password = 'gmail@lee@123';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			//$mail->SMTPSecure = 'ssl';
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->From = 'manojjoshi.joshi@gmail.com';
            $mail->FromName = 'manoj';
            $mail->addAddress('manojjoshi574@yahoo.in');     // Add a recipient
            $mail->addReplyTo('manojjoshi.joshi@gmail.com', 'manoj');

            $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'test';
            $mail->Body    = '
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title></title>
                    </head>
                    <body marginheight="0" marginwidth="0" style="width: 600px;">
                     hello
                    </body>
                    </html>';
            

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
				die;

            } else {
                echo 'Message has been sent';
				die;
				
            }

?>