<?php
require_once('BaseController.php');

class ProfileController extends BaseController {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		require_once('views/ProfileView.php');
	}
}