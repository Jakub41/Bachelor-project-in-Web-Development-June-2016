<?php
	/**
	*
	*/
	class Signup extends Controller
	{
        public function SignupCustomer(){
            require APP.'view/frontend/signup.php';
        }

        public function login(){
            require APP.'view/frontend/login.php';
        }

		public function SignupUser(){
          session_start();
            require_once APP.'model/recaptchalib.php';
            
            $action_msg="";
            //$privatekey = "6LelO_gSAAAAAN8vZiKEZy2hOpVd9VuTIblp4sxY";
			$privatekey ="6LfINiETAAAAAH5d_DLrlSUW23hqyn_cyOPHl5vx";           

			   if($_POST)
			   {
			   			header("Access-Control-Allow-Origin: *");
			            parse_str($_POST['formdata'], $formdata);
			            $message=array();
			            $data=$formdata;
			
					  
			            $resp = recaptcha_check_answer ($privatekey,
                                            $_SERVER["REMOTE_ADDR"],
                                            @$data["recaptcha_challenge_field"],
                                            @$data["recaptcha_response_field"]);


			    if (!$resp->is_valid)
				{
				
                 $message["error"]="CAPTCHA ERROR !";
			     echo json_encode($message);
			     die;
                }else
				{
				
				
			$this->validation->validate(["First Name" => [$data['first_name'], "required"],'Password' => [$data['password'],"required"],'User Email'=>[$data["email"],"required|email|emailUnique|maxLen(50)"]]);  
		        if(count($this->validation->errors()))
				{
				 $message["error"]=implode('<br>',$this->validation->errors());
			     echo json_encode($message);
			     die;
			    }else
				{
				$first_name = $data['first_name'];

                if ($data['last_name'] != NULL) 
				{
                    $last_name = $data['last_name'];
                }
                else
				{
                    $last_name = NULL;
				}	


                $address = NULL;
                $city = NULL;
				$state=NULL;
                $zip = NULL;
                $country = NULL;
                $phone = NULL;
                $email = $data['email'];
                $image = NULL;
				$password = $data['password'];
				
				$user_data = array(
                            'first_name' => $first_name ,
                            'last_name' => $last_name ,
		                    'password'=>sha1($password),
                            'address' => $address,
                            'city' => $city,
							'state'=>$state,
                            'zip' => $zip,
                            'country' => $country ,
                            'phone' => $phone,
                            'email' => $email,
                            'image' => $image
                        );

                        $verify_string = sha1($email.$password);
                       
                        $credentials_data = array(
                            'email' => $email ,
                            'password' => sha1($password),
                            'verify_string' => $verify_string
                        );

                        $this->model->addUser($user_data);
						$this->model->addCredentials($credentials_data);
						$activeurl=URL."signup/activeaccount/".$verify_string;
						
					$displaymessage="Hi ".$first_name."&nbsp;".$last_name."<br> Your are successful register in EZBOXRECIPES. For Activate you account please click on this link.<br>".$activeurl;
					
                       $_SESSION["user_email"]=$email;
					   $_SESSION["message"]=$displaymessage;
					$message["error"]="WHOA ! SUCCESSFULLY REGIESTED.Activation Email Sent. Please Check your inbox";
					$message["url"]=URL."singup/sendemail";
			     echo json_encode($message);
			die;
					
                        //$this->model->addCredentials($credentials_data);
         //$message["error"]=array("WHOA ! SUCCESSFULLY REGIESTED.<br>Activation Email Sent. Please Check your inbox");
				        //echo json_encode($message);
			  			
						
				}
			   
			   
			   }
             }
            
 $this->SignupCustomer($action_msg);
            /*if (!$resp->is_valid){
                //$action_msg = "CAPTCHA ERROR !";
				$action_msg = "";
                $this->SignupCustomer($action_msg);
                // header('location:'.APP.'frontend/SignupCustomer?msg='.$action_msg);

            }*/
            /*else
			{
			

			   
			   
                $first_name = $_REQUEST['first_name'];

                if ($_REQUEST['last_name'] != NULL) {
                    $last_name = $_REQUEST['last_name'];
                }
                else
                    $last_name = NULL;


                $address = NULL;
                $city = NULL;
                $zip = NULL;
                $country = NULL;
                $phone = NULL;
                $email = $_REQUEST['email'];
                $image = NULL;

                $password = $_REQUEST['password'];

                if (empty($email) || empty($password) || empty($first_name)) {
                    $action_msg = "Please Fill all the Fields !";
                    $this->SignupCustomer($action_msg);
                }
                else{
                    $amount_of_credentials = $this->model->getAmountOfCredentials($email);
                    if ($amount_of_credentials > 0) {
                        $action_msg = "User Already Exists !";
                        $this->SignupCustomer($action_msg);
                    }
                    else{
                        $user_data = array(
                            'first_name' => $first_name ,
                            'last_name' => $last_name ,
		            'password'=>sha1($password),
                            'address' => $address,
                            'city' => $city,
                            'zip' => $zip,
                            'country' => $country ,
                            'phone' => $phone,
                            'email' => $email,
                            'image' => $image
                        );

                        $verify_string = sha256($email.$password);


                        $credentials_data = array(
                            'email' => $email ,
                            'password' => $password,
                            'verify_string' => $verify_string
                        );

                        $this->model->addUser($user_data);
                        $this->model->addCredentials($credentials_data);
                        // $this->sendSignupEmail($email, $first_name, $verify_string);

                        $action_msg = "WHOA ! SUCCESSFULLY REGIESTED.<br>Activation Email Sent. Please Check your inbox";
                        $this->SignupCustomer($action_msg);
                        // header('location:'.APP.'frontend/SignupCustomer?msg='.$action_msg);
                    }
                }
            }*/
        }

function sendemail()
{
session_start();
$this->email->sendmailforuser($_SESSION["user_email"],"For Email Activation ",$_SESSION["message"]);
unset($_SESSION["user_email"]);
unset($_SESSION["message"]);
echo "email has send";
}

public function activeaccount($verify_string)
{

    $count= $this->model->getAmountOfCredentials($verify_string);
	
	session_start();
	if($count)
	{
	 $this->model->updateCredentials($verify_string);
	 
	 //session_destroy();
	 $_SESSION["accountactivation"]="Your Account Has Been Activated!";
	}
	else
	{
	$_SESSION["accountactivation"]="Token has been expired!";
	}
    header('Location:'.URL.'frontend/login');
}

        
	}
 ?>
