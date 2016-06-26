<?php
class SendEmail
{
public $email;
private $emailobj;
function __construct()
{

            require_once APP.'model/PHPMailer/PHPMailerAutoload.php';
            $this->emailobj = new PHPMailer;                               // Enable verbose debug output
            $this->emailobj->SMTPDebug = 3; 
            $this->emailobj->isSMTP();                                      // Set mailer to use SMTP
            $this->emailobj->Host = 'mail.ajldeveloper.com';  // Specify main and backup SMTP servers
            $this->emailobj->SMTPAuth = true;                               // Enable SMTP authentication
            $this->emailobj->Username = 'ajldevel';                 // SMTP username
            $this->emailobj->Password = 'Ff43c68Fxc';                           // SMTP password
            $this->emailobj->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			//$mail->SMTPSecure = 'ssl';
            $this->emailobj->Port = 26;                                    // TCP port to connect to

            $this->emailobj->From = 'ajldevel@ajldeveloper.com';
            $this->emailobj->FromName = 'ajldevel';

            $this->emailobj->WordWrap = 50;                                 // Set word wrap to 50 characters
            $this->emailobj->isHTML(true);                                  // Set email format to HTML


}
function sendmailforuser($email_address,$subject,$message)
{
            $this->emailobj->addAddress($email_address);     // Add a recipient
            $this->emailobj->addReplyTo('ajldevel@ajldeveloper.com', 'ajldevel');

            
            $this->emailobj->Subject = $subject;
            $this->emailobj->Body    = '
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title></title>
                    </head>
                    <body marginheight="0" marginwidth="0" style="width: 600px;">
                    '.$message.'
                    </body>
                    </html>';
            $this->emailobj->send();
die;
            /*if(!$this->emailobj->send()) 
			{
                //echo 'Message could not be sent.';
                //echo 'Mailer Error: ' . $this->emailobj->ErrorInfo;
				//die;

            } else 
			{
                //echo 'Message has been sent';
				//die;
				
            }*/


}
public function generatesalt()
{
   
 $randomnumber = rand(111,999);
 $randomnumber=$randomnumber+7;
 return $randomnumber;
}


}


?>