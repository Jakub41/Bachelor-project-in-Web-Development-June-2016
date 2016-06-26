<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
	 
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    	public function sendEmail()
		{
            require_once APP.'model/PHPMailer/index.php';
            

            
            
     }
	
	
	public function uploadimage($imagename,$imagefor)
	{

			$target_dir =($imagefor=="user"?"uploads/":($imagefor=="blog"?"uploads/blog/":"uploads/subcategoryimg/"));
			
			$uploadOk = 1;
			$imageFileType = pathinfo(basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION);
			$imgname=$imagename.".".$imageFileType;
			$target_file = $target_dir.$imgname;
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					// "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					return "1";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			/*if (file_exists($target_file)) {
				return "Sorry, file already exists.";
				$uploadOk = 0;
			}*/
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 50000000) {
				return "2";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				return "3";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				return "";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					return $imgname;
				} else {
					return "";
				}
			}	
	}
	public function updateuserdata($data)
	{

	$sql="update users set first_name=:first_name,last_name=:last_name,email=:email where user_ID=:user_ID";
	$query = $this->db->prepare($sql);
	$parameters = array(
            ':user_ID' => $data['userid'],
			 ':first_name'=>$data['firstname'],
			 ':last_name'=>$data['lastname'],
			 ':email'=>$data['email']
        );
		$query->execute($parameters);
	}
	public function deletedata($table,$id)
	{
	$sql="delete from ".$table." where user_ID=:user_ID";
	$query = $this->db->prepare($sql);
	$parameters = array(
            ':user_ID' => $id 
        );
	$query->execute($parameters);
	}
	public function updateuserpassword($useremail,$userpassword)
	{
	
	$sql="update users set password=:password where email=:email";
	$query = $this->db->prepare($sql);
    	$parameters = array(
            ':password' => $userpassword,
			':email'=>$useremail 
        );
	$query->execute($parameters);
	
	$sql="update credentials set password=:password where email=:email";
	$query = $this->db->prepare($sql);
    	$parameters = array(
            ':password' => $userpassword,
			':email'=>$useremail 
        );
	$query->execute($parameters);
		
	}
	public function getsingleuserinfo($id)
	{
	
	$sql="select  *from users where user_ID=:user_ID";
	$query = $this->db->prepare($sql);
	$parameters = array(
            ':user_ID' => $id 
        );
	$query->execute($parameters);
	$row = $query->fetchAll();
	return $row;
	}
    public function getuserinfo()
	{
	
	$sql="select  *from users";
            $query = $this->db->prepare($sql);
	$query->execute();		
	$row = $query->fetchAll();
	return $row;
	}
    public function islogin($email,$password)
	{
	$sql="select id,email from admin where email=:email and password=:password";
            $query = $this->db->prepare($sql);
	$parameters = array(
            ':email' => $email , 
            ':password' => $password
        );
	$query->execute($parameters);		
	$row = $query->fetchAll();
	return $row;
	}

    /*********************************************
     *               ADD SECTION                 *
     *********************************************/

    public function addBlog($data){
        
		if(empty($data['post_image']))
		{
		$sql = "INSERT INTO blog (user_ID, post_title, post_content,user_type) VALUES (:user_ID, :post_title, :post_content,:user_type)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':user_ID' => $data['user_ID'] , 
            ':post_title' => $data['post_title'], 
            ':post_content' => $data['post_content'],
			':user_type'=>$data["user_type"]
			);
        $query->execute($parameters);
		}else
		{
		$sql = "INSERT INTO blog (user_ID, post_title, post_content, post_image,user_type) VALUES (:user_ID, :post_title, :post_content, :post_image,:user_type)";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':user_ID' => $data['user_ID'] , 
            ':post_title' => $data['post_title'], 
            ':post_content' => $data['post_content'], 
            ':post_image' => $data['post_image'],
			':user_type'=>$data["user_type"] 
        );

        $query->execute($parameters);
		}
    }

    public function addCategory($categry_name){
        $sql = "INSERT INTO category (category_name) VALUES (:category_name)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':category_name' => $categry_name
        );


        $query->execute($parameters);
    }

    public function addContact($data){
        $sql = "INSERT INTO contact (name, email, subject, message) VALUES (:name, :email, :subject, :message)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':name' => $data['name'], 
            ':email' => $data['email'], 
            ':subject' => $data['subject'], 
            ':message'=> $data['message'] 
        );

        $query->execute($parameters);
    }
    public function checksession()
	{
	       session_start();
		   
		   if (@$_SESSION['isThatOK']!= 'OK' || !isset($_SESSION['isThatOK'])) 
			{
			header('Location:'.URL.'dashboard/login');
			}
	}
    public function addCredentials($data){
        $sql = "INSERT INTO credentials (email, password, verify_string) VALUES (:email, :password, :verify_string)";

        $query = $this->db->prepare($sql);
        $parameters = array( 
            ':email' => $data['email'], 
            ':password' => $data['password'],
            ':verify_string' => $data['verify_string']
        );

        $query->execute($parameters);
    }

    public function addLogbook($data){
        $sql = "INSERT INTO logbook (user_ID, ip) VALUES(:user_ID, :ip)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':user_ID' => $data['user_ID'] , 
            ':ip' => $data['ip'] 
        );

        $query->execute($parameters);
    }
	public function deletemessage($messageid)
	{
	   $sql = "DELETE FROM message WHERE id=:messageid";
       $query = $this->db->prepare($sql);
       $parameters = array(':messageid'=>$messageid);
       $query->execute($parameters);	
	}
	public function select_message($messageid)
	{	
	    $sql = "SELECT *FROM message WHERE id=:messageid";
        $query = $this->db->prepare($sql);
        $parameters = array(':messageid'=>$messageid);
        $query->execute($parameters);	
       	$row = $query->fetch();
		return $row; 	
	}
	public function display_message()
	{
		$sql = "select *from message";
        $query = $this->db->prepare($sql);
        $query->execute();	
	    $row = $query->fetchAll();

		return $row;	
	}
	public function updatemessage($data)
	{
	    $sql="UPDATE message SET subject=:subject,message=:message WHERE id=:messageid";
	    $query = $this->db->prepare($sql);
        $parameters = array(
            ':subject' => $data['subject'],
			':message'=>$data['message'],
			':messageid'=>$data['messageid']
        );
       $query->execute($parameters);	
	
	}
    public function addmessage($data)
	{
	
         $sql = "INSERT INTO message (subject,message) VALUES (:subject,:message)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':subject' => $data['subject'],
			':message'=>$data['message']
        );

        $query->execute($parameters);	
	}
    public function addNewsletter($data){
        $sql = "INSERT INTO newsletter (email) VALUES (:email)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':email' => $data['email']
        );

        $query->execute($parameters);
    }

    public function addOrder($data){
        $sql = "INSERT INTO orders (recipe_ID, user_ID, first_name, last_name, address, city, price, zip, country, phone, email, payment_method,is_confirmed) VALUES (:recipe_ID, :user_ID, :first_name, :last_name, :address, :city, :price, :zip, :country, :phone, :email, :payment_method,:is_confirmed)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':recipe_ID' => $data['recipe_ID'] , 
            ':user_ID' => $data['user_ID'], 
            ':first_name' => $data['first_name'], 
            ':last_name' => $data['last_name'] , 
            ':address' => $data['address'] , 
            ':city' => $data['city'] , 
            ':price' => $data['price'], 
            ':zip' => $data['zip'] , 
            ':country' => $data['country'] , 
            ':phone' => $data['phone'] , 
            ':email' => $data['email'], 
            ':payment_method' => $data['payment_method'] ,
			':is_confirmed'=>$data['is_confirmed']
        );

        $query->execute($parameters);
    }
	public function maxblogid()
	{
	$sql = "SELECT (CASE WHEN (MAX(  `post_ID` ) IS NULL) THEN 1 ELSE (MAX(  `post_ID` )+1) END) AS VALUE FROM  `blog`";
			$query = $this->db->prepare($sql);
			$query->execute();
	$row = $query->fetch();
			return $row;
	
	}
	public function maxrecipeid()
	{
	$sql = "SELECT (CASE WHEN (MAX(  `recipe_ID` ) IS NULL) THEN 1 ELSE (MAX(  `recipe_ID` )+1) END) AS VALUE FROM  `recipes`";
			$query = $this->db->prepare($sql);
			$query->execute();
	$row = $query->fetch();
			return $row;
	}
    public function addRecipe($data){
       
	    $sql = "INSERT INTO recipes (category_ID, sub_category_ID, recipe_name, recipe_details, recipe_price, recipe_image) VALUES (:category_ID, :sub_category_ID, :recipe_name, :recipe_details, :recipe_price, :recipe_image)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':category_ID' => $data['category_ID'] , 
            ':sub_category_ID' => $data['sub_category_ID'], 
            ':recipe_name' => $data['recipe_name'], 
            ':recipe_details' => $data['recipe_details'], 
            ':recipe_price' => $data['recipe_price'] , 
            ':recipe_image' => $data['recipe_image'] 
            
        );
   //':is_active' => $data['is_active']
        $query->execute($parameters);
		
    }

    public function addSubCategory($data){
    $sql = "INSERT INTO sub_category (category_ID, sub_category_name,imgname) VALUES (:category_ID, :sub_category_name,	:imgname)";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':category_ID' => $data['category_ID'] , 
            ':sub_category_name' => $data['sub_category_name'],
			':imgname'=>$data['subcat_image'] 
        );

        $query->execute($parameters);
    }

    public function addUser($data){
        $sql = "INSERT INTO users (first_name, last_name,password, address, city, state, zip, country, phone, email, image) VALUES (:first_name, :last_name,:password, :address, :city, :state, :zip, :country, :phone, :email, :image )";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':first_name' => $data['first_name'] , 
            ':last_name' => $data['last_name'],
			':password'=>$data['password'], 
            ':address' => $data['address'], 
            ':city' => $data['city'] , 
            ':state' => $data['state'] , 
            ':zip' => $data['zip'] , 
            ':country' => $data['country'] , 
            ':phone' => $data['phone'] , 
            ':email' => $data['email'] , 
            ':image' => $data['image']
        );

        $query->execute($parameters);
		
    }
	public function deletedatafromcartbyemail($email)
	{
	  
	  $sql = "delete from  shopping_cart where  email=:email";
	  $query = $this->db->prepare($sql);
	  $parameters = array(':email' => $email );
	  $query->execute($parameters);
	  
	}
     public function deletedatabycart($recipe_ID)
	 {
	  $sql = "delete from  shopping_cart where  recipe_ID=:recipe_ID";
	  $query = $this->db->prepare($sql);
	  $parameters = array(':recipe_ID' => $recipe_ID );
	  $query->execute($parameters);
	 }
    public function addToCart($email, $recipe_ID){
        $sql = "INSERT INTO shopping_cart (email, recipe_ID) VALUES(:email, :recipe_ID)";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email , ':recipe_ID' => $recipe_ID );

        $query->execute($parameters);
    }

    public function addWishList($data){
        $sql = "INSERT INTO wishlist (recipe_ID, user_ID) VALUES (:recipe_ID, :user_ID)";

        $query = $this->db->prepare($sql);
        $parameters = array(':recipe_ID' => $recipe_ID, ':user_ID' => $user_ID);

        $query->execute($parameters);
    }






    /*********************************************
     *            DELETE SECTION                 *
     *********************************************/

    public function deleteBlog($post_ID){
        $sql = "DELETE FROM blog WHERE post_ID = :post_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':post_ID' => $post_ID );

        $query->execute($parameters);
    }
    public function editcatagory($category_ID)
    {
     $sql = "select *from category WHERE category_ID = :category_ID";

        $query = $this->db->prepare($sql);
        $query ->bindValue(':category_ID', $category_ID,PDO::PARAM_INT);
        $query->execute();
		$row = $query->fetch();
	    return $row;
    }
	public function updatecategory($category_ID,$data)
	{
	
	  $sql = "update category set category_name=:category_name WHERE category_ID = :category_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID,':category_name'=>$data['categoryname']);

        $query->execute($parameters);

	}
    public function deleteCategory($category_ID)
	{
	    $this->deleteSubCategoryByFPK($category_ID);
		$this->deleteRecipebycatid($category_ID);
		
        $sql = "DELETE FROM category WHERE category_ID = :category_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID);

        $query->execute($parameters);

    }

    public function deleteContact($contact_ID){
        $sql = "DELETE FROM contact WHERE contact_ID = :contact_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':contact_ID' => $contact_ID );

        $query->execute($parameters);
    }

    public function deleteCredentials($email){
        $sql = "DELETE FROM credentials WHERE email = :email";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email );

        $query->execute($parameters);
    }

    public function deleteLogbook($log_ID){
        $sql = "DELETE FROM logbook WHERE log_ID = :log_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':log_ID' => $log_ID );

        $query->execute($parameters);
    }
    
    public function deleteNewsletter($newsletter_ID){

        $sql = "DELETE FROM newsletter WHERE newsletter_ID = :newsletter_ID";
        $query = $this->db->prepare($sql);

        $parameters = array(':newsletter_ID' => $newsletter_ID);
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
	public function delivered_order_for_user($user_id)
	{
	$sql = "SELECT *FROM orders WHERE is_delivered ='1' and user_ID=:user_ID";
	$query = $this->db->prepare($sql);
	$parameters = array(':user_ID' => $user_id);
	$query->execute($parameters);
	$data=$query->fetchAll();
	return $data;
	}
	public function delivered_order()
	{
	$sql = "SELECT *FROM orders WHERE is_delivered ='1'";
	$query = $this->db->prepare($sql);
	$query->execute();
	$data=$query->fetchAll();
	return $data;
	}
	public function pending_order_for_user($user_id)
	{
	$sql = "SELECT *FROM orders WHERE is_delivered ='0' and user_ID=:user_ID";
	$query = $this->db->prepare($sql);
	$parameters = array(':user_ID' => $user_id);
	$query->execute($parameters);
	$data=$query->fetchAll();
	return $data;
	}
	public function pending_order()
	{
	$sql = "SELECT *FROM orders WHERE is_delivered ='0'";
	$query = $this->db->prepare($sql);
	$query->execute();
	$data=$query->fetchAll();
	return $data;
	}
   public function confirm_order($id)
   {
       $sql = "UPDATE orders SET is_confirmed='1' WHERE order_ID = :order_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':order_ID' => $id);

        $query->execute($parameters);
	

   }
    public function deleteOrder($order_ID){
        $sql = "DELETE FROM orders WHERE order_ID = :order_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':order_ID' => $order_ID );

        $query->execute($parameters);
    }
	public function deleteRecipebycatid($category_ID)
	{
        $sql = "DELETE FROM recipes WHERE category_ID = :category_ID";
        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID);
        $query->execute($parameters);
    }
	public function deleteRecipebysubcatid($sub_category_ID)
	{
        $sql = "DELETE FROM recipes WHERE sub_category_ID = :sub_category_ID";
        $query = $this->db->prepare($sql);
        $parameters = array(':sub_category_ID' => $sub_category_ID);
        $query->execute($parameters);
    }
    public function deleteRecipe($recipe_ID)
	{
        $sql = "DELETE FROM recipes WHERE recipe_ID = :recipe_ID";
        $query = $this->db->prepare($sql);
        $parameters = array(':recipe_ID' => $recipe_ID );
        $query->execute($parameters);
    }    
    public function deleteSubCategory($sub_category_ID)
	{
	    $this->deleteRecipebysubcatid($sub_category_ID);
        $sql = "DELETE FROM sub_category WHERE sub_category_ID = :sub_category_ID";
        $query = $this->db->prepare($sql);
        $parameters = array(':sub_category_ID' =>$sub_category_ID );
        $query->execute($parameters);
    }

    public function deleteUser($user_ID){
        $sql = "DELETE FROM users WHERE user_ID = :user_ID";

        $query  = $this->db->prepare($sql);
        $parameters = array(':user_ID' => $user_ID );

        $query->execute($parameters);
    }

    public function deleteCart($user_ID){
        $sql = "DELETE FROM shopping_cart WHERE user_ID = :user_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':user_ID' => $user_ID);
        $query->execute($parameters);
    }

    public function deleteFromCart($email, $cart_ID){
        $sql = "DELETE FROM shopping_cart WHERE email = :email AND cart_ID = :cart_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email, ':cart_ID' => $cart_ID );
        $query->execute($parameters);
    }

    public function deleteFromWishlist($wishlist_ID){
        $sql = "DELETE FROM wishlist WHERE wishlist_ID = :wishlist_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':wishlist_ID' => $wishlist_ID);

        $query->execute($parameters);
    }





    /*********************************************
     *            GET By PK SECTION              *
     *********************************************/


    public function getBlogByuserid($user_ID)
	{
        $sql = "SELECT post_ID, user_ID, post_title, post_content, post_image, post_date,user_type from blog WHERE user_ID = :user_ID and user_type='user'";

        $query = $this->db->prepare($sql);
        $parameters = array(':user_ID' => $user_ID);

        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function getBlogByPK($post_ID){
        $sql = "SELECT post_ID, user_ID, post_title, post_content, post_image, post_date from blog WHERE post_ID = :post_ID LIMIT 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':post_ID' => $post_ID );

        $query->execute($parameters);
        return $query->fetch();
    }
    public function dynamic_menu()
	{
	 $all_categories = $this->getAllCategory();
	 foreach($all_categories as $row)
	 {
	    $data['catagoryname'][]=$row->category_name;
		$data['catagoryid'][]=$row->category_ID;
		$subcatagory=$this->getSubCategory($row->category_ID);
		$data['subcatagory'][]=$subcatagory;
        foreach($subcatagory as $newrow)
		{
		$data['recipe'][$newrow->sub_category_ID]=$this->getRecipesBySubCategory($newrow->sub_category_ID);
		}
		
	 }
	 
	 return $data;
	}
    public function getCategoryByPK($category_ID){
        $sql = "SELECT category_ID, categoryname FROM category WHERE category_ID = :category_ID LIMIT 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID);
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        return $query->fetch();
    }

    public function getContactByPK($contact_ID){
        $sql = "SELECT contact_ID, name, email, subject, message, date FROM contact WHERE contact_ID = :contact_ID LIMIT 1";

        $query = $this->prepare($sql);
        $parameters = array(':contact_ID' => $contact_ID);

        $query->execute($parameters);
        return $query->fetch();
    }

    public function getLogbookByPK($log_ID){
        $sql = "SELECT log_ID, user_ID, ip, login_date FROM logbook WHERE log_ID = :log_ID LIMIT 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':log_ID' => $log_ID);

        $query->execute($parameters);
        return $query->fetch();
    }

    public function getNewsletterByPK($newsletter_ID){
        $sql = "SELECT newsletter_ID, email, date FROM  newsletter WHERE newsletter_ID = :newsletter_ID LIMIT 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':newsletter_ID' => $newsletter_ID );

        $query->execute($parameters);
        return $query->fetch();

    }


public function getOrderByUserId($user_ID){
        $sql = "SELECT order_ID, recipe_ID, user_ID, first_name, last_name, address, city, price, zip, country, phone, email, payment_method,is_confirmed, order_date FROM orders WHERE user_ID = :user_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':user_ID' => $user_ID );

        $query->execute($parameters);
        return $query->fetchAll();
    }
    public function getOrderByPK($order_ID){
        $sql = "SELECT order_ID, recipe_ID, user_ID, first_name, last_name, address, city, price, zip, country, phone, email, payment_method,is_confirmed, order_date FROM orders WHERE order_ID = :order_ID LIMIT 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':order_ID' => $order_ID );

        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function getRecipeByPK($recipe_ID){
        $sql = "SELECT * FROM recipes WHERE recipe_ID = :recipe_ID LIMIT 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':recipe_ID' => $recipe_ID );

        $query->execute($parameters);
        return $query->fetch();
    }
 public function deleteSubCategoryByFPK($category_ID)
 {
        $sql = "DELETE  FROM sub_category WHERE category_ID = :category_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID );

        $query->execute($parameters);

    }

    public function getSubCategoryByPK($sub_category_ID){
        $sql = "SELECT sub_category_ID, category_ID, sub_category_name FROM sub_category WHERE sub_category_ID = :sub_category_ID LIMIT 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':sub_category_ID' => $sub_category_ID );

        $query->execute($parameters);
        return $query->fetch();
    }

    public function getUserByPK($user_ID){
        $sql = "SELECT user_ID, first_name, last_name, address, city, province, zip, country, phone, email, image, registration_date, status FROM users WHERE user_ID = :user_ID LIMIT 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':user_ID' => $user_ID );

        $query->execute($parameters);
        return $query->fetch();
    }

    public function getUserByEmail($email){
        $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";


        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);

        $data= $query->fetch();
        return $data;		
    }

    public function getCompnayDetails(){
        $sql = "SELECT * FROM company WHERE ID = 1";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch();
    }

    public function getWishlistByUser($email){
        $sql = "SELECT * FROM wishlist WHERE email = :email ";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);

        return $query->fetch();
    }

    public function getCredentialsByEmail($email){
        $sql ="SELECT * FROM credentials WHERE email = :email";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);

        return $query->fetch();
    }



    /*********************************************
     *            UPDATE SECTION                 *
     *********************************************/
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    public function updateBlog($data)
	{
	   if(empty($data["post_image"]))
	   {
	      
		  $sql = "UPDATE blog SET post_title = :post_title, post_content = :post_content WHERE post_ID = :post_ID";

          $query=$this->db->prepare($sql);
          $parameters = array(
            ':post_title' => $data['post_title'],
            ':post_content' => $data['post_content'],
            ':post_ID' => $data['post_ID']
          );

          $query->execute($parameters);
		  
	   
	   }else
	   {
          $sql = "UPDATE blog SET post_title = :post_title, post_content = :post_content, post_image = :post_image WHERE post_ID = :post_ID";

          $query=$this->db->prepare($sql);
          $parameters = array(
            ':post_title' => $data['post_title'],
            ':post_content' => $data['post_content'],
            ':post_image' => $data['post_image'],
            ':post_ID' => $data['post_ID']
          );

          $query->execute($parameters);
		}
    }

    /*public function updateCategory($data){
        $sql = "UPDATE category SET category_name = :category_name WHERE category_ID = :category_ID";

        $query = $this->db->prepeare($sql);
        $parameters = array(
            ':category_name' => $data['category_name'],
            ':category_ID' => $data['category_ID'] 
        );

       $query->execute($parameters);
    }*/

    // public function updateCompany($data)
    // {

    // }

    public function updateContact($data){
        $sql = "UPDATE contact SET name = :name, email = :email, subject = :subject, message = :message WHERE contact_ID = :contact_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':name' => $data['name'] , 
            ':email' => $data['email'], 
            ':subject' => $data['subject'] , 
            ':message' => $data['message'] , 
            ':contact_ID' => $data['contact_ID'] 
        );

        $query->execute($parameters);
    }
   
    public function updateCredentialsByEmail($email,$verify_string)
	{
        $sql = "UPDATE credentials SET verify_string=:verify_string WHERE email = :email";
        $query = $this->db->prepare($sql);
        $parameters = array(':verify_string' => $verify_string,':email'=>$email);
        $query->execute($parameters);
    }
    public function updateCredentials($verify_string){
        $sql = "UPDATE credentials SET verify_state =:verify_state, date = :date,verify_string='NULL' WHERE verify_string = :verify_string";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':verify_state' =>1, 
            ':date' =>date('Y-m-d H:i:s'), 
            ':verify_string' => $verify_string 
        );

        $query->execute($parameters);
    }

    public function updateLogbook($data){
        $sql = "UPDATE logbook SET user_ID = :user_ID, ip = :ip WHERE log_ID = :log_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':user_ID' => $data['user_ID'], 
            ':ip' => $data['ip'] , 
            ':log_ID' => $data['log_ID']
        );

        $query->execute($parameters);
    }

    public function updateNewsletter($data){
        $sql = "UPDATE newsletter SET email = :email WHERE newsletter_ID = :newsletter_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':email' => $data['email'] , 
            ':newsletter_ID' => $data['newsletter_ID']
        );

        $query->execute($parameters);
    }

    public function updateOrders($data){
        $sql = "UPDATE orders SET recipe_ID = :recipe_ID, user_ID = :user_ID, first_name = :first_name, last_name = :last_name, address = :address, city = :city, province = :province, zip = :zip, country = :country, phone = :phone, email = :email, payment_method = :payment_method WHERE order_ID = :order_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':recipe_ID' => $data['recipe_ID'] , 
            ':user_ID' => $data['user_ID'], 
            ':first_name' => $data['first_name'] , 
            ':last_name' => $data['last_name'] , 
            ':address' => $data['address'] , 
            ':city' => $data['city'] , 
            ':province' => $data['province'] , 
            ':zip' => $data['zip'], 
            ':country' => $data['country'] , 
            ':phone' => $data['phone'] , 
            ':email' => $data['email'], 
            ':payment_method' => $data['payment_method'] , 
            ':order_ID' => $data['order_ID'] 
        );

        $query->execute($parameters);
    }

    public function updateRecipes($data)
	{
        if(empty($data["recipe_image"]))
		{
		$sql = "UPDATE recipes SET category_ID = :category_ID, sub_category_ID = :sub_category_ID, recipe_name = :recipe_name, recipe_details = :recipe_details, recipe_price = :recipe_price WHERE recipe_ID = :recipe_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':category_ID' => $data['category_ID'] , 
            ':sub_category_ID' => $data['sub_category_ID'] , 
            ':recipe_name' => $data['recipe_name'], 
            ':recipe_details' => $data['recipe_details'] , 
            ':recipe_price' => $data['recipe_price'] , 
            ':recipe_ID' => $data['recipe_ID']
        );
        
        $query->execute($parameters);
		}else
		{
		$sql = "UPDATE recipes SET category_ID = :category_ID, sub_category_ID = :sub_category_ID, recipe_name = :recipe_name, recipe_details = :recipe_details, recipe_price = :recipe_price, recipe_image = :recipe_image WHERE recipe_ID = :recipe_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':category_ID' => $data['category_ID'] , 
            ':sub_category_ID' => $data['sub_category_ID'] , 
            ':recipe_name' => $data['recipe_name'], 
            ':recipe_details' => $data['recipe_details'] , 
            ':recipe_price' => $data['recipe_price'] , 
            ':recipe_image' => $data['recipe_image'], 
            ':recipe_ID' => $data['recipe_ID']
        );
        
        $query->execute($parameters);
		}
    }

    public function updateSubCategory($data){
       
	   if(empty($data['subcat_image']))
	   {
	    $sql = "UPDATE sub_category SET category_ID = :category_ID, sub_category_name = :sub_category_name WHERE sub_category_ID = :sub_category_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':category_ID' => $data['category_ID'] , 
            ':sub_category_name' => $data['sub_category_name'] , 
            ':sub_category_ID' => $data['sub_category_ID']
        );

        $query->execute($parameters);
		}
		else
		{
	      $sql = "UPDATE sub_category SET category_ID = :category_ID, sub_category_name = :sub_category_name,imgname=:imgname WHERE sub_category_ID = :sub_category_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':category_ID' => $data['category_ID'] , 
            ':sub_category_name' => $data['sub_category_name'] , 
            ':sub_category_ID' => $data['sub_category_ID'],
			':imgname'=>$data['subcat_image']
        );

        $query->execute($parameters);
		
		
		}
    }
