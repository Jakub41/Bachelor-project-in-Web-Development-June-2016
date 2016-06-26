<?php 
	/**
	* Forgot Password Controller
	*/
	class forgot_password extends Controller
	{
		
		public function ForgotPassword(){
			require APP.'view/frontend/forgot_password.php';
		}
       public function random_password( $length = 8 ) 
		{
		
		
             $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
             $password = substr( str_shuffle( $chars ), 0, $length );
             return $password;
         }
		public function ResetPassword()
		{
		session_start();

			if($_POST)
			{
			header("Access-Control-Allow-Origin: *");
			 parse_str($_POST['formdata'], $formdata);
			 $message=array();
			 $data=$formdata;
			 
			$this->validation->validate(["Email" => [$data['email'], "required|email"]]);
			if(count($this->validation->errors()))
			{
			$message["error"]=implode('<br>',$this->validation->errors());
            echo json_encode($message);
			die;
			}
			else
			{
			      $email = $data['email'];
			      $action_msg = '';

			      $amount_of_credentials = $this->model->getAmountOfCredentialsByEmail($email);

			      if($amount_of_credentials == 0) 
				  {
				    $action_msg = "SORRY ! No Account belongs to this Email.";
				    $message["error"]=$action_msg;
                    echo json_encode($message);
			        die;
			       }
			       else
			       {
				        $userpassword=$this->random_password(8);
	                    $this->model->updateuserpassword($data['email'],sha1($userpassword));
						$message["error"]="Dear user your new password is send to your email id<br>".$data['email'];			                        $_SESSION["user_email"]=$data['email'];
			$_SESSION["message"]="Dear user<br>Your password has been change.Your new password is:<br/>".$userpassword;
                        $message["url"]="1";
						echo json_encode($message);
			            die;
			       }
			
			
			}
			}
			
			
			

			
		}
		public function sendemail()
		{
		
		session_start();
        $this->email->sendmailforuser($_SESSION["user_email"],"For Forgot Password",$_SESSION["message"]);
        unset($_SESSION["user_email"]);
        unset($_SESSION["message"]);
        echo "email has send";

		
		}
	}
 ?>