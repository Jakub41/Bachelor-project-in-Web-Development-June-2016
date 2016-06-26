<?php 

	class dashboard extends Controller{


		public function login()
		{
//echo "helo";die;
		//$this->model->checksession();
		if($_POST)
		{
		     header("Access-Control-Allow-Origin: *");
		  
			 parse_str($_POST['formdata'], $formdata);
			 //$data=json_decode($formdata,true);
			 $data=$formdata;

			 $message=array();
			 if(isset ($data["email"]) && empty($data["email"]))
			 {
			 $message["email"]="* Enter Email";
			 }else if (filter_var($data["email"], FILTER_VALIDATE_EMAIL) === false)
			 {
			 $message["email"]="* Email Is Not Valid";
			 }
			 if(empty($data["password"]))
			 {
			 $message["email"]="* Enter Password";
			 }
			 
		 
		if(!count($message))
		{
		  $row=$this->model->islogin($data["email"],md5($data["password"]));
		 if(count($row))
		 {
		 
		   session_start();
		   $_SESSION['isThatOK'] ='OK';
		   $_SESSION['usertype']='admin';
		   $_SESSION['user_id']=$row[0]->id;
		   $_SESSION['email']=$row[0]->email;
           $message["changeurl"]= URL.'dashboard';
		 }else
		 {
		   $message["error"]="* Enter Valid Information!";
		 }
		}
		if(count($message))
		{
		echo json_encode($message);
		die;
		}
		
		}
		
		
		require APP.'view/dashboard/login/login.php';
		}
        
		public function logout(){
		
			require APP.'view/dashboard/login/logout.php';
		}

		public function index()
		{
		
			session_start();
			
			///$this->model->sendEmail("manojjoshi574@yahoo.in","manoj","hello");
			// $_SESSION['isThatOK'] = 'OK';

			if (@$_SESSION['isThatOK'] == 'OK') 
			{
				require APP.'view/_templates/header.php';
				require APP.'view/dashboard/home.php';
				require APP.'view/_templates/footer.php';
			}
			else{
				
				header('Location:'.URL.'dashboard/login');
			}

			
		}

         public function addnewsletter()
		 {
		   if($_POST)
		   {
		   $this->model->addNewsletter($_POST);
		   }
		   header('Location:'.URL);
		 }
		public function newsletter(){

            $this->model->checksession();
			$newsletter = $this->model->getAllNewletterSubscibers();

			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/newsletter.php';
			require APP.'view/_templates/footer.php';
		}

		public function deleteNewsletter($newsletter_ID){
			$this->model->checksession();
			if (isset($newsletter_ID)) 
			{
				$this->model->deleteNewsletter($newsletter_ID);
			}
			header('Location:'.URL.'dashboard/newsletter');
		}
        public function deletemessage($id)
		{
          			$this->model->checksession();
					$this->model->deletemessage($id);	
					header('Location:'.URL.'dashboard/message');	
		}
		public function editmessage($id)
		{
		    $this->model->checksession();
			if($_POST)
			{
			 $this->validation->validate(["Subject" => [$_POST['subject'], "required"],"Message"=>[trim($_POST['message']), "required"]]);  
		       $this->validation->isEditUnique('message','subject',$_POST['subject'],'id',$id,'Message');
		       if(count($this->validation->errors()))
			   {
			    $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
			   }else
			   {
			   
			     $_POST["messageid"]=$id;
			     $this->model->updatemessage($_POST);
                 header('Location:'.URL.'dashboard/message');			   
			   }
			}
			$message=$this->model->select_message($id);
			if(empty($message) || !count($message))
			{
			   header('Location:'.URL.'dashboard');
			}
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/editmessage.php';
			require APP.'view/_templates/footer.php';
		
		}
		public function message()
		{
			$this->model->checksession();
			$message=$this->model->display_message();
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/message.php';
			require APP.'view/_templates/footer.php';
		}
        public function addmessage()
		{
		 $this->model->checksession();
		 if($_POST)
		 {
		 $this->validation->validate(["Subject" => [$_POST['subject'], "required"],"Message"=>[trim($_POST['message']), "required"]]);  
		 $this->validation->isUnique('message','subject',$_POST['subject'],'Message');
		       if(count($this->validation->errors()))
			   {
			    $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
			   }else
			   {
		        $this->model->addmessage($_POST);
		        header('Location:'.URL.'dashboard/message');
		       }
		 }
		 require APP.'view/_templates/header.php';
		 require APP.'view/dashboard/addmessage.php';
		 require APP.'view/_templates/footer.php';
		}
		public function displayuserinfo()
		{
		   $this->model->checksession();
            $_SESSION["salt"]=$this->email->generatesalt();

		   $userinfo= $this->model->getsingleuserinfo($_SESSION['userid']);
		   require APP.'view/_templates/header.php';
		   require APP.'view/dashboard/user/dispalyuserinfo.php';
		   require APP.'view/_templates/footer.php';
		}
		public function userprofile($hash,$userid)
		{
		   $this->model->checksession();
           if(isset($_SESSION["salt"]))
		   {
		    $userid=($userid-$_SESSION["salt"]);
			if(hash_hmac('sha256', $userid, $_SESSION["salt"])!=$hash) 
			{
			 header('Location:'.URL.'dashboard');			
			}
		   }else
		   {
		     header('Location:'.URL.'dashboard');			
		   }

		   if($_POST)
		   {
		   
		     header("Access-Control-Allow-Origin: *");
		  
			 parse_str($_POST['formdata'], $formdata);
			 //$data=json_decode($formdata,true);
			 $data=$formdata;
		   
		   $this->validation->validate(["First Name" => [$data['userfname'], "required"],'Last Name' => [$data['userlname'],"required"],'State'=>[$data["userState"],"required"],'Zip'=>[$data["userzip"],"required"],'Country'=>[$data["usercountry"],"required"],'Address'=>[$data["useraddress"],"required"],'Mobile'=>[$data["usermobile"],"required"],'City'=>[$data["usercity"],"required"]]);  
		       if(count($this->validation->errors()))
				{
				
				  $message["error"]=implode('<br>&nbsp;*',$this->validation->errors());
			      echo json_encode($message);
			      die;
				}
		     $data["user_ID"]=$_SESSION['userid'];
		     $this->model->updateUsers($data);
			 $message['url']=URL.'dashboard/displayuserinfo';
			 echo json_encode($message);
			    die;
		   }
		   
		   $userinfo= $this->model->getsingleuserinfo($userid);
		   if(count($userinfo)<=0)
		   {
		    header('Location:'.URL.'dashboard');			
		   }
		   require APP.'view/_templates/header.php';
		   require APP.'view/dashboard/user/address.php';
		   require APP.'view/_templates/footer.php';
		}


	}
 ?>