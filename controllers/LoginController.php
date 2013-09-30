<?php
require_once('BaseController.php');

class LoginController extends BaseController {

	public function __construct() {
		parent::__construct();
		require_once('views/LoginView.php');
	}

	public function submit() {

	}
}