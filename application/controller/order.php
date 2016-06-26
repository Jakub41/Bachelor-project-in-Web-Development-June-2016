<?php 
	
	/**
	* Order Controller. This class will handle all order related functions.
	*/
	class order extends Controller
	{
		
		public function index()
		{
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/order/index.php';
			require APP.'view/_templates/footer.php';
		}
        public function delete_order($id)
	    {
			$this->model->checksession();
			$this->model->deleteOrder($id);
			header('Location:'.URL.'order/all_orders');
	    }
		public function all_orders()
		{
		    $this->model->checksession();
			if($_SESSION['usertype']=="admin")
			$all_orders = $this->model->getAllOrder();
			else if($_SESSION['usertype']=="user")
			$all_orders = $this->model->getOrderByUserId($_SESSION['userid']);
			
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/order/all_orders.php';
			require APP.'view/_templates/footer.php';
		}
		public function confirm_order($id)
		{
		    $this->model->checksession();
		    $this->model->confirm_order($id);
			header('Location:'.URL.'order/all_orders');
		}
		public function delivered_order()
		{
		    $this->model->checksession();
			if($_SESSION['usertype']=="admin")
			$all_orders = $this->model->delivered_order();
			else if($_SESSION['usertype']=="user")
			$all_orders = $this->model->delivered_order_for_user($_SESSION['userid']);
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/order/delivered.php';
			require APP.'view/_templates/footer.php';
		}
		public function pending_order()
		{
		    $this->model->checksession();
			if($_SESSION['usertype']=="admin")
			$all_orders = $this->model->pending_order();
			else if($_SESSION['usertype']=="user")
			$all_orders = $this->model->pending_order_for_user($_SESSION['userid']);
			require APP.'view/_templates/header.php';
			require APP.'view/dashboard/order/delivered.php';
			require APP.'view/_templates/footer.php';
		}
	}
 ?>