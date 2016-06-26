<?php 

	/**
	* Recipe Class, This class contains functions regarding recipe
	*/
	class recipe extends Controller
	{
		
		public function index(){
		$this->model->checksession();
		$recipes=$this->model->getAllRecipes();
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/recipe/index.php';
			require APP.'view/_templates/footer.php';
		}
		public function recipecomment()
		{
		$this->model->checksession();
		$recipecomments=$this->model->getallrecipecomments();
		require APP.'view/_templates/header.php';
		require APP.'view/dashboard/recipe/recipecomments.php';
		require APP.'view/_templates/footer.php';
		}
		public function deletecomment($id)
		{
				$this->model->checksession();
				$this->model->deleterecipecomment($id);
				$this->model->deleteratingwithcommentid($id);
		header('Location:'.URL.'recipe/recipecomment');		
				
		}
		public function edit($id)
		{
		$this->model->checksession();
		if($_POST)
		{
		         $this->validation->validate(["Select Category" => [$_POST['category_ID'], "required"],'Select Sub Category' => [$_POST['sub_category_ID'],"required"],'Recipe Name'=>[$_POST["recipe_name"],"required"],'Recipe Price'=>[$_POST["recipe_price"],"required"],'Recipe Details'=>[$_POST["recipe_details"],"required"]]);  
			    if(count($this->validation->errors()))
				{
                $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
				}else
				{
				     $status="done";
                     $_POST['recipe_image']='';
					 if(!empty($_FILES['fileToUpload']['name']) && $_FILES['fileToUpload']['size']>0)
					 {
					  $imagename= "image".$id;
					  $imagefor="user";
					  $getimagename=$this->model->uploadimage($imagename,$imagefor);
					  $_POST['recipe_image']=$getimagename;
					 $status=($getimagename==1?"Upload image in jpg,png,jpeg format":($getimagename==2?"Upload image in jpg,png,jpeg format":($getimagename==3?"Image Size not grater then 5 MB":"done")));
					 }
					 
			
		             if($status=="done")
					 {
					 $_POST["recipe_ID"]=$id;
		             $this->model->updateRecipes($_POST);
		             header('Location:'.URL.'recipe');
					 }else
					 {
					$errormessage="&nbsp;*".$status; 
					 }
		         }
			}	 
		$all_categories = $this->model->getAllCategory();
		$all_sub_categories =$this->model->getAllSubCategory();
		$recipe=$this->model->getRecipeByPK($id);
		if(empty($recipe) || !count($recipe))
		{
		header('Location:'.URL.'dashboard');
		}
		
		require APP.'view/_templates/header.php';
		require APP.'view/dashboard/recipe/editrecipe.php';
		require APP.'view/_templates/footer.php';
		}
        public function delete($id)
        {
        $this->model->checksession();
        $this->model->deleteRecipe($id);
		$this->model->deleterecipecommentwithrecipeid($id);
		header('Location:'.URL.'recipe');
        }
		public function new_recipe(){
			$this->model->checksession();
            if($_POST)
			{
			
		   $this->validation->validate(["Select Category" => [$_POST['category_ID'], "required"],'Select Sub Category' => [$_POST['sub_category_ID'],"required"],'Recipe Name'=>[$_POST["recipe_name"],"required"],'Recipe Price'=>[$_POST["recipe_price"],"required"],'Recipe Details'=>[$_POST["recipe_details"],"required"]]);  
			    if(count($this->validation->errors()))
				{
                $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
				}
				else
				{
			$maxid=$this->model->maxrecipeid();
			$imagename= "image".$maxid->VALUE;
			$imagefor="user";
			$getimagename=$this->model->uploadimage($imagename,$imagefor);
			
			
			$status=($getimagename==1?"Upload image in jpg,png,jpeg format":($getimagename==2?"Upload image in jpg,png,jpeg format":($getimagename==3?"Image Size not grater then 5 MB":"done")));
			
			  if($status=="done")
			  {
			   $_POST['recipe_image']=$getimagename;
			   $this->model->addRecipe($_POST);
               header('Location:'.URL.'recipe');
			  }
			  else
			  {
			   $errormessage="&nbsp;*".$status;
			  }
			 }
			}
			$all_categories = $this->model->getAllCategory();
			$all_sub_categories =$this->model->getAllSubCategory();
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/recipe/new_recipe.php';
			require APP.'view/_templates/footer.php';
		}

		public function category(){
           $this->model->checksession();
			$all_categories = $this->model->getAllCategory();

			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/recipe/category.php';
			require APP.'view/_templates/footer.php';
		}
      public function editCategory($catagory_id)
	  {
	        $this->model->checksession();
			if($_POST)
			{
			
			    $this->validation->validate(["Category Name" => [$_POST['categoryname'],"required"]]);  
			    
				$this->validation->isEditUnique('category','category_name',$_POST['categoryname'],'category_ID',$catagory_id,'Category');
				if(count($this->validation->errors()))
				{
                $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
				}else
				{
			    $this->model->updatecategory($catagory_id,$_POST);
			    header('Location:'.URL.'recipe/category');
			    }
			}
		    $category=$this->model->editcatagory($catagory_id);
			
					if(empty($category) || !count($category))
		            {
		             header('Location:'.URL.'dashboard');
		            }
		    require APP.'view/_templates/header.php';
			require APP.'view/dashboard/recipe/editcategory.php';
			require APP.'view/_templates/footer.php';
			
	  }
		public function addCategory(){
        $this->model->checksession();
			if (isset($_REQUEST['submit'])) {
			

			
				if ($_REQUEST['submit'] == 'Add Category') 
				{
			    $this->validation->validate(["Category Name" => [$_POST['category_name'], "required"]]);  
				$this->validation->isUnique('category','category_name',$_POST['category_name'],'Category');
			    if(count($this->validation->errors()))
				{
                $_SESSION["errormessage"]=implode('<br>&nbsp;*',$this->validation->errors());
				
				}
				else
				{
					$category_name = $_REQUEST['category_name'];

					$this->model->addCategory($category_name);
				}	
				}
			}

        header('Location:'.URL.'recipe/category');
		}
        
        public function editsubcategory($sub_category_ID)
        {
		    $this->model->checksession();
		    if($_POST)
			{
			   $this->validation->validate(["Category Name" => [$_POST['category_ID'], "required"],"SubCategory Name"=>[$_POST['sub_category_name'], "required"]]);  
	          $this->validation->isEditUnique('sub_category','sub_category_name',$_POST['sub_category_name'],'sub_category_ID',$sub_category_ID,'SubCategory');
			   if(count($this->validation->errors()))
			   {
			   $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
			   }
			   else
			   {
			                $status="done";   
				    	     $_POST['subcat_image']='';
							 if(!empty($_FILES['fileToUpload']['name']) && $_FILES['fileToUpload']['size']>0)
							 {
				
							$imagename= "image".$sub_category_ID;
							$imagefor="subcat";
							$getimagename=$this->model->uploadimage($imagename,$imagefor);
				
							$_POST['subcat_image']=$getimagename;
				$status=($getimagename==1?"Upload image in jpg,png,jpeg format":($getimagename==2?"Upload image in jpg,png,jpeg format":($getimagename==3?"Image Size not grater then 5 MB":"done")));
							 }
							 if($status=="done")
							 {
							  $this->model->updateSubCategory($_POST);
							  header('Location:'.URL.'recipe/sub_category');
							 }else
							 {
							 $errormessage=$status;
							 }
     		   }		  

			}
           
		   $all_categories = $this->model->getAllCategory();   
		   $subcatagory=$this->model->getSubCategoryByPK($sub_category_ID);
		   if(empty($subcatagory) || !count($subcatagory))
		   {
		             header('Location:'.URL.'dashboard');
		   }
           $catagoryid=$subcatagory->category_ID;
           $subcategoryname=$subcatagory->sub_category_name;
		   $subcategory_id=$subcatagory->sub_category_ID;
		   require APP.'view/_templates/header.php';
		   require APP.'view/dashboard/recipe/editsubcategory.php';
		   require APP.'view/_templates/footer.php';
        }
        public function deleteSubCategory($sub_category_ID){
			$this->model->checksession();
			if (isset($sub_category_ID)) {
				$this->model->deleteSubCategory($sub_category_ID);
			}

          header('Location:'.URL.'recipe/sub_category');
		}
		public function deleteCategory($category_ID){
			$this->model->checksession();
			if (isset($category_ID)) {
				$this->model->deleteCategory($category_ID);
			}

          header('Location:'.URL.'recipe/category');
		}

		public function sub_category(){
		$this->model->checksession();
		if($_POST)
		{
		
		$this->validation->validate(["Category Name" => [$_POST['category_ID'], "required"],"SubCategory Name"=>[$_POST['sub_category_name'], "required"]]);  
		$this->validation->isUnique('sub_category','sub_category_name',$_POST['sub_category_name'],'SubCategory');
		        if(count($this->validation->errors()))
				{
                   $errormessage=implode('<br>&nbsp;*',$this->validation->errors());
				
				}
				else
				{
					$maxid=$this->model->maxsubcat();
					$imagename= "image".$maxid;
					$imagefor="subcat";
					$getimagename=$this->model->uploadimage($imagename,$imagefor);
					$status=($getimagename==1?"Upload image in jpg,png,jpeg format":($getimagename==2?"Upload image in jpg,png,jpeg format":($getimagename==3?"Image Size not grater then 5 MB":"done")));
					if($status=="done")
					{
					$_POST['subcat_image']=$getimagename;
					$this->model->addSubCategory($_POST);
					}else
					{
					$errormessage=$status;
					}
			    }
		}
		$all_categories = $this->model->getAllCategory();
		$all_sub_categories =$this->model->getAllSubCategory();
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/recipe/sub_category.php';
			require APP.'view/_templates/footer.php';
		}

	}
 ?>