public function checkuser($email,$password)
{
    $sql="select count(*) as total from users where email=:email and password=:password";
    $query = $this->db->prepare($sql);
	$parameters = array(':email'=>$email,':password'=>$password);
    $query->execute($parameters);
    return $query->fetch();	
}
    public function updateUsers($data){
        $sql = "UPDATE users SET first_name = :first_name, last_name = :last_name, address = :address, city = :city, state = :state, zip = :zip, country = :country, phone = :phone WHERE user_ID = :user_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(
            ':first_name' => $data['userfname'] , 
            ':last_name' => $data['userlname'] , 
            ':address' => $data['useraddress'] , 
            ':city' => $data['usercity'], 
            ':state' => $data['userState'] , 
            ':zip' => $data['userzip'] , 
            ':country' => $data['usercountry'] , 
            ':phone' => $data['usermobile'] , 
            ':user_ID' => $data['user_ID']
        );

        $query->execute($parameters);
    }






    /*********************************************
     *          GET AMOUNT OF SECTION            *
     *********************************************/
    public function getAmountOfSongs(){
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }

    public function getAmountOfBlog(){
        $sql = "SELECT COUNT(post_ID) AS amount_of_post  FROM blog";

        $query = $this->db->prepare($sql);
        $quer->execute();

        return $query->fetch()->amount_of_post;
    }

    public function getAmountOfCategory(){
        $sql = "SELECT COUNT(category_ID) AS amount_of_category FROM category";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_category;
    }

    public function getAmountOfContact(){
        $sql = "SELECT COUNT(contact_ID) AS amount_of_contact FROM contact";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_contact;
    }

    public function getAmountOfCredentials($verify_string){
        $sql = "SELECT COUNT(*) AS amount_of_credentials FROM credentials WHERE verify_string = :verify_string";

        $query = $this->db->prepare($sql);
        $parameters = array(':verify_string' => $verify_string);
        $query->execute($parameters);

        return $query->fetch()->amount_of_credentials;
    }
	public function getAmountOfCredentialsByEmail($useremail){
        $sql = "SELECT COUNT(*) AS amount_of_credentials FROM credentials WHERE email = :email";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $useremail);
        $query->execute($parameters);

        return $query->fetch()->amount_of_credentials;
    }
	public function getuseraccountverify($email)
	{
        $sql = "SELECT verify_state FROM credentials WHERE email = :email";
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);
        return $query->fetch()->verify_state;
    }

    public function getAmountOfLogbook(){
        $sql = "SELECT COUNT(log_ID) AS amount_of_log FROM logbook";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_log;
    }

    public function getAmountOfNewsletter(){
        $sql = "SELECT COUNT(newsletter_ID) AS amount_of_newsletter FROM newsletter";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_newsletter;
    }

    public function getAmountOfOrders(){
        $sql = "SELECT COUNT(order_ID) AS amount_of_order FROM orders";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_order;
    }

    public function getAmountOfAllRecipes(){
        $sql = "SELECT COUNT(recipe_ID) AS amount_of_all_recipes FROM recipes";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_all_recipes;
    }

    public function getAmountOfRecipes($category_ID){
        $sql = "SELECT COUNT(recipe_ID) AS amount_of_recipes FROM recipes WHERE category_ID = :category_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID );
        $query->execute($parameters);

        return $query->fetch()->amount_of_recipes;
    }
    public function maxsubcat()
	{
	
	   $sql = "SELECT (CASE WHEN (MAX(  `sub_category_ID` ) IS NULL) THEN 1 ELSE (MAX(  `sub_category_ID` )+1) END) AS `maxid` FROM sub_category";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->maxid;
	
	}
    public function getAmountOfAllSubCategory(){
        $sql = "SELECT COUNT(sub_category_ID) AS amount_of_all_sub_category FROM sub_category";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_all_sub_category;
    }

    public function getAmountOfSubCategory($category_ID){
        $sql = "SELECT COUNT(sub_category_ID) AS amount_of_sub_category FROM sub_category WHERE category_ID = :category_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID );
        $query->execute($parameters);

        return $query->fetch()->amount_of_sub_category;

    }

    public function getAmountOfUsers(){
        $sql = "SELECT COUNT(user_ID) AS amount_of_users FROM users";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_users;
    }
	public function recipeid($email)
	{
	 $sql="SELECT GROUP_CONCAT(  `recipe_ID` ) as `id` 
FROM  `shopping_cart` 
WHERE  `email`=:email";
$query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);

        $data= $query->fetch();
		return $data->id;

	}
	public function getrecipeinfobycartbyids($recipe_IDS)
	{
         $sql="select `recipes`.`recipe_name`,`recipes`.`recipe_price`,`recipes`.`recipe_image`  from `recipes`  where `recipes`.`recipe_ID` in (".$recipe_IDS.")";	
$query = $this->db->prepare($sql);

        $query->execute();

        $data= $query->fetchAll();
		return $data;
 	
	}
	public function getrecipeinfobycart($email)
	{
         $sql="select `recipes`.`recipe_name`,`recipes`.`recipe_price`,`recipes`.`recipe_image`  from `recipes` inner join `shopping_cart` on recipes.recipe_ID=`shopping_cart`.`recipe_ID` where `shopping_cart`.`email`=:email";	
$query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);

        $data= $query->fetchAll();
		return $data;
 	
	}
 public function maxamountofcart($recipe_ID)
 {
 $sql="select sum(`recipes`.`recipe_price`) as totalammount,count(`recipes`.`recipe_ID`) as totalproduct from `recipes` where recipe_ID in (".$recipe_ID.")";
 //$sql="select sum(`recipes`.`recipe_price`) as totalammount,count(`shopping_cart`.`recipe_ID`) as totalproduct  from `recipes` inner join `shopping_cart` on recipes.recipe_ID=`shopping_cart`.`recipe_ID` where `shopping_cart`.`email`=:email";
 $query = $this->db->prepare($sql);
        
        //$query ->bindValue(':recipe_ID', $recipe_ID,PDO::PARAM_INT);
		$query->execute();

        $data= $query->fetch();
		return $data;
  
 
 }
 public function checkrecipeaddtocart($email,$recipeid)
 {
      $sql = "SELECT COUNT(*) AS total FROM shopping_cart WHERE email = :email and recipe_ID=:recipe_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email,':recipe_ID'=>$recipeid);
        $query->execute($parameters);

        return $query->fetch()->total;
 
 }
    public function getAmountOfCart($email){
        $sql = "SELECT COUNT(cart_ID) AS amount_of_cart FROM shopping_cart WHERE email = :email";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);

        return $query->fetch()->amount_of_cart;
    }

    public function getAmoutOfWishlistByUser($email){
        $sql = "SELECT COUNT(wishlist_ID) AS amount_of_wishlist FROM wishlist WHERE email = :email";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);

        return $query->fetch()->amount_of_wishlist;
    }

    public function getAmountOfAllWishlist(){
        $sql = "SELECT COUNT(wishlist_ID) AS amount_of_wishlist FROm wishlist_ID";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch->amount_of_wishlist;
    }




    /*********************************************
     *            GET ALL SECTION                *
     *********************************************/

    public function getAllSongs()
    {
        $sql = "SELECT id, artist, track, link FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }   

    public function getBlogbyid($id) {
        $sql = "SELECT * FROM blog  where post_ID=:post_ID";

        $query = $this->db->prepare($sql);
		$parameters = array(':post_ID' => $id);
        $query->execute($parameters);
        return $query->fetch();
    }
	public function deleteblogcommentwithblogid($blogid)
	{
	$sql = "delete from comments where blog_id=:blog_id";
	$query = $this->db->prepare($sql);
	$parameters = array(':blog_id'=>$blogid);
    $query->execute($parameters);	
	
	}
	public function deleteblogcomment($id)
	{
	$sql = "delete from comments where id=:id";
	$query = $this->db->prepare($sql);
	$parameters = array(':id'=>$id);
    $query->execute($parameters);	
	
	}
	public function deleterecipecommentwithrecipeid($recipeid)
	{
	$sql = "delete from recipescomments where recipe_id=:recipe_id";
	$query = $this->db->prepare($sql);
	$parameters = array(':recipe_id'=>$recipeid);
    $query->execute($parameters);	
	}
	public function deleteratingwithcommentid($recipe_comment_id)
	{
	$sql = "delete from userrating where recipe_comment_id=:recipe_comment_id";
	$query = $this->db->prepare($sql);
	$parameters = array(':recipe_comment_id'=>$recipe_comment_id);
    $query->execute($parameters);	
	}
	public function deleterecipecomment($id)
	{
	$sql = "delete from recipescomments where id=:id";
	$query = $this->db->prepare($sql);
	$parameters = array(':id'=>$id);
    $query->execute($parameters);	
	}
	public function getallblogcomments()
	{
$sql = "SELECT comments.id, comments.comment,(CASE WHEN (comments.user_type='admin') THEN 'ADMIN' ELSE (concat(users.first_name,' ',users.last_name)) END)  as name,comments.user_type,blog.post_title,comments.commentdate FROM comments inner join users on comments.user_id=users.user_ID inner join blog on blog.post_ID=comments.blog_id";
        $query = $this->db->prepare($sql);
		
        $query->execute();
        return $query->fetchAll();
	   
	
	}
	public function getallrecipecomments()
	{

	$sql = "SELECT recipescomments.id, recipescomments.comment,(CASE WHEN (recipescomments.user_type='admin') THEN 'ADMIN' ELSE (concat(users.first_name,' ',users.last_name)) END) as name,recipescomments.user_type,recipes.recipe_name,recipescomments.insertdate FROM recipescomments inner join users on recipescomments.user_id=users.user_ID inner join recipes on recipes.recipe_ID=recipescomments.recipe_id";

        $query = $this->db->prepare($sql);
		
        $query->execute();
        return $query->fetchAll();
	
	}
	public function insertpostcomment($user_id,$recipe_id,$comment,$user_type)
	{
	    $sql="insert into comments(blog_id,user_id,comment,user_type)value(:recipe_id,:user_id,:comment,:user_type)";
	    $query = $this->db->prepare($sql);
		$parameters = array(':user_id'=>$user_id,':recipe_id' => $recipe_id,':comment'=>$comment,':user_type'=>$user_type);
        $query->execute($parameters);	
	}
	public function insertrecipecomment($user_id,$recipe_id,$comment,$user_type)
	{
	$sql="insert into recipescomments(recipe_id,user_id,comment,user_type)value(:recipe_id,:user_id,:comment,:user_type)";
	        $query = $this->db->prepare($sql);
		$parameters = array(':user_id'=>$user_id,':recipe_id' => $recipe_id,':comment'=>$comment,':user_type'=>$user_type);
        $query->execute($parameters);
		return $this->db->lastInsertId();
	}
	public function insertrating($recipe_comment_id,$rating)
	{
	$sql="insert into `userrating`(`recipe_comment_id`,`rating`)value(:recipe_comment_id,:rating)";
	$query = $this->db->prepare($sql);
	$parameters = array(':recipe_comment_id' => $recipe_comment_id,':rating'=>$rating);
    $query->execute($parameters);
	}
	public function deleterating($user_id,$user_type,$recipe_id)
	{
	     
	     $sql ="delete from `userrating` where `recipe_comment_id` in (SELECT GROUP_CONCAT(  `id` ) as id 
FROM  `recipescomments` 
WHERE  `user_id` =:user_id
AND  `user_type` = :user_type
AND  `recipe_id` =:recipe_id)";
	     $query = $this->db->prepare($sql);
		 $parameters = array(':user_id' => $user_id,':user_type'=>$user_type,':recipe_id'=>$recipe_id);
         $query->execute($parameters);
	}
	public function getrecipecoments($id,$user_type)
	{
	
	  if($user_type=="user")
	  {
	   $sql = "SELECT `recipescomments`.`id`,`recipescomments`.`user_id`, `recipescomments`.`comment`,concat(`users`.`first_name`,' ',`users`.`last_name`) as name,`userrating`.`rating`  FROM `recipescomments` inner join `users` on `recipescomments`.`user_id`=`users`.`user_ID` LEFT OUTER  JOIN  `userrating` ON  `recipescomments`.`id` =  `userrating`.`recipe_comment_id`  where `recipescomments`.`recipe_id`=:recipe_id and `recipescomments`.`user_type`=:user_type";

        $query = $this->db->prepare($sql);
		$parameters = array(':recipe_id' => $id,':user_type'=>$user_type);
        $query->execute($parameters);
        return $query->fetchAll();
		}
	   else if($user_type=="admin")
		{
		//$sql = "SELECT recipescomments.comment,admin.name as name FROM recipescomments inner join admin on recipescomments.user_id=admin.id  where recipescomments.recipe_id=:recipe_id and recipescomments.user_type=:user_type";
$sql = "SELECT `recipescomments`.`id`,`recipescomments`.`user_id`, `recipescomments`.`comment`,`admin`.`name` as name,`userrating`.`rating`  FROM `recipescomments` inner join `admin` on `recipescomments`.`user_id`=`admin`.`id` LEFT OUTER  JOIN  `userrating` ON  `recipescomments`.`id` =  `userrating`.`recipe_comment_id`  where `recipescomments`.`recipe_id`=:recipe_id and `recipescomments`.`user_type`=:user_type";

        $query = $this->db->prepare($sql);
		$parameters = array(':recipe_id' => $id,':user_type'=>$user_type);
        $query->execute($parameters);
        return $query->fetchAll();
		}
	}
	public function getcomments($id,$user_type)
	{
	  if($user_type=="user")
	  {
	  $sql = "SELECT comments.comment,concat(users.first_name,' ',users.last_name) as name FROM comments inner join users on comments.user_id=users.user_ID  where comments.blog_id=:blog_id and comments.user_type=:user_type";

        $query = $this->db->prepare($sql);
		$parameters = array(':blog_id' => $id,':user_type'=>$user_type);
        $query->execute($parameters);
        return $query->fetchAll();
		}
		else if($user_type=="admin")
		{
$sql = "SELECT comments.comment,admin.name as name FROM comments inner join admin on comments.user_id=admin.id  where comments.blog_id=:blog_id and comments.user_type=:user_type";

        $query = $this->db->prepare($sql);
		$parameters = array(':blog_id' => $id,':user_type'=>$user_type);
        $query->execute($parameters);
        return $query->fetchAll();
		
		}
	
	}

    public function getAllBlog() {
        $sql = "SELECT * FROM blog";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllCategory(){
        $sql = "SELECT * FROM category";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllContact(){
        $sql = "SELECT * FROM contact";

       $query = $this->db->prepare($sql);
       $query->execute();

       return $query->fetchAll();
    }

    public function getAllCredentials(){
        $sql = "SELECT * FROM credentials";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }



    public function getAllLogbook(){
        $sql = "SELECT * FROM logbook";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllNewletterSubscibers(){        
        $sql = "SELECT * FROM newsletter";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllOrder(){
        $sql = "SELECT * FROM orders";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }


    public function getAllRecipes(){
        $sql = "SELECT * FROM recipes";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllActiveRecipes(){
        $sql = "SELECT * FROM recipes WHERE is_active = 1";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    
    public function getAllFeaturedRecipes(){
        $sql = "SELECT * FROM recipes WHERE is_featured = 1";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getNewestRecipes(){
        $sql = "SELECT * FROM recipes ORDER BY  update_date DESC LIMIT 12";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getRecipesByCategory($category_ID){
        $sql = "SELECT * FROM recipes WHERE category_ID = :category_ID AND is_active = 1";

        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID);
        $query->execute($category_ID);

        return $query->fetchAll();
    }

    public function getRecipesBySubCategory($sub_category_ID)
	{
         //$sql = "SELECT * FROM recipes WHERE sub_category_ID = :sub_category_ID AND is_active = 1";
        $sql = "SELECT * FROM recipes WHERE sub_category_ID = :sub_category_ID";
        $query = $this->db->prepare($sql);
        $parameters = array(':sub_category_ID' => $sub_category_ID );
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function getAllSubCategory(){
        $sql = "SELECT * FROM sub_category";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getSubCategory($category_ID){
        $sql = "SELECT * FROM sub_category WHERE category_ID = :category_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':category_ID' => $category_ID );
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    public function getcartgroupby($email)
	{
	 
	    $sql = "SELECT count(recipe_ID) as total,recipe_ID FROM shopping_cart WHERE email = :email group by recipe_ID";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email );
        $query->execute($parameters);

        return $query->fetchAll();
	 
	 
	}
    public function getCartByUser($email){
        $sql = "SELECT * FROM shopping_cart WHERE email = :email";

        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email );
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function getAllWishlist(){
        $sql = "SELECT * FROM wishlist";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    

    
}