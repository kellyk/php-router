<?php
require_once('BaseModel.php');
class CartModel extends BaseModel {

	public function __construct() {
		parent::__construct();
	}

	public function getData() {
		// some dummy data
		$array = array(
			'isbn' => 123456789,
			'bookTitle'    => 'Intro to Databases',
			'author' => 'Jon Stewart',
			'publishDate'     => '03-MAR-2001',
		);

		return $array;
	}
}