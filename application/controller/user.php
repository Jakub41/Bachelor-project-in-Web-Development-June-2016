<?php 
	/**
	* User Controller. This class is to controll all user oprations
	*/
	class user extends Controller
	{
		

		public function index()
		{
		    $this->model->checksession();
			 $_SESSION["salt"]=$this->email->generatesalt();
            
		    unset($user_info);
			if($_SESSION['usertype']=="admin")
		    $userinfo=$this->model->getuserinfo();
		    else if($_SESSION['usertype']=="user")
			$userinfo=$this->model->getsingleuserinfo($_SESSION['userid']);
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/user/dispalyuserinfo.php';
			require APP.'view/_templates/footer.php';
			
		}
		public function delete($hash,$id)
		{
		  $this->model->checksession();

		   if(isset($_SESSION["salt"]))
		   {
		       $id=($id-$_SESSION["salt"]);
			   if(hash_hmac('sha256', $id, $_SESSION["salt"])!=$hash) 
			   {
			    header('Location:'.URL.'dashboard');			
			   }
		   }else
		   {
		     header('Location:'.URL.'dashboard');			
		   }
		  $userinfo=$this->model->getsingleuserinfo($id);
		  $useremail=$userinfo[0]->email;
		  $this->model->deletedata("users",$id);
		  $this->model->deleteCredentials($useremail);

			if($_SESSION['usertype']=="user")
			{
			session_destroy();
			header('Location:'.URL);
			}else
			{
			header('Location:'.URL.'user');
			}
		}
		public function editinfo($id=null)
		{
		$this->model->checksession();
		 if($_POST)
		 {
		  $this->model->updateuserdata($_POST);
		  header('Location:'.URL.'user');
		  }
		 unset($user_info);
		 $user_info=$this->model->getsingleuserinfo($id);
		 if(count($user_info))
		 {
		 $user_id=$id;
		 }else
		 {
		 header('Location:'.URL.'user');
		
		 }
		require APP.'view/_templates/header.php';
		require APP.'view/dashboard/user/edituser.php';
		require APP.'view/_templates/footer.php';
		}
	}
 ?>