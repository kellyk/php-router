<?php
require_once('BaseModel.php');
class CartModel extends BaseModel {

	public function __construct() {
		parent::__construct();
	}

	public function getData() {
		$array = array(
			'name'    => 'Kelly',
			'project' => 'router',
			'dog'     => 'Yoshi',
		);

		return $array;
	}
}