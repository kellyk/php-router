<?php
require_once('BaseController.php');

class CartController extends BaseController {
	public function __construct() {
		parent::__construct();
	}
	public function list_items() {
		require_once('models/CartModel.php');
		$model = new CartModel();
		$data = $model->getData();
		require_once('views/CartView.php');
	}
}