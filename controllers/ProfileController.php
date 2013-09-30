<?php
require_once('BaseController.php');

class ProfileController extends BaseController {
	public function __construct() {
		parent::__construct();
		require_once('views/ProfileView.php');
	}
}