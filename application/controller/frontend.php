<?php

    class frontend extends Controller{

        public function login(){
           session_start();
		    require APP.'view/frontend/login.php';
        }  

        public function Logout(){
            session_start();
			session_destroy();
            header('Location:'.URL.'frontend/login');
        }
		public function recipe($id)
		{
		   session_start();
           
		   if($_POST)
		   {
		   

		   $user_id=(isset($_SESSION['userid'])?$_SESSION['userid']:(isset($_SESSION['user_id'])?$_SESSION['user_id']:''));
		   if(isset($_POST["Rating"]) && !empty($_POST["Rating"]) && $_POST["Rating"]>0)
		   {
		   $this->model->deleterating($user_id,$_SESSION["usertype"],$id);
		   }
		   $recipe_comment_id=$this->model->insertrecipecomment($user_id,$id,$_POST["comment"],$_SESSION["usertype"]);
		   if(isset($_POST["Rating"]) && !empty($_POST["Rating"]) && $_POST["Rating"]>0)
		   {
		   $this->model->insertrating($recipe_comment_id,$_POST["Rating"]);
		   }

		   }
		   
           $featured_products = $this->model->getAllFeaturedRecipes();
           $newest_recipes = $this->model->getNewestRecipes();
           $getmenu= $this->model->dynamic_menu();
		   $chooserecipe=$this->model->getRecipeByPK($id);
		   
		   $userrecipecomment=$this->model->getrecipecoments($id,"user");
		   $adminrecipecomment=$this->model->getrecipecoments($id,"admin");
		  
		   $islogin='off';
			if(isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK')
			{
			$islogin='on';
			}
			$recipe_id=$id;
			require APP.'view/frontend/header.php';
            require APP . 'view/frontend/recipe.php';
            require APP.'view/frontend/footer.php';
		    unset($_SESSION["error"]);
		}
		public function bloginfo($id)
		{
		    session_start();
		    
			if($_POST)
			{
			$user_id=(isset($_SESSION['userid'])?$_SESSION['userid']:(isset($_SESSION['user_id'])?$_SESSION['user_id']:''));
		   $this->model->insertpostcomment($user_id,$id,$_POST["comment"],$_SESSION["usertype"]);
			}
			$getmenu= $this->model->dynamic_menu();
		    $blog=$this->model->getBlogbyid($id);
			
			$commentsbyusers=$this->model->getcomments($id,'user');	   
			$commentsbyadmin=$this->model->getcomments($id,'admin');	   
            $islogin='off';
			if(isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK')
			{
			$islogin='on';
			}
            $blogid=$id;
		    require APP.'view/frontend/header.php';
            require APP . 'view/frontend/commentsonblog.php';
            require APP.'view/frontend/footer.php';
		}
        public function blog()
		{           session_start();
		           $getmenu= $this->model->dynamic_menu();
			$blog=$this->model->getAllBlog();
		    require APP.'view/frontend/header.php';
            require APP . 'view/frontend/blog.php';
            require APP.'view/frontend/footer.php';
		} 
        public function index()
		{
           session_start();
           $featured_products = $this->model->getAllFeaturedRecipes();
           $newest_recipes = $this->model->getNewestRecipes();
           $getmenu= $this->model->dynamic_menu();
		  
        	require APP.'view/frontend/header.php';
            require APP . 'view/frontend/index.php';
            require APP.'view/frontend/footer.php';
        }  
        public function deletecart($recipeid)
		{
		    session_start();
           if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user")
			{ 
			 $key=array_search($recipeid, $_SESSION["recipeid"]);

			 unset($_SESSION["recipeid"][$key]); 
			 //$this->model->deletedatabycart($recipeid);
		     header('Location:'.URL.'frontend/my_cart');
		    }
			else
			{
			$this->login();
			}
		}
        public function addToCart($recipeid){
            session_start();
                        if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user")
						{


                $recipe_ID = $recipeid;
								
             //if($this->model->checkrecipeaddtocart($_SESSION["email"],$recipe_ID)==0)
			 if(isset($_SESSION["recipeid"]) && in_array($recipeid,$_SESSION["recipeid"]))
			 {
             $_SESSION["error"]="*This recipe allready exist in your cart";
			 header('Location:'.URL.'frontend/recipe/'.$recipe_ID);
			 }
			 else
			 {
			 //$this->model->addToCart($_SESSION["email"], $recipe_ID);
                 $holdrecipeid=array();
				if(isset($_SESSION["recipeid"]))
				{
				    foreach($_SESSION["recipeid"] as $key=>$value)
					{
					$holdrecipeid[]=$value;
					}
				}
				$holdrecipeid[]=$recipeid;

			  $_SESSION["recipeid"]=$holdrecipeid;
			   header('Location:'.URL.'frontend/my_cart');
             
			 }
            }
            else{
                $this->login();
            }

        }

        public function about_us(){
            session_start();
                        if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user"){
                $user = $this->model->getUserByEmail($_SESSION['email']);
                $user_first_name = $user->first_name;
                $user_last_name = $user->last_name;
            }
                      $getmenu= $this->model->dynamic_menu();
            require APP.'view/frontend/header.php';
            require APP . 'view/frontend/about_us.php';
            require APP.'view/frontend/footer.php';
        }
        public function subcategory($categoryid)
		{
		  session_start();
		  if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user")
		  {
		       $user = $this->model->getUserByEmail($_SESSION['email']);

				$user_first_name = $user->first_name;
                $user_last_name = $user->last_name;
		  }
		  $category_id=$categoryid;

		  	$getmenu= $this->model->dynamic_menu();
			require APP.'view/frontend/header.php';
			require APP . 'view/frontend/subcategory.php';
			require APP.'view/frontend/footer.php';	
		}
        public function terms_conditions(){
            
			session_start();
                        if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user"){
                $user = $this->model->getUserByEmail($_SESSION['email']);

				$user_first_name = $user->first_name;
                $user_last_name = $user->last_name;
            }
                       $getmenu= $this->model->dynamic_menu();
            require APP.'view/frontend/header.php';
            require APP . 'view/frontend/terms_conditions.php';
            require APP.'view/frontend/footer.php';
        }


        public function category($id) {
            session_start();

                        if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user"){
			    $user = $this->model->getUserByEmail($_SESSION['email']);
               
			    $user_first_name = $user->first_name;
                $user_last_name = $user->last_name;
            }

        	$all_category = $this->model->getAllCategory();
        	$amount_of_category = $this->model->getAmountOfCategory();
        	$all_sub_category = $this->model->getAllSubCategory();

        	$product_list = $this->model->getAllRecipes();
            $getmenu= $this->model->dynamic_menu();
            $product_list=$getmenu["recipe"][$id];
        	require APP.'view/frontend/header.php';
        	//require APP.'view/frontend/category_list.php';
        	require APP.'view/frontend/product_list.php';
        	require APP.'view/frontend/footer.php';
        }

        public function sub_category_wise_product_list($sub_category_ID){
            session_start();
                        if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user"){
                $user = $this->model->getUserByEmail($_SESSION['email']);
                $user_first_name = $user->first_name;
                $user_last_name = $user->last_name;
            }

        	$all_category = $this->model->getAllCategory();
        	$amount_of_category = $this->model->getAmountOfCategory();
        	$all_sub_category = $this->model->getAllSubCategory();

        	// $sub_category_ID = $_REQUEST['sub_category_ID'];
        	$product_list = $this->model->getRecipesBySubCategory($sub_category_ID);
                       $getmenu= $this->model->dynamic_menu();
        	require APP.'view/frontend/header.php';
        	require APP.'view/frontend/category_list.php';
        	require APP.'view/frontend/product_list.php';
        	require APP.'view/frontend/footer.php';
        }

        public function contact_us(){
		            $getmenu= $this->model->dynamic_menu();
            require APP.'view/frontend/header.php';
            require APP.'view/frontend/contact_us.php';
            require APP.'view/frontend/footer.php';
        }

        public function my_account(){
            session_start();


            if ($_SESSION['isThatOK'] == 'OK') {
			   
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/account.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function my_address(){
            session_start();


            if ($_SESSION['isThatOK'] == 'OK') {
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/address.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function checkout_1(){
            session_start();


                        if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user"){
			$getmenu= $this->model->dynamic_menu();
			$recipeids=isset($_SESSION["recipeid"])?implode(',',$_SESSION["recipeid"]):'null';
			//$getdata=$this->model->maxamountofcart($_SESSION['email']);
			$getdata=$this->model->maxamountofcart($recipeids);
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/checkout_1.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function checkout_2(){
            session_start();


                        if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user"){
			$checkoutonedata=$_POST;
			
			$getmenu= $this->model->dynamic_menu();
			$recipeids=isset($_SESSION["recipeid"])?implode(',',$_SESSION["recipeid"]):'null';
			//$getdata=$this->model->maxamountofcart($_SESSION['email']);
			$getdata=$this->model->maxamountofcart($recipeids);
			
			//$getdata=$this->model->maxamountofcart($_SESSION['email']);
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/checkout_2.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }
 private function infotutsPaypal($data) 
 {

  define( 'SSL_URL', 'https://www.paypal.com/cgi-bin/webscr' );
  define( 'SSL_SAND_URL', 'https://www.sandbox.paypal.com/cgi-bin/webscr' );

  $action = '';
 //Is this a test transaction?
  $action = ($data['paypal_mode']) ? SSL_SAND_URL : SSL_URL;
  $recipe=$this->model->getrecipeinfobycart($_SESSION['email']);
  $count=0;
  $formadd='';
  foreach($recipe as $row)
  {
  
    ++$count;
   if(empty($formadd))
   {
     
	 $formadd='<input type="hidden" name="item_name_'.$count.'" value="'.$row->recipe_name.'">';

     $formadd.='<input type="hidden" name="amount_'.$count.'" value="'.$row->recipe_price.'">';

     $formadd.='<input type="hidden" name="quantity_'.$count.'" value="1" required="required"><br>';
   }else
   {
     $formadd.='<input type="hidden" name="item_name_'.$count.'" value="'.$row->recipe_name.'">';

     $formadd.='<input type="hidden" name="amount_'.$count.'" value="'.$row->recipe_price.'">';

     $formadd.='<input type="hidden" name="quantity_'.$count.'" value="1" required="required"><br>';
   
   }
      
  }

 
 $form='<form action="' . $action . '" method="POST" name="frm_payment_method">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="' . $data['merchant_email'] . '">
<input type="hidden" name="cancel_return" value="' . $data['cancel_url'] . '" />
<input type="hidden" name="return" value="' . $data['thanks_page'] . '" />
<input type="hidden" name="currency_code" value="' . $data['currency_code'] . '" />
<input type="hidden" name="upload" value="1">'.$formadd.'<script>setTimeout("document.frm_payment_method.submit()", 2)</script></form>';
 return $form;
 }

        public function checkout_3(){
            session_start();


                       if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user"){
			$getmenu= $this->model->dynamic_menu();
            $checkoutonedata=$_POST;
			$_SESSION["checkoutonedata"]=$_POST;
			$getmenu= $this->model->dynamic_menu();

           $recipeids=isset($_SESSION["recipeid"])?implode(',',$_SESSION["recipeid"]):'null';
			//$getdata=$this->model->maxamountofcart($_SESSION['email']);
			$getdata=$this->model->maxamountofcart($recipeids);
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/checkout_3.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function checkout_4(){
            session_start();

if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user"){

			$getmenu= $this->model->dynamic_menu();

	         $recipeids=isset($_SESSION["recipeid"])?implode(',',$_SESSION["recipeid"]):'null';
			//$getdata=$this->model->maxamountofcart($_SESSION['email']);
			$getdata=$this->model->maxamountofcart($recipeids);
			if($_POST)
			{
			if(isset($_POST["passbyprevious"]) && $_POST["passbyprevious"]=="passbyprevious")
			{
			$_SESSION["checkoutonedata"]["InputCity"]=$_POST["id-state"];
			$_SESSION["checkoutonedata"]["InputCountry"]=$_POST["id_country"];
			$_SESSION["checkoutonedata"]["InputZip"]=$_POST["InputZip"];
			}else if(isset($_POST["paymenttype"]) && $_POST["paymenttype"]=="paypal")
			{
			$_SESSION["paymenttype"]="paypal";
			$data=array(
'merchant_email'=>'lemiszewski@gmx.com',
'currency_code'=>'USD',
'thanks_page'=>URL.'frontend/checkout_5',
'cancel_url'=>"http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
'paypal_mode'=>true,
);
echo $this->infotutsPaypal($data);
			}
			}		
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/checkout_4.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function checkout_5(){
            session_start();


            if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user") {

			$getmenu= $this->model->dynamic_menu();
			$recipeids=isset($_SESSION["recipeid"])?implode(',',$_SESSION["recipeid"]):'null';
			//$getdata=$this->model->maxamountofcart($_SESSION['email']);
			$getdata=$this->model->maxamountofcart($recipeids);
			
			$bookrecipe=$this->model->getrecipeinfobycartbyids($recipeids);
            //$recipeid=$this->model->recipeid($_SESSION['email']);
			$recipeid=$recipeids;
            $userifo= $this->model->getUserByEmail($_SESSION['email']);
             $data["recipe_ID"]=$recipeid;
			 $data["user_ID"]=$userifo->user_ID;
			 $data["first_name"]=$_SESSION["checkoutonedata"]["InputName"];
			 $data["last_name"]=$_SESSION["checkoutonedata"]["InputLastName"];
			 $data["address"]=$_SESSION["checkoutonedata"]["InputAddress"];
			 $data["city"]=$_SESSION["checkoutonedata"]["InputCity"];
			 $data["price"]=$getdata->totalammount;
			 $data["zip"]=$_SESSION["checkoutonedata"]["InputZip"];
			 $data["country"]=$_SESSION["checkoutonedata"]["InputCountry"];
			 $data["phone"]=$_SESSION["checkoutonedata"]["InputMobile"];
			 $data["email"]=$_SESSION["checkoutonedata"]["InputEmail"];
			 
			 if(isset($_POST["paymenttype"]) && $_POST["paymenttype"]=="cashondelivery")
			 {
			 
			 $data["payment_method"]=$_POST["paymenttype"];
			 $data["is_confirmed"]=0;
			 $this->model->addOrder($data);
			 //$this->model->deletedatafromcartbyemail($_SESSION['email']);
			 unset($_SESSION["paymenttype"]);
			 unset($_SESSION["recipeid"]);
			 unset($_SESSION["checkoutonedata"]);
			}
			else if(isset($_SESSION["paymenttype"]) && $_SESSION["paymenttype"]=="paypal")
			{
			 $data["payment_method"]=$_SESSION["paymenttype"];
			 $data["is_confirmed"]=1;
             $this->model->addOrder($data);
			 //$this->model->deletedatafromcartbyemail($_SESSION['email']);
			 unset($_SESSION["paymenttype"]);
			 unset($_SESSION["checkoutonedata"]);
			 unset($_SESSION["recipeid"]);
			 
			}


			    require APP.'view/frontend/header.php';
                require APP.'view/frontend/checkout_5.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function my_information() {
            session_start();


            if ($_SESSION['isThatOK'] == 'OK') {
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/user_information.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function my_cart(){
            session_start();


            if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user")
			{
			
			    $getmenu= $this->model->dynamic_menu();
				$totalproduct=isset($_SESSION["recipeid"])?count($_SESSION["recipeid"]):0;
				//$data=$this->model->getcartgroupby($_SESSION['email']);
				 $data=$_SESSION["recipeid"];
                 $getdata['recipe']='';
				$getdata['recipetotal']='';
				$hasvalue=0; 
				foreach($data as $k=>$v)
				{
				
                //$getdata['recipe'][]=$this->model->getRecipeByPK($row->recipe_ID);
				//$getdata['recipetotal'][$row->recipe_ID]=$row->total;
				$getdata['recipe'][]=$this->model->getRecipeByPK($v);
				$getdata['recipetotal'][$v]=1;
				$hasvalue=1;
				}
				
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/shopping_cart.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function my_wishlist(){
            session_start();


            if ($_SESSION['isThatOK'] == 'OK') {
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/wishlist.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }

        public function my_orders(){
            session_start();


             if (isset($_SESSION['isThatOK']) && $_SESSION['isThatOK'] == 'OK' && isset($_SESSION['usertype']) && $_SESSION['usertype']=="user")
			{
			$getmenu= $this->model->dynamic_menu();
			
			   $userifo= $this->model->getUserByEmail($_SESSION['email']);
              
			  $allorders= $this->model->getOrderByUserId($userifo->user_ID);
                require APP.'view/frontend/header.php';
                require APP.'view/frontend/order_list.php';   
                require APP.'view/frontend/footer.php';

            }
            else
                $this->login();
        }
    }
?>
