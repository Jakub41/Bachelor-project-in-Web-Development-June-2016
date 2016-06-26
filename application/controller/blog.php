<?php 

	/**
	* Blog Controller, This class is to control over All blog.
	*/
	class blog extends Controller
	{
		
		public function index()
		{
			$this->model->checksession();
			
			if($_SESSION['usertype']=="admin")
			$post=$this->model->getAllBlog();
			else if($_SESSION['usertype']=="user")
			$post=$this->model->getBlogByuserid($_SESSION['userid']);

			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/blog/index.php';
			require APP.'view/_templates/footer.php';
		}
		public function deletecomment($id)
		{
		$this->model->checksession();
	    $this->model->deleteblogcomment($id);
		header('Location:'.URL.'blog/blogcomment');		
		
		}
		public function blogcomment()
		{
		$this->model->checksession();
		$blogcomments=$this->model->getallblogcomments();
		require APP.'view/_templates/header.php';
		require APP.'view/dashboard/blog/blogcomments.php';
		require APP.'view/_templates/footer.php';
		}
		public function edit($post_ID)
		{
				$this->model->checksession();
				if($_POST)
				{

               $this->validation->validate(["Blog Title" => [$_POST['post_title'], "required"],"Blog Details"=>[trim($_POST['post_content']), "required"]]);  
			   $this->validation->isEditUnique('blog','post_title',$_POST['post_title'],'post_ID',$post_ID,'Blog');
			   if(count($this->validation->errors()))
			   {
			   $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
			   }else
			   {
			          $status="done";   
					  if(!empty($_FILES['fileToUpload']['name']) && $_FILES['fileToUpload']['size']>0)
			          {
				 
			            $imagename= "blog".$post_ID;
			            $getimagename=$this->model->uploadimage($imagename,'blog');
			            $_POST['post_image']=$getimagename;
					$status=($getimagename==1?"Upload image in jpg,png,jpeg format":($getimagename==2?"Upload image in jpg,png,jpeg format":($getimagename==3?"Image Size not grater then 5 MB":"done")));	
			          }
					  if($status=="done")
					  {
				       $_POST['post_ID']=$post_ID;
				       $this->model->updateBlog($_POST);
				       header('Location:'.URL.'blog');
					  }
					  else
					  {
					  $errormessage=$status;
					  }
			      }
				}
				$blog=$this->model->getBlogByPK($post_ID);
				if(empty($blog) || !count($blog))
				{
				header('Location:'.URL.'dashboard');
				}
				require APP.'view/_templates/header.php';
			    require APP.'view/dashboard/blog/editpost.php';
			    require APP.'view/_templates/footer.php';
		}
        public function delete($post_ID)
		{
            $this->model->checksession();
		    $this->model->deleteBlog($post_ID);
			$this->model->deleteblogcommentwithblogid($post_ID);
		    header('Location:'.URL.'blog');
		}
		public function new_post()
		{
            $this->model->checksession();
			if($_POST)
			{
			
			   $this->validation->validate(["Blog Title" => [$_POST['post_title'], "required"],"Blog Details"=>[trim($_POST['post_content']), "required"]]);  
			  $this->validation->isUnique('blog','post_title',$_POST['post_title'],'Blog');
			   if(count($this->validation->errors()))
			   {
			   $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
			   }
			   else
			   {
			        $_POST['post_image']='';
		         if(!empty($_FILES['fileToUpload']['name']) && $_FILES['fileToUpload']['size']>0)
			     {
					  $maxid=$this->model->maxblogid();
					  $imagename= "blog".$maxid->VALUE;
					  $getimagename=$this->model->uploadimage($imagename,'blog');
					  $_POST['post_image']=$getimagename;
			   $status=($getimagename==1?"Upload image in jpg,png,jpeg format":($getimagename==2?"Upload image in jpg,png,jpeg format":($getimagename==3?"Image Size not grater then 5 MB":"done")));
			   
			   }
					  $userid=(isset($_SESSION['user_id'])?$_SESSION['user_id']:(isset($_SESSION['userid'])?$_SESSION['userid']:''));
					  $_POST['user_ID']=$userid;
					  $_POST['user_type']=$_SESSION['usertype'];
					  if($status=="done")
					  {
					   $this->model->addBlog($_POST);
					   header('Location:'.URL.'blog');
					  }else
					  {
					  $errormessage=$status;
					  }
			   
			   }
			   
			}
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/blog/new_post.php';
			require APP.'view/_templates/footer.php';
		}

		// public function addNewPost(){
		// 	$data = array(
		// 		'user_ID' => '1234' ,
		// 		'post_title' => 'Demo POST',
		// 		'post_content' => 'Post Content',
		// 		'post_image' => 'POst IMAGe'
		// 	);

		// 	$this->model->addBlog($data);
		// 	$this->new_post();
		// }

		public function moderate(){
		$this->model->checksession();
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/blog/moderate.php';
			require APP.'view/_templates/footer.php';
		}
	}
 ?>