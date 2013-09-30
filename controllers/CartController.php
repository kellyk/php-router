<?php
require_once('BaseController.php');

class CartController extends BaseController {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		require_once('views/CartView.php');
	}

	public function list_items() {
		// get data from cart model
		require_once('models/CartModel.php');
		$model = new CartModel();
		$data = $model->getData();

		// load the view
		require_once('views/CartItemsView.php');
	}

	public function test() {
		echo "test method in cart controller";
	}
}