<?php

	/**
	* Login Controller
	*/
	class Login extends Controller
	{

		public function LoginCustomer(){
			session_start();

			if($_POST)
			{
			header("Access-Control-Allow-Origin: *");
			 parse_str($_POST['formdata'], $formdata);
			 $message=array();
			 $data=$formdata;
			 
			$this->validation->validate(["Email" => [$data['user_email'], "required|email"],'Password' => [$data['user_password'],"required"]]);
			if(count($this->validation->errors()))
			{
			$message["error"]=implode('<br>',$this->validation->errors());
            echo json_encode($message);
			die;
			}
			
			 
			 $user = $this->model->getUserByEmail($data['user_email'], sha1($data['user_password']));

			if (count($user)> 0 && !empty($user))
			{
			    
				$isactivate=$this->model->getuseraccountverify($data['user_email']);
				 
				if(!$isactivate)
				{
				$verify_string=sha1($data['user_email'].$data['user_password']);
				$this->model->updateCredentialsByEmail($data['user_email'],$verify_string);
				$activeurl=URL."signup/activeaccount/".$verify_string;
				$displaymessage="Dear User<br> Your are successful register in EZBOXRECIPES. For Activate you account please click on this link.<br>".$activeurl;
						
				$_SESSION["user_email"]=$data['user_email'];
				$_SESSION["message"]=$displaymessage;	
				
				$message["error"]="Your account is not activated.<br/>For activate your account go to your email id:{$data['user_email']}";
				$message["sendmailurl"]=URL."singup/sendemail";
				 echo json_encode($message);
				 die;
				}
			    else
			    {
				
				$_SESSION['email'] = $user->email;
				$_SESSION['userid'] = $user->user_ID;
			    //$_SESSION['password'] = $_REQUEST['user_password'];
                $_SESSION['usertype']='user';
                $_SESSION['isThatOK'] = 'OK';
				$message["url"]=URL.'frontend/index';
                echo json_encode($message);
			    die;
			    }

			}
			else
			{
			    $message["error"]='* Enter Valid Information';
                echo json_encode($message);die;
			}

			}
		}
		public function logoutuser()
		{
		session_start();
		session_destroy();
		header('Location:'.URL.'frontend/login');
		}
	}
 ?>